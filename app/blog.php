<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class blog extends Model
{
   public function path(){
       return url("/blog/{$this->id}-".Str::slug($this->title));
   }
}
