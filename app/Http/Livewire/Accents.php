<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Accents extends Component
{
  public $title;
  public $whatever;

  public function mount()
  {
    $this->title = "This crashes it all : ê";
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
