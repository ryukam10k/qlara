<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\DealCategory;

class Deal extends Model
{
    protected $guarded = array('id');
    
    public static $rules = array(
        
    );

    public function dealCategory() {
        return  $this->hasOne(DealCategory::class, 'id', 'deal_category_id');
    }
    // memo：dealsテーブルの操作はここに書いていく
}