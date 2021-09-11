# Route Middleware
## What is Route Middleware?
> Route Middleware is responsible for Securing only the Routes.
## Folder and Files Involved in Controller
* routes>**web.php**
* Http>Middleware>**ageCheck.php**
* Http>**Kernel.php**
* resources>views>**welcome**.blade.php
* resources>views>**noaccess**.blade.php
* resources>views>**home**.blade.php
## Another Question
> *php artisan make:middleware Middleware_Name*
## Implementation
> Creating Routes
```php
Route::get('/', function () {
    return view('welcome');
});
Route::view('noaccess', 'noaccess');

// Utilizing Route Middleware
Route::view('home', 'home')->middleware('protectedPage');
Route::view('users', 'users')->middleware('protectedPage');
```
> Creating Age Check Middleware
```php
class ageCheck
{
    public function handle(Request $request, Closure $next)
    {
        if($request->age && $request->age < 18){
            return redirect('noaccess');
        }
        return $next($request);
    }
}

```
> Declaring Middleware in Route Middleware
```php
    protected $routeMiddleware = [
        // Here we are utilizing Middleware in RouteMiddleware
=>      'protectedPage' => \App\Http\Middleware\ageCheck::class,

        'auth' => \App\Http\Middleware\Authenticate::class,
        'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
        'cache.headers' => \Illuminate\Http\Middleware\SetCacheHeaders::class,
        'can' => \Illuminate\Auth\Middleware\Authorize::class,
        'guest' => \App\Http\Middleware\RedirectIfAuthenticated::class,
        'password.confirm' => \Illuminate\Auth\Middleware\RequirePassword::class,
        'signed' => \Illuminate\Routing\Middleware\ValidateSignature::class,
        'throttle' => \Illuminate\Routing\Middleware\ThrottleRequests::class,
        'verified' => \Illuminate\Auth\Middleware\EnsureEmailIsVerified::class,
    ];
```

