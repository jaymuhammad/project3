<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Fans extends Model{

	protected $table = 'fans';

    protected $fillable = ['name', 'email'];
}
