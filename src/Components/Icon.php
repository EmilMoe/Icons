<?php

namespace EmilMoe\Icons\Components;

use Illuminate\View\Component;

class Icon extends Component
{
    /**
     * Icon to render.
     *
     * @var string
     */
    private $icon;

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
    public function __construct(string $icon, $width = null, $height = null, string $class = '')
    {
        $this->icon = $icon;
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
        return view('Icon::icons.'. $this->icon);
    }
}
