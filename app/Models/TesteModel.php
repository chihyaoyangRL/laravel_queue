<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TesteModel extends Model
{
    use HasFactory;

    public $timestamps = false; // Disable coluna created_at e updated_at
    ///Definir table
    protected $table = 'teste';
    ///Definir quais campos pode ser inseridos
    protected $fillable = ['titulo', 'mensagem'];
}
