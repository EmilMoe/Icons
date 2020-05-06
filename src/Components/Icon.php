<?php

namespace EmilMoe\Icons\Components;

use Illuminate\View\Component;

class Icon extends Icon 
{
    /**
     * Icon to render.
     *
     * @var string
     */
    private $icon;

    /**
     * Create a new component instance.
     *
     * @param  string|int  $width
     * @param  string|int  $height
     * @param  string      $class
     * @return void
     */
    public function __construct(string $icon)
    {
        $this->icon = $icon;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('Icon::components.'. $this->icon);
    }
}
