# Middleware
## What is MiddleWare?
1. > Middleware acts as a bridge between a request and a response. It is a type of filtering mechanism. Laravel includes a middleware that verifies whether the user of the application is authenticated or not..
2. > Middleware provide a convenient mechanism for inspecting and filtering HTTP requests entering your application. For example, Laravel includes a middleware that verifies the user of your application is authenticated.
## What is the Role of Kernel File in Laravel?
> The Console Kernel is used when you interact with your application from the command line. If you use artisan , or when a scheduled job is processed, or when a queued job is processed, all of these actions go through the Console Kernel. Basically, if you go through index. php , you'll be using the HTTP Kernel.
## What are the Types of the Middleware?
> There are three types of Middleware in Laravel. 
> Global Middleware will run on every HTTP request of the application
> Group Middleware will be assigned to a specific route.
> Routed Middleware applies on Route
> Note: The middleware can be registered at app/Http/Kernel.

## Folder and Files Involved in Controller
* app>Http>Middleware>**ageCheck.php**
* app>Http>**Kernel.php**
* routes>**web.php**
* resources>views>**welcome**.blade.php
* resources>views>**home**.blade.php
* resources>views>**noaccess**.blade.php
* resources>views>**users**.blade.php

## How to Create a Middleware using CLI
> ***php artisan make:middleware ageCheck***
## What is the Syntax of Middleware
> Checking the Age Limitation of the User
```php
namespace App\Http\Middleware;
use Closure;
use Illuminate\Http\Request;
class ageCheck
{
    public function handle(Request $request, Closure $next)
    {
        if($request->age && $request->age<18){
            return redirect('noaccess');
        }
        return $next($request);
    }
}
```
> Registering the Middleware into Kernel File 
```php
protected $middleware = [
    // \App\Http\Middleware\TrustHosts::class,
=>  \App\Http\Middleware\ageCheck::class, // Your Middleware goes here
    \App\Http\Middleware\TrustProxies::class,
    \Fruitcake\Cors\HandleCors::class,
    \App\Http\Middleware\PreventRequestsDuringMaintenance::class,
    \Illuminate\Foundation\Http\Middleware\ValidatePostSize::class,
    \App\Http\Middleware\TrimStrings::class,
    \Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull::class,
    ];
```
> There are no code in (home, noaccess, users, welcome).blade.php
> Routing File is alos Usual
```php
// Routing for the Middleware
Route::view('prompt', 'prompt');
Route::view('users', 'users');
Route::view('home', 'home');
Route::view('noaccess', 'noaccess');
```
## It has a down side if you don't add the Query Param then you can access the pages.

