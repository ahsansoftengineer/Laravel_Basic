<h3>Redirect Page</h3>
<i>Files Involved in Subject Purpose</i>
<ol>
    <li>
        <a href="#">resources/views/<b>_4</b>.blade.php</a>
    </li>
    <li>
        <a href="#">resources/routes/<b>web</b>.php</a>
<pre>
Route::get("/_4", function () {
    return redirect('_5');
});
</pre>
    </li>
</ol>
<h2>This Page will Never Render Instead The Route will Redirect the user to </h2>
<h3>_5.blade.php</h3>
