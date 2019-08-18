<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\DealCategory;
use App\User;
use App\Customer;
use Illuminate\Support\Facades\Auth;

class Deal extends Model
{
    protected $guarded = array('id');
    
    public static $rules = array(
        
    );

    //use SoftDeletes;

    protected $dates = [
        'reception_date', // 追加しないとformatメソッドが使えない
        'delivery_date',
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

    // 取引区分
    public function dealCategory() {
        return  $this->hasOne(DealCategory::class, 'id', 'deal_category_id');
    }

    // 依頼者
    public function requestUser() {
        return $this->hasOne(User::class, 'id', 'request_user_id');
    }

    // 依頼顧客
    public function customer() {
        return $this->hasOne(Customer::class, 'id', 'customer_id');
    }

    // memo：dealsテーブルの操作はここに書いていく

    public static function findAll() {
        $user = Auth::user();
        $deals = Deal::all()->where('customer_id', $user->customer_id);
        return $deals;
    }

}