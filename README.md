# Procesador de Parámetros Excel para Laravel

Esta herramienta permite procesar archivos de Excel con parámetros y generar automáticamente:

- Migraciones de Laravel
- Modelos Eloquent
- Seeders con datos
- Archivos CSV
- Resúmenes de los datos

## Características

- Filtra hojas no deseadas (COEX, Portada, etc.)
- Genera seeders con enumeraciones para campos de vigencia
- Crea migraciones con tipos de datos apropiados
- Genera modelos con casts para enums
- Exporta datos a CSV

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
