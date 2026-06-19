<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;

//Indicar o nome da tabela
#[Table('machines')]

//Indicar colunas que podem ser preenchidas
#[Fillable(['name', 'is_active'])]

class Machine extends Model
{

}
