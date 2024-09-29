<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerMembership extends Model
{
    use HasFactory;

    protected $fillable=[
        'customer_id','package_id','branch_id','status'
    ];
    
    public function customers(){
        return $this->belongsTo(Customer::class);
    }
    public function package(){
        return $this->belongsTo(Package::class);
    }
    public function branch(){
        return $this->belongsTo(Branch::class);
    }
    public function sessions(){
        $this->hasMany(CustomerSession::class,'membership_id');
    }
}
