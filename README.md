# HTML Submit Form
## What is HTML Forms?
> Image result for what is html forms An HTML form is a section of a document containing normal content, markup, special elements called controls (checkboxes, radio buttons, menus, etc.), and labels on those controls..
## Folder and Files Involved in Controller
* app>Http>Controllers>**Users.php**
* routes>**web.php**
* resources>views>**login**.blade.php
## Implementation
> Controller is to handle the ***POST*** request
> and displays the result on the page
```php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class Users extends Controller
{
    function getView(Request $req){
        return $req->input();
    }
}
```
> Form generating the post request to users page
```php
<h1>Log In Form</h1>
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
            <td>Password</td>
            <td>
                <input name="password" type="password" />
            </td>
        </tr>
        <tr>
            <td>
                <button>Submit</button>
            </td>
            <td></td>
        </tr>
    </table>
</form>

```
> Result would be this
```json
{
  "_token": "ocz6QRkMalmTdPx6it4slIdOE1com3HTiUaDYeQP",
  "name": "Ahsan",
  "password": "ahsan"
}
```
