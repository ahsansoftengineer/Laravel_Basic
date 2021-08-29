# Routing
## How to Change Routes in Laravel?
### Folders & Files Involved in Routing
> resources>views>**welcome.blade.php**. 
> resources>routes>**web.php** .
>  **Note:** *.blade.php* Doesn't needs to be include in URL

1. Default Page Routing
```php
Route::get('/', function () {
    return view('welcome');
});
```
2. Get Request
```php
Route::get("index", function () {
    return view('index');
});
```
3. Short Hand Syntax
```php
Route::view("_2", '_2');
```

4. Parameterize Routes
```php
Route::get("/_3/{name}", function ($name) {
    // Echo in Route File
    echo $name;
    // Passing Data to View
    return view('_3', ['name'=>$name]);
});
```
5. Redirection
```php
    Route::get("/_4", function () {
        return redirect('_5');
    });

    Route::get("/_5", function () {
        return view('_5');
    });
```
