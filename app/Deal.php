<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\DealCategory;

class Deal extends Model
{
    protected $guarded = array('id');
    
    public static $rules = array(
        
    );

    //use SoftDeletes;

    protected $dates = [
        'reception_date', // 追加しないとformatメソッドが使えない
        'created_at',
        'updated_at',
        //'deleted_at'
    ];

    // 受付日時
    public function reception_date() {
        if ($this->reception_date != null) {
            return $this->reception_date->format('Y/m/d h:m');
        }
        return "";
    }

    // 見積金額
    public function estimate() {
        $basicPrice = $this->dealCategory->basic_price;
        return $basicPrice * $this->number;
    }

    // ステータス
    public function status() {
        if ($this->end_date != null) {
            return "納品済";
        }
        if ($this->reception_date != null) {
            return "作業中";
        }
        return "受付待ち";
    }

    public function dealCategory() {
        return  $this->hasOne(DealCategory::class, 'id', 'deal_category_id');
    }

    // memo：dealsテーブルの操作はここに書いていく
}