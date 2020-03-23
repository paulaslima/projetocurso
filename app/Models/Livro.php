<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
          /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'user_id',
       'titulo',
       'autor',
       'editora',
       'genero',
    ];

    public function user(){
      return $this->belongsTo('app\Models\Livro');
    }
}
