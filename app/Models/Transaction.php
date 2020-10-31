<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = ['user_id', 'Borrow_date','Return_date','status'];

    use HasFactory;

    public function uid(){
        return $this->belongsTo('App\Models\User');
    }
}
