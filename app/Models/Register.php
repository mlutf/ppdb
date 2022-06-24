<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    use HasFactory;
    protected $table = "ppdb";
    protected $primarykey = "id";
    protected $fillable = ['id','namalengkap','jk','alamat','agama','asalsmp','jurusan'];
    public $timestamps = false;

}
