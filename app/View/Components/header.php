<?php
namespace App\View\Component;
namespace App\resources\views\Components;
use Illuminate\View\Component;
 class header extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public function __construct($compo)
    {
        $title=$compo;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.header');
    }
}
?>