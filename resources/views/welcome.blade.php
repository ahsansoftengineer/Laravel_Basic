How to Routing Laravel?

In the routes>web.php provide the Implementation as below for Routing
// 1 Empty URL
// Route::get('/', function () {
//     return view('welcome');
// });
// 2 Get Request
Route::get("index", function () {
    return view('index');
});
// 3 4.1 Redirection Required
Route::view("index", 'index');
// 4 Redirection
Route::get("/", function () {
    return redirect('index');
});
// Routing Simple View
Route::view('_6_routing','_6_routing');

// 5 Parameterize
Route::get("/_6_routing/{name}", function ($name) {
    return view('_6_routing', ['name'=>$name]);
});

In the resources>views provide the Implementation as below for Routing
For _6_routing/{name} & _6_routing Routing Implementation
	<h1>Welcome : {{$name ??= 'No Name Provided'}}</h1>
	<p>Name filed should be applied</p>
For Non Rest
