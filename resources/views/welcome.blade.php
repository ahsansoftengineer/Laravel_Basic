<h4>Default Routing</h4>
<i>Files Involved in Subject Purpose</i>
<ol>
    <li>
        <a href="#">resources/views/<b>welcome</b>.blade.php</a> (HTML File)
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



