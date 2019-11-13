<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes
class CauHingApp extends Model
{
    / use SoftDeletes;
  protected	$table = 'cau_hinh_apps';
  protected $dates = ['deleted_at'];
/
}
