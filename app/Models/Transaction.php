<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = ['username','book', 'Borrow_date','Return_date','keterangan','status'];
    protected $attributes = [
        'status' => "Borrowed",
    ];
    use HasFactory;
}
