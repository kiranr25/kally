<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerSession extends Model
{
    use HasFactory;

    protected $fillable = ['customer_id','package_id','branch_id','no_of_session','membership_id'];

    public function customer(){
        $this->belongsTo(Customer::class);
    }

    public function package(){
        $this->belongsTo(Package::class);
    }

    public function branch(){
        $this->belongsTo(Branch::class);
    }

    public function customer_membership(){
        $this->belongsTo(CustomerMembership::class,'membership_id');
    }
}
