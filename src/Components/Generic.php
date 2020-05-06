<?php

namespace EmilMoe\Icons\Components;

use Illuminate\View\Component;

class Generic extends Component
{
    /**
     * Icon width.
     * 
     * @var string|int
     */
    public $width;

    /**
     * Icon height.
     * 
     * @var string|int
     */
    public $height;

    /**
     * Icon style classes.
     * 
     * @var string
     */
    public $class;

    /**
     * Create a new component instance.
     *
     * @param  string|int  $width
     * @param  string|int  $height
     * @param  string      $class
     * @return void
     */
    public function __construct($width = null, $height = null, string $class = '')
    {
        $this->width = $width;
        $this->height = $height;
        $this->class = $class;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('Icon::icon');
    }
}
