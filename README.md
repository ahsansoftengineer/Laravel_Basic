# Routing
## How to Change Routes in Laravel?
### In the routes>web.php provide the Implementation as below for Routing
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
3. Redirection Required
```php
Route::view("index", 'index');
```
4. Redirection
```php
    Route::get("/", function () {
        return redirect('index');
    });
```
5. Routing Simple View
```php
Route::view('_6_routing','_6_routing');
```
6. Parameterize
```php
Route::get("/_6_routing/{name}", function ($name) {
    return view('_6_routing', ['name'=>$name]);
});
```

## In the resources>views provide the Implementation as below 
### for Optional Parameterize Routing
> For _6_routing/{name} & _6_routing Routing Implementation
```php
> 	<h1>Welcome : {{$name ??= 'No Name Provided'}}</h1>
> 	<p>Name filed should be applied</p>
```
> For Non Rest
