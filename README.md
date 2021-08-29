# Controller
## 1. What is Controller?
> 1. Controllers are meant to group associated request handling logic within a single class. In your Laravel project, they are stored in the app/Http/Controllers' directory. The full form of MVC is Model View Controller, which act as directing traffic among the Views and the Models.
> 2. Controllers are classes that can be reached through the URL and take care of handling the request. A controller calls models and other classes to fetch the information. Finally, it will pass everything to a view for output.
## 2. Folder and Files Involved in Controller
* app>Http>Controllers>**Controller.php**
* routes>**web.php**
* resources>views>**welcome**.blade.php
## 3. How to Create Controller using CLI
> *php artisan make:controller Controller_Name*
## 4. How to use Simple Controller
> routes>**web.php**
```php
use App\Http\Controllers\Users;

Route::get('users', [Users::class, "index"]);
```
> app>Http>Controllers>**Users.php**
```php
<?php
namespace App\Http\Controllers;
class Users extends Controller
{
   public function index(){
       echo "Hello From Users Controller";
   }
}
```
## 5. How to use Parameterized Controller
> routes>**web.php**
```php
use App\Http\Controllers\Admin;

Route::get('admins/{greet}', [Admin::class, "index"]);
```
> app>Http>Controllers>**Users.php**
```php
<?php
class Admin extends Controller
{
    public function index($greet){
        echo $greet;
        echo "<br>Admin Controller Worked";
    }
}
```
## 6. How to Return JsonObject using Controller
> routes>**web.php**
```php
use App\Http\Controllers\Admin;

Route::get('jsonobject', [JsonObject::class, "index"]);
```
> app>Http>Controllers>**JsonObject.php**
```php
<?php
class JsonObject extends Controller
{
    public function index(){
        return ['name'=> 'Ahsan', 'age' => '30', 'gender' => 'Male'];
    }
}
```


