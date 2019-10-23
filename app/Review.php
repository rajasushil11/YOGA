<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
     protected $fillable=[
   'email', 'name', 'review'];
	protected $primaryKey='id';
}
