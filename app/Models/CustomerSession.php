<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerSession extends Model
{
    protected $fillable = ['customer_id','package_id','branch_id','no_of_session','membership_id'];
    use HasFactory;
}
