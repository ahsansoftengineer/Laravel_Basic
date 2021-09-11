# My Sql Connection
## How to Connect with the Data base in Laravel?
> 1. Defination ??.
> 2. Defination ??.
## Folder and Files Involved in Controller
* app>Http>Controllers>**UserController.php**
* routes>**web.php**
* **.env**
## CLI to generate Controller
> *php artisan make:controller UserController*
## Implementation
> Environment File Settings for MYSql
```javascript
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3307
DB_DATABASE=learn_laravel
DB_USERNAME=root
DB_PASSWORD=
```
> User Controller to Display the Response
```php
class UserController extends Controller
{
    function index(){
        return DB::select('select * from users');
    }
}
```
> Routing File
```php
Route::get('users', [UserController::class, 'index']);
```

