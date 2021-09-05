# Group Middleware
## What is Group Middleware?
> 1. Route Groups is an essential feature in Laravel, which allows you to group all the routes. Routes Groups are beneficial when you want to apply the attributes to all the routes. ... It allows you to share the attributes such as middleware or namespaces, without defining these attributes on each individual route..
> 2. Defination.
## Folder and Files Involved in Controller
* app>Http>Middleware>**AgeMiddleware.php**
* app>Http>**Kernel.php**
* routes>**web.php**
* resources>views>**welcome**.blade.php
* resources>views>**about**.blade.php
* resources>views>**home**.blade.php
## Another Question
> *php artisan make:middleware AgeCheck*
## Implementation
> Checking the age if it is greater than **18** Years
```php
class AgeCheck
{
    public function handle(Request $request, Closure $next)
    {
        if($request->age && $request->age < 18){
            return redirect('noaccess?age='.$request->age);
        }
        return $next($request);
    }
}
```
> * (**about / home**) are group and protected in Group Middleware
> * (**noaccess / ''**) are free to access with any Query Params
```php
Route::view('noaccess', 'noaccess');

// I think this is the old way of describing Group Middleware
Route::group(['middleware' => ['protectPage']], function(){
    Route::view('about', 'about');
    Route::view('home', 'home');
});
// I think the Latest is this
// Route::prefix('admin')->group(function () { 
// });
```

