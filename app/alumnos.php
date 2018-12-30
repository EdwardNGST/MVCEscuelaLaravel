<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class alumnos extends Model
{
	protected $table = "students";
	protected $primaryKey ="nc";
	protected $fillable = ['nc', 'nameStudent', 'career', 'age', 'phone'];
}
