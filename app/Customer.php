<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use SoftDeletes;

    protected $guarded = array('id');
    
    public static $rules = array(
        'name' => 'required',
        'short_name' => 'required',
        'full_name' => 'required',
    );
}
