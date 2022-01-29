<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Accents extends Component
{
  public $array;
  public $whatever;

  public function mount()
  {
    $this->array = [
      "This crashes it all : ê",
      "This crashes it all : â",
      "This crashes it all : é",
    ];
    $this->whatever = true;
  }

  public function render()
  {
    return view('livewire.accents');
  }

  public function toggleWhatever()
  {
    $this->whatever = !$this->whatever;
  }
}
