<h3>Redirect Page</h3>
<i>Files Involved in Subject Purpose</i>
<ol>
    <li>
        <a href="#">resources/views/<b>_5</b>.blade.php</a>
    </li>
    <li>
        <a href="#">resources/routes/<b>web</b>.php</a>
<pre>
Route::get("/_4", function () {
    return redirect('_5');
});

Route::get("/_5", function () {
    return view('_5');
});
</pre>
    </li>
</ol>
