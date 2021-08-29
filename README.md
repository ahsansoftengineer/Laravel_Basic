# Component
## What is Component in Laravel?
> Components are a reusable group of elements. Like you may want to create a Navbar to be used in almost all of your web-app pages. So you build your Navbar as a Component and tell laravel to grab it whenever you need it, and for many times as you like.
> Laravel Components are used to build reliable and extensible systems. They let us build large applications which are made up of reusable, independent and decoupled components. Laravel provides us so many tools to help building reliable web applications and cutting down the development time to significant levels.
## Folder and Files Involved in Controller
* routes>**web.php**
* app>View>Components>**HeaderComponent**.php
* resources>views>components>**header-component**.blade.php
* resources>views>**about**.blade.php
* resources>views>**users**.blade.php
## CLI to generate HeaderComponent
> *php artisan make:component HeaderComponent*

## How to Implement Reusable Simple Component
> resources>views>components>**header**.blade.php
```html
<h1>This is Header Components</h1>
```
> resources>views>**about**.blade.php
```html
<x-header-component />
<h2>This is About Blade php</h2>
```
> resources>views>**users**.blade.php
```html
<x-header-component />
<h2>This is Users Blade php</h2>
```
## How to Implement Reusable Parameterized Component
> app>View>Components>**FooterComponent*.php
```php
namespace App\View\Components;
use Illuminate\View\Component;
class FooterComponent extends Component
{
    public $title = '';
    public function __construct($name)
    {
        $this->title = $name;
    }
    public function render()
    {
        return view('components.footer-component');
    }
}
```
> resources>views>components>**header-component**.blade.php
```html
<h1>This is Header Components</h1>
```
> resources>views>components>**footer-component**.blade.php
```html
<h1>This Footer Component </h1>
<h2>Data from Parent Component : {{$title}}</h2>
```
> resources>views>**admin**.blade.php
```html
<x-header-component />
<h2>This is Admin Blade</h2>
<x-footer-component name="Admin Component Passing Data To Footer" />
```
