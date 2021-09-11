# Heading
## How to Associate a Model with Database?
> 1. The **Table** name in Database is must be **plural**.
> 2. The **Model** / Class name must be **singular**.
## How does Laravel Connects to Database using Model
> Laravel makes connecting with databases and running queries extremely simple. The database configuration file is app/config/database. php . In this file you may define all of your database connections, as well as specify which connection should be used by default
## Folder and Files Involved in Controller
* app>Http>Controllers>**Controller.php**
* routes>**web.php**
* resources>views>**welcome**.blade.php
## CLI to generate User Model
> *php artisan make:model User*
## Implementation
> What is the Syntax of Model Created by CLI
```php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class User extends Model
{
    use HasFactory;
}
```
> How to Use Controller to display the Model in Response
```php
class UserController extends Controller
{
    function getData()
    {
        return User::all();
    }
}
```
> Routing File for Employee and Users
```php
Route::get('users', [UserController::class, 'getData']);
Route::get('employees', [EmployeeController::class, 'getData']);
```
> What is the Default Syntax of User Model Provided by Laravel
```php
namespace App\Models;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;
    protected $fillable = [
        'name',
        'email',
        'password',
    ];
    protected $hidden = [
        'password',
        'remember_token',
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}

```

