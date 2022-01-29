<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
  private $string;

  protected $appends = [
    'title'
  ];

  public function __construct($attributes = [])
  {
    parent::__construct($attributes);

    $this->string = 'â';
  }

  public function getTitleAttribute()
  {
    return $this->string;
  }
}
