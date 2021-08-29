<?php
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
