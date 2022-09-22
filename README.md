# Creacion proyecto laravel


> composer create-project laravel/laravel example-app

donde example-app es el nombre y carpeta del proyecto.

El segundo, modificar el archivo .env (para configurar la base de datos)


* controlador

```php
class EjemploController  extends Controller
{
    public function ejemplo() {
        return View::make('vista');
    }
}
```

* modelo (trabaja con la tabla "articles")

> El modelo usa la libreria llamada Eloquent.
> Eloquent trabaja con la tecnologia ActiveRecord.

```
class Articles extends Model // Eloquent
{
    // base de datos, tenga una columna id, llave primaria.
}
```

* vista

> La vista usa la libreria Blade

```html
<h1>hola</h1>
{{$variable}}
```

* enrutamiento

```php
Route::get('/ejemplo',[EjemploController::class,'inicio']);
```
