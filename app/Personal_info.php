<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personal_info extends Model
{
    protected $table = 'personal_infos';

    protected $fillable = [
    	'date_of_birth',
    	'user_id','country',
    	'city',
    	'area',
    	'mobile',
    	'bio',
    	'personal_photo',
    	'current_position'
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }
}
