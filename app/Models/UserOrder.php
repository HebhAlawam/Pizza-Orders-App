<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserOrder extends Model
{
    use HasFactory;

   // protected $fillable = [ ];

    protected $guarded=[];

    public function user()
    {
        return $this->belongsTo(User::class ,'user_id');
    }

    public function pizza()
    {
        return $this->belongsTo(Pizza::class ,'pizza_id');
    }
}
