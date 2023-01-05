<?php

namespace App\Models;
use QR_Code\QR_Code;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;
    protected $table='page';
    protected $fillable=['name','email'];
}
