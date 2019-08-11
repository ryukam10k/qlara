<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deal extends Model
{
    protected $guarded = array('id');
    
    public static $rules = array(
        
    );

    // memo：dealsテーブルの操作はここに書いていく
}