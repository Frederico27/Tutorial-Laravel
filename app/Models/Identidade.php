<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Identidade extends Model
{
    use HasFactory;

    protected $table = 'identidade';
    protected $primarykey = 'id';
    protected $keytype = 'int';
    public $incrementing = true; // public
    public $timestamps = true; //public

    protected $fillable = [
        'naran',
        'sexo',
        'hela_fatin',
        'tinan'
    ];
}
