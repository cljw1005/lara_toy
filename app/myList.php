<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class myList extends Model
{
  protected $fillable=[
    'name','lat','lng'
  ];
}
