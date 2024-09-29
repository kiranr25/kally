<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerMembership extends Model
{
    protected $fillable=[
        'customer_id','package_id','branch_id','status'
    ];
    use HasFactory;
    public function customers(){
        return $this->belongsTo(Customer::class);
    }
}
