<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GoiCredit extends Model
{
       use SoftDeletes;
  protected	$table = 'Goi_Credits';
  protected $dates = ['deleted_at'];
}
