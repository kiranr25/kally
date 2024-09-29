<?php

namespace App\Models;

use App\Http\Livewire\Packages;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable=[
        'customer_name','contact','email','address',
    ];
    use HasFactory;
    public function packages(){
        return $this->hasMany(Packages::class);
    }
    public function membership(){
        return $this->hasMany(CustomerMemberships::class);
    }
}
