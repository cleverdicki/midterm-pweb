<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = ['user_id', 'borrow_date', 'return_date', 'status'];

    use HasFactory;

    public function uid()
    {
        return $this->belongsTo('App\Models\User');
    }
}