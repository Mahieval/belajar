<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public $table = 'employees';
    protected $fillable = ['first_name', 'last_name', 'email', 'departement_id'];

    public function departements()
    {
        return $this->belongsTo('App\Departement', 'departement_id');
    }
}
