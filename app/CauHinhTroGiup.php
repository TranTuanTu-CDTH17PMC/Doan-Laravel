<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class CauHinhTroGiup extends Model
{
     use SoftDeletes;
  protected	$table = 'cau_hinh_diem_tro_giups';
  protected $dates = ['deleted_at'];

}
