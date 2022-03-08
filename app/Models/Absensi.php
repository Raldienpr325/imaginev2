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
       'id','nama','tanggal','jammasuk','jamkeluar','jamkerja'];

       public function user()
    {
        return $this->belongsTo(User::class);
    }
}