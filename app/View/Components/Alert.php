<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Alert extends Component
{
    
    public $pesan;
    public $halo;
    // public $warna;
    public function __construct($pesan,$halo)
    {
        $this->pesan=$pesan;
        $this->halo=$halo;
        // $this->warna=$warna;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.alert');
    }
}
