<?php

namespace App\Models;

use Facade\Ignition\Tabs\Tab;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pegawai extends Model
{
    use SoftDeletes;
    protected $table = "pegawais";
    protected $primaryKey = "id";
    protected $fillable = [
       'id','NIP','namalengkap','jeniskelamin'];

}