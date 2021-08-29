# Heading
## What is include and required in PHP
> The require and include functions do the same task, i.e. includes and evaluates the specified file, but the difference is require will cause a fatal error when the specified file location is invalid or for any error whereas include will generate a warning and continue the code execution.
## What is the Difference between @include and Components?
> 1. This include will see all variables from the global/current scope
> ***@include('my-component')***
> 2. This include will only see the variables explicitly passed in
> ***@include('my-component', ['foo' => 'bar', 'etc' => 'etc'])***

## Folder and Files Involved in Controller
* app>Http>Controllers>**UsersController.php**
* routes>**web.php**
* resources>views>**inner**.blade.php
* resources>views>**users**.blade.php
## How to add template into another template using include
> routes>web.php
```php
Route::get('users', [UsersController::class, 'getView'] );
```
> Controller to send some data from Controller to View
```php
class UsersController extends BaseController
{
    function getView(){
        echo "getView Called";
        return view('users', ['data' => ['Ahsan', 'Asim', 'Mobin']]);
    }
}
```
> Inner Template is using for displaying the Content
```html
<h2>Inner Blade php</h2>
```
> Outer Template inner Template
```php
<h1>User Blade File</h1>
@include('inner')
@foreach($data as $item)
<h2>{{$item}}</h2>
@endforeach
<script>
    var data = @json($data);
    console.log(data[0]);
</script>
```
## How to add the @csrf token inside a page
```php
@csrf
```
## How to Pass data to JavaScript in Blade Template?
> To pass the data through a variable using following syntax in Script Tag
```php
<script>
    var data = @json($data);
    console.log(data[0]);
</script>
```
# Note : May be it is possible that we can also utilize the data passed by inner Template
