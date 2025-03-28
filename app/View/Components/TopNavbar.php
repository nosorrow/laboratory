<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TopNavbar extends Component
{
    public $phone;
    public $hours;

    public function __construct($phone = '+359 02 902-888', $hours = '9:00am - 6:00pm')
    {
        $this->phone = $phone;
        $this->hours = $hours;
    }

    public function render()
    {
        return view('components.top-navbar');
    }
}
