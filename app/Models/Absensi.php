<?php

namespace App\Models;

use Facade\Ignition\Tabs\Tab;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    protected $table = "absensi";
    protected $primaryKey = "id";
    protected $fillable = [
       'id','tanggal','jammasuk','jamkeluar','jamkerja'];

}