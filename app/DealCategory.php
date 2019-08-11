<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DealCategory extends Model
{
    protected $guarded = array('id');
    
    public static $rules = array(
        
    );

    public static function findAll() {
        return DB::table('deal_categories')->orderBy('sort_no')->get();
    }
}
