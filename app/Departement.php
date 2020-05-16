<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departement extends Model
{
    public $table = 'departements';
    protected $fillable = ['name'];

    public function employees()
    {
        return $this->hasMany('App/Employee');
    }
}
