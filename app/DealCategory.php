<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class DealCategory extends Model
{
    use SoftDeletes;

    protected $guarded = array('id');
    
    public static $rules = array(
        
    );

    public static function findAll() {
        return DB::table('deal_categories')->orderBy('sort_no')->get();
    }
}
