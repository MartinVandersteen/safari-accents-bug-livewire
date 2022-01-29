<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Accents extends Component
{
  public $string;
  public $whatever;

  public function mount()
  {
    $this->string = "This crashes it all : dégâts";
    $this->whatever = [];
  }

  public function render()
  {
    return view('livewire.accents');
  }

  public function addWhatever()
  {
    $this->whatever[] = $this->string;
  }
}
