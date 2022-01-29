<?php

namespace App\Http\Livewire;

use App\Models\Test;
use Livewire\Component;

class Accents extends Component
{
  private $object;

  public $string;
  public $text;
  public $number;

  public function mount()
  {
    // $this->object = new Test();
    $this->string = 'â';
    // $this->text = 'â';
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
