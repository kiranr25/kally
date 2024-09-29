<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $fillable=[
        'package_name','price','discount','total_sessions'
    ];
    use HasFactory;
    public function customers(){
        return $this->belongsTo(Customer::class);
    }
}
