# View
## What is View in Laravel
> Views contain the html code required by your application, and it is a method in Laravel that separates the controller logic and domain logic from the presentation logic. Views are located in the resources folder, and its path is resources/views. Let's see the simple example of views.
> It separates the application logic and the presentation logic. Views are stored in resources/views directory. Generally, the view contains the HTML which will be served by the application.
## What is view share in Laravel?
> Views hold the presentation logic of a Laravel application. It is served separately from the application logic using laravel's blade templating engine. Passing data from a controller to a view is as simple as declaring a variable and adding it as a parameter to the returned view helper method.
## What is Blade in Laravel?
Blade is the simple, yet powerful templating engine that is included with Laravel. Unlike some PHP templating engines, Blade does not restrict you from using plain PHP code in your templates. ... Blade template files use the .blade.php file extension and are typically stored in the resources/views directory

## Folders and Files
1. routes>**web.php**
2. resources>views>**admin.blade.php**
3. app>Http>Controllers>**AdminController.php**

## How to Use Controller to Display View without Parameter?
> Simple Html File
```html
<h2>User Blade is Working</h2>
```
> Controller Redirecting User to Blade File
```php
namespace App\Http\Controllers;
class UsersController extends Controller
{
    public function loadView(){
        echo "View Loaded By Controller";
        return view('users');
    }
}
```
> Directing To Controller from Routes
```php
// Without Parameter Controller and View
Route::get('users', [UsersController::class, 'loadView']);
```
## How to Use Controller to Display View with Parameter?
> Simple Html File
```html
<h2>Admin Blade is Working </h2>
<h2>Parameter Passed : {{$name}}</h2>
```
> Controller Redirecting User to Blade File
```php
namespace App\Http\Controllers;
class AdminController extends Controller
{
    public function loadView($name){
        return view('admins', ['name'=>$name]);
    }
}
```
> Directing To Controller from Routes
```php
// Without Parameter Controller and View
Route::get('admins/{name}', [AdminController::class, 'loadView']);
```
