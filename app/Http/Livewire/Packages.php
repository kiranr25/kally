<?php

namespace App\Http\Livewire;

use App\Models\Package;
use Livewire\Component;

class Packages extends Component
{
    public $package_name,$price,$discount,$total_sessions,$package_id;
    public function render()
    {
        $packages = Package::orderBy('id','desc')->get();
        return view('livewire.packages',['packages'=>$packages]);
    }

    public function savePackage(){

        $this->validate(
            [
                'package_name' => 'required',
                'price' => 'required|numeric',
                'discount'=>'required|numeric',
                'total_sessions' => 'required|numeric',
            ]
        );
        Package::updateOrCreate(
            ['id' => $this->package_id],
            [
                'package_name' => $this->package_name,
                'price' => $this->price,
                'discount' => $this->discount,
                'total_sessions'=>$this->total_sessions,
            ]

        );
        $this->dispatchBrowserEvent('notify',isset($this->deal_id)?'Package Updated Successfully':'Package Created');
        $this->resetValue();
    }

    public function resetValue(){
        $this->package_id='';
        $this->package_name='';
        $this->price='';
        $this->discount='';
        $this->total_sessions='';
    }

    public function edit($id)
    {
        $package=Package::findOrFail($id);

        $this->package_id=$package->id;
        $this->package_name=$package->package_name;
        $this->price=$package->price;
        $this->discount=$package->discount;
        $this->total_sessions=$package->total_sessions;
    }

    public function delete($id){
        Package::destroy($id);
        $this->dispatchBrowserEvent('notify',"Package  Removed Successfully");
    }
}
