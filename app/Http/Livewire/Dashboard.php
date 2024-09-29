<?php

namespace App\Http\Livewire;

use App\Models\Customer;
use App\Models\CustomerMembership;
use App\Models\Package;
use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        $packages = Package::all()->count();
        $total_customer = Customer::all()->count();
        $total_customer_deals = CustomerMembership::all()->count();
        return view('livewire.dashboard',compact('packages','total_customer','total_customer_deals'));
    }
}
