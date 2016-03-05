<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
   protected $table;
   protected $guarded = ['id'];
   
   public function __construct()
    {
        $this->table = 'visitor_counter';
    }
}
