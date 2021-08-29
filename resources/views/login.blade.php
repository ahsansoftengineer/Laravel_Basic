
<h1>Log In</h1>
<form action="users" method="POST">
    @csrf
    <table>
        <tr>
            <td>Name</td>
            <td>
                <input name="name" type="text" />
            </td>
        </tr>
        <tr>
            <td></td>
            <td><span>@error('name'){{ $message }} @enderror</span></td>
        </tr>
        <tr>
            <td>Password</td>
            <td>
                <input name="password" type="password" />
            </td>
        </tr>
        <tr>
            <td></td>
            <td><span>@error('password'){{ $message }} @enderror</span></td>
        </tr>
        <tr>
            <td>
                <button>Submit</button>
            </td>
            <td></td>
        </tr>
    </table>
</form>
{{ $errors }}
<ol>
    @if($errors->any())
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    @endif
</ol>
