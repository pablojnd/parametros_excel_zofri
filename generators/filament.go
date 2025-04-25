package generators

import (
	"fmt"
	"os"
	"path/filepath"
	"strings"
	"unicode"
)

// GenerateFilamentResource crea un archivo de recurso de Filament para un modelo
func GenerateFilamentResource(filamentDir string, modelName string, tableName string, headers []string) error {
	// Determinar nombre para mostrar (sin prefijo Zofri)
	displayName := modelName
	if strings.HasPrefix(modelName, "Zofri") {
		displayName = modelName[5:] // Quitar "Zofri" del principio
	}

	// Formatear el displayName para que tenga espacios entre palabras
	// Ejemplo: "ArancelesDeVehiculos" -> "Aranceles de Vehiculos"
	formattedName := formatCamelCaseToReadable(displayName)

	// Convertir a singular y plural para etiquetas sin duplicar la 's'
	singularLabel := formattedName

	// Para el plural, verificar si ya termina en 's' para no duplicarla
	var pluralLabel string
	if strings.HasSuffix(strings.ToLower(singularLabel), "s") {
		pluralLabel = formattedName
	} else {
		pluralLabel = formattedName + "s"
	}

	// Determinar slug a partir del nombre de la tabla
	slug := strings.ReplaceAll(tableName, "zofri_", "parametros/")

	// Determinar grupo de navegación basado en el nombre
	// Los modelos que contengan "Tipo" o similares van a "Tipos", el resto a "Parámetros"
	navGroup := "Parámetros"
	if strings.Contains(strings.ToLower(modelName), "tipo") {
		navGroup = "Tipos"
	}

	// Crear directorio para el recurso si no existe
	resourcePath := filepath.Join(filamentDir, modelName+"Resource")
	if err := os.MkdirAll(resourcePath, 0755); err != nil {
		return err
	}

	// Crear directorio pages
	pagesPath := filepath.Join(resourcePath, "Pages")
	if err := os.MkdirAll(pagesPath, 0755); err != nil {
		return err
	}

	// Crear archivo de recurso principal
	mainResourcePath := filepath.Join(filamentDir, modelName+"Resource.php")
	mainResource, err := os.Create(mainResourcePath)
	if err != nil {
		return err
	}
	defer mainResource.Close()

	// Generar contenido del recurso principal
	fmt.Fprintf(mainResource, `<?php

namespace App\Filament\Resources\Parametros;

use App\Filament\Resources\Parametros\%sResource\Pages;
use App\Models\Parametros\%s;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Grid;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class %sResource extends Resource
{
    protected static ?string $model = %s::class;

    // No definimos icono para evitar problemas de compatibilidad
    protected static ?string $navigationGroup = '%s';
    protected static ?string $navigationLabel = '%s';
    protected static ?string $label = '%s';
    protected static ?string $pluralLabel = '%s';
    protected static ?string $slug = '%s';
    protected static ?string $recordTitleAttribute = 'name';
    protected static ?string $modelLabel = '%s';
    protected static ?string $pluralModelLabel = '%s';
    protected static bool $isScopedToTenant = false;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Información de %s')
                    ->columns(3)
                    ->schema([
`, modelName, modelName, modelName, modelName, navGroup, pluralLabel, singularLabel, pluralLabel, slug, singularLabel, pluralLabel, singularLabel)

	// Generar campos del formulario basados en los encabezados
	for _, h := range headers {
		field := Normalize(h)
		// Convertir a inglés si existe en el mapeo
		englishFieldName := field
		if en, exists := fieldNameMappings[field]; exists {
			englishFieldName = en
		}

		if strings.ToLower(field) == "vigencia" {
			fmt.Fprintf(mainResource, `                        Forms\Components\Toggle::make('is_active')
                            ->label('%s')
                            ->required(),
`, h)
		} else {
			// Determinar longitud máxima si hay información
			maxLength := 255
			fmt.Fprintf(mainResource, `                        Forms\Components\TextInput::make('%s')
                            ->label('%s')
                            ->required()
                            ->maxLength(%d)
                            ->columnSpan(1),
`, englishFieldName, h, maxLength)
		}
	}

	// Cerrar la definición del formulario
	fmt.Fprintln(mainResource, "                    ])")
	fmt.Fprintln(mainResource, "            ]);")
	fmt.Fprintln(mainResource, "    }")
	fmt.Fprintln(mainResource, "")

	// Generar tabla
	fmt.Fprintln(mainResource, "    public static function table(Table $table): Table")
	fmt.Fprintln(mainResource, "    {")
	fmt.Fprintln(mainResource, "        return $table")
	fmt.Fprintln(mainResource, "            ->columns([")

	// Generar columnas de la tabla basadas en los encabezados
	for _, h := range headers {
		field := Normalize(h)
		// Convertir a inglés si existe en el mapeo
		englishFieldName := field
		if en, exists := fieldNameMappings[field]; exists {
			englishFieldName = en
		}

		if strings.ToLower(field) == "vigencia" {
			fmt.Fprintf(mainResource, `                Tables\Columns\IconColumn::make('is_active')
                    ->label('%s')
                    ->boolean()
                    ->sortable(),
`, h)
		} else {
			fmt.Fprintf(mainResource, `                Tables\Columns\TextColumn::make('%s')
                    ->label('%s')
                    ->searchable()
                    ->sortable(),
`, englishFieldName, h)
		}
	}

	// Continuar con el resto de la tabla
	fmt.Fprintln(mainResource, `            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\List`+modelName+`::route('/'),
            'create' => Pages\Create`+modelName+`::route('/create'),
            'edit' => Pages\Edit`+modelName+`::route('/{record}/edit'),
        ];
    }
}`)

	// Generar archivos de páginas
	generateListPage(pagesPath, modelName, pluralLabel)
	generateCreatePage(pagesPath, modelName, singularLabel)
	generateEditPage(pagesPath, modelName, singularLabel)

	fmt.Printf("✅ Recurso Filament: %s (Grupo: %s)\n", mainResourcePath, navGroup)
	return nil
}

// generateListPage genera la página de listado
func generateListPage(pagesPath string, modelName string, pluralLabel string) error {
	pagePath := filepath.Join(pagesPath, "List"+modelName+".php")
	page, err := os.Create(pagePath)
	if err != nil {
		return err
	}
	defer page.Close()

	fmt.Fprintf(page, `<?php

namespace App\Filament\Resources\Parametros\%sResource\Pages;

use App\Filament\Resources\Parametros\%sResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class List%s extends ListRecords
{
    protected static string $resource = %sResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
`, modelName, modelName, modelName, modelName)
	return nil
}

// generateCreatePage genera la página de creación
func generateCreatePage(pagesPath string, modelName string, singularLabel string) error {
	pagePath := filepath.Join(pagesPath, "Create"+modelName+".php")
	page, err := os.Create(pagePath)
	if err != nil {
		return err
	}
	defer page.Close()

	fmt.Fprintf(page, `<?php

namespace App\Filament\Resources\Parametros\%sResource\Pages;

use App\Filament\Resources\Parametros\%sResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class Create%s extends CreateRecord
{
    protected static string $resource = %sResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
`, modelName, modelName, modelName, modelName)
	return nil
}

// generateEditPage genera la página de edición
func generateEditPage(pagesPath string, modelName string, singularLabel string) error {
	pagePath := filepath.Join(pagesPath, "Edit"+modelName+".php")
	page, err := os.Create(pagePath)
	if err != nil {
		return err
	}
	defer page.Close()

	fmt.Fprintf(page, `<?php

namespace App\Filament\Resources\Parametros\%sResource\Pages;

use App\Filament\Resources\Parametros\%sResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class Edit%s extends EditRecord
{
    protected static string $resource = %sResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
`, modelName, modelName, modelName, modelName)
	return nil
}

// formatCamelCaseToReadable convierte un string en camelCase a un formato legible con espacios
// Ejemplo: "ArancelesDeVehiculos" -> "Aranceles de Vehiculos"
func formatCamelCaseToReadable(s string) string {
	var result []rune

	// Si la cadena es vacía, devolver vacío
	if len(s) == 0 {
		return s
	}

	// Primera letra siempre en mayúscula
	result = append(result, rune(s[0]))

	// Procesar el resto de caracteres
	for i := 1; i < len(s); i++ {
		// Si encontramos una letra mayúscula, añadir un espacio antes
		// excepto si la anterior también era mayúscula (evitando separar acrónimos)
		current := rune(s[i])
		if unicode.IsUpper(current) && i > 0 && !unicode.IsUpper(rune(s[i-1])) {
			result = append(result, ' ')
		}
		result = append(result, current)
	}

	return string(result)
}
