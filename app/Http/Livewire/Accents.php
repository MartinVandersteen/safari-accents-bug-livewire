<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Accents extends Component
{
  private $object;
  public $string;
  public $number;

  public function mount()
  {
    $this->object = (object)['title' => 'This crashes it all : dégâts'];
    $this->string = $this->object->title;
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
