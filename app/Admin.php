<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Admin extends Authenticatable
{
  protected	$table = 'admin';
  
    public function getPasswordAttribute()
    {
    	return $this->mat_khau;
    }
}
