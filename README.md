# Procesador de Parámetros Excel para Laravel

Esta herramienta permite procesar archivos de Excel con parámetros y generar automáticamente:

- Migraciones de Laravel
- Modelos Eloquent
- Seeders con datos
- DatabaseSeeder configurado para cargar todos los seeders
- Archivos CSV
- Resúmenes de los datos

## Características

- Filtra hojas no deseadas (COEX, Portada, etc.)
- Genera seeders con enumeraciones para campos de vigencia
- Crea migraciones con tipos de datos apropiados
- Genera modelos con casts para enums
- Exporta datos a CSV
- Crea un DatabaseSeeder que incluye todos los seeders generados

## Uso

```bash
go run .
```

Luego seleccione una opción:
1. Generar archivos Laravel (seeders, migraciones, modelos)
2. Generar archivos CSV
3. Generar resumen de hojas en un único .txt
4. Mostrar listado de hojas

## Estructura

- Los seeders se generan en `database/seeders/`
- Las migraciones se generan en `database/migrations/`
- Los modelos se generan en `app/Models/`
- Los enums se generan en `app/Enums/`
- Los CSV se generan en `output_csv/`

## Comandos Laravel Útiles

Después de copiar los archivos a tu proyecto Laravel:

```bash
# Ejecutar migraciones
php artisan migrate

# Cargar todos los seeders
php artisan db:seed

# Para seeders muy grandes, aumentar límite de memoria
php -d memory_limit=512M artisan db:seed

# Para ejecutar un seeder específico (recomendado para tablas grandes)
php artisan db:seed --class=ZofriAduanasSeeder

# Regenerar cache
php artisan optimize:clear
```

## Solución a Problemas Comunes

### Seeders demasiado grandes
Si un seeder es muy grande y causa errores de memoria, el programa lo dividirá automáticamente en lotes de 100 registros. También puedes:

1. Aumentar la memoria disponible para PHP:
   ```
   php -d memory_limit=1G artisan db:seed
   ```

2. Ejecutar cada seeder individualmente:
   ```
   php artisan db:seed --class=NombreDelSeeder
   ```

3. Editar el DatabaseSeeder y comentar los seeders que ya se han ejecutado.
