<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
    use HasFactory;

    public $timestamps = false; // Disable coluna created_at / updated_at



    ///Definir table
    protected $table = 'aaa';
    ///Definir quais campos pode ser inseridos
    protected $fillable = ['edital', 'text'];


}
