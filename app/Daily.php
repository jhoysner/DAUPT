<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Daily extends Model
{
    protected $table= "daily";

    protected $fillable = [
        'code', 'type', 'description','detail', 'account_id', 'user_id',
    ];


    public function account(){
        return $this->belongsTo('App\Account');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}
