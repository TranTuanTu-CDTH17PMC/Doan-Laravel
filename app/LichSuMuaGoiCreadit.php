<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class LichSuMuaGoiCreadit extends Model
{
      use SoftDeletes;
  protected	$table = 'lich_su_mua_goi_creadits';
  protected $dates = ['deleted_at'];
}
