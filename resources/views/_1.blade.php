<link rel="stylesheet" href="{{ URL::asset('css/css.css'); }}">
<h3>Routing with Routes / Path</h3>
<i>Files Involved in Subject Purpose</i>
<ol>
    <li>
        <a href="#">resources/views/<b>_1</b>.blade.php</a> (HTML File)
    </li>
    <li>
        <a href="#">resources/routes/<b>web</b>.php</a>
<pre>
Route::get('/', function () {
    return view('welcome');
});
</pre>
    </li>
</ol>
