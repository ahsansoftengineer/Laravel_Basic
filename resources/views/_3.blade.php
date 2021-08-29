<h3>Parameterize Routes</h3>
<i>Files Involved in Subject Purpose</i>
<ol>
    <li>
        <a href="#">resources/views/<b>_3</b>.blade.php</a>
        <p>Utilizing Data in View</p>
        <p>{{$name}}</p>
    </li>
    <li>
        <a href="#">resources/routes/<b>web</b>.php</a>
<pre>
Route::get("/_3/{name}", function ($name) {
    // Echo in Route File
    echo $name;
    // Passing Data to View
    return view('_3', ['name'=>$name]);
});
</pre>
    </li>
</ol>
