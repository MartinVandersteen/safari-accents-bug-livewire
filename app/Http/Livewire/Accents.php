<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Accents extends Component
{
  public $string;
  public $number;

  public function mount()
  {
    $this->string = "This crashes it all : dégâts";
    $this->number = 1;
  }

  public function render()
  {
    return view('livewire.accents');
  }

  public function addNumber()
  {
    $this->number++;
  }
}
