<?php

namespace App\Livewire;
use Illuminate\Support\Facades\DB;

use Livewire\Component;

class Counter extends Component
{

    public $servers = [];

    public function get_servers()
    {
        $this->servers = DB::select('select * from servers');


        #$this->servers = json_encode($this->servers);
    }

    public function render()
    {
        return view('livewire.counter');
    }
}