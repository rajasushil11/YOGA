<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
{
     protected $fillable=[
   'email', 'name', 'number', 'message'];
	protected $primaryKey='id';
}
