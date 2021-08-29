# Heading
## What is Blade Template in Laravel?
> Blade is the simple, yet powerful templating engine that is included with Laravel. Unlike some PHP templating engines, Blade does not restrict you from using plain PHP code in your templates. ... Blade template files use the .blade.php file extension and are typically stored in the resources/views directory..
## Folder and Files Involved in Controller
* app>Http>Controllers>**Controller.php**
* routes>**web.php**
* resources>views>**users**.blade.php
## Creating Controller using CLI
> *php artisan make:controller Controller_Name*
## Controller to Return Simple Property
> Controller Code
```php
class UsersController extends Controller
{
    function funcName()
    {
        return view('users', ['username' => "Ahsan"]);
    }
}
```
> User Blade Template Code
```php
{{$username}}
```
## Controller to Return List
> Controller Code
```php
class UsersController extends Controller
{
    function funcName()
    {
        return view('users', ['variable' => ['Ahsan', 'Asim', 'Mobin', 'Yousuf']]);
    }
}
```
> User Blade Template Code
```php
@foreach ($variable as $user)
    <li>{{$user}}</li>
@endforeach
```
## Controller to Return List of List
> Controller Code
```php
class UsersController extends Controller
{
    function funcName()
    {
        $data3 =  [
            'user' =>
            [
                ['id' => '101', 'name' => 'Sam', 'gender' => 'male'],
                ['id' => '102', 'name' => 'Samina', 'gender' => 'female'],
                ['id' => '103', 'name' => 'Samera', 'gender' => 'female'],
                ['id' => '104', 'name' => 'Shubnam', 'gender' => 'gay'],
            ]
        ];
        return view('users', ['variable' => $data3]);
    }
}
```
> User Blade Template Code
```php
@foreach ($variable as $user)
    @foreach ($user as $prop)
        @if($prop['gender'] == 'male')
            <h3>Hello Mr. {{$prop['name']}}</h3>
        @elseif($prop['gender'] == 'female')
            <h3>Hello Miss. {{$prop['name']}}</h3>
        @else
            <h3>Hello Gay. {{$prop['name']}}</h3>
        @endif
    @endforeach
@endforeach
```
