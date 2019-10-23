<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
     protected $fillable=[
   'name', 'email', 'gender', 'country', 'course', 'joining_date', 'accommodation', 'food', 'number', 'message'];
	protected $primaryKey='id';
}
