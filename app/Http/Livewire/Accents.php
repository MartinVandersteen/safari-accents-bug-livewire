<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Accents extends Component
{
  public $string;
  public $text;
  public $number;

  public function mount()
  {
    $this->string = 'â';
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
