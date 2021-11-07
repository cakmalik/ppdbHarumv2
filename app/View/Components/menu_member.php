<?php

namespace App\View\Components;

use Illuminate\View\Component;

class menu_member extends Component
{
    // public $menu_id;
    public $menuid;
    public function __construct($menuid)
    {
        $this->menuid = $menuid;
    }

    public function render()
    {
        return view('components.menu_member');
    }
}
