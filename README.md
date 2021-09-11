# READING DATA FROM API
## How to Read Data from API in Laravel
> 1. With the rise of mobile development and JavaScript frameworks, using a RESTful API is the best option to build a single interface between your data and your client. Laravel is a PHP framework developed with PHP developer productivity in mind..
## Folder and Files Involved in Controller
* app>Http>Controllers>**APIController.php**
* routes>**web.php**
* resources>views>**welcome**.blade.php
## To Create the Controller use the following Command
> *php artisan make:controller Controller_Name*
## Implementation
> Controller that reads data from API
```php
class APIController extends Controller
{
    function utilizeAPI(){
        // return Http::get('https://restcountries.eu/rest/v2/name/pakistan');
        $collection =  Http::get('http://localhost:3000/User');
        $result = json_decode($collection, true);
        return view('users', ['collection'=> $result]);
    }
}
```
> Routing
```php
Route::get('api',[APIController::class, 'utilizeAPI']);
```
> View that Shows Data in Tabular Form Consuming API Data
```php
<table border="1">
    <tr>
        <th>Name</th>
        <th>User Name</th>
        <th>Business Name</th>
        <th>Password</th>
    </tr>
    @foreach($collection as $item)
    <tr>
        <th>{{ $item['name'] }}</th>
        <td>{{ $item['userName'] }}</td>
        <td>{{ $item['businessName'] }}</td>
        <td>{{ $item['password'] }}</td>
        {{-- <td><img src="{{ $item['flag'] }}" style="height: 70px; width:100px" alt=""></td> --}}
    </tr>
    @endforeach
</table>
```

