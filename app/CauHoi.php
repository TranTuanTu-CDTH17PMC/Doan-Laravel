<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CauHoi extends Model
{
    use SoftDeletes;
  protected	$table = 'cau_hois';
  protected $dates = ['deleted_at'];

  public function linhVuc()  {
  	return $this->belongsTo('App\LinhVuc');
  }
}

