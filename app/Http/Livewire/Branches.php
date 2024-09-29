<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;
use App\Models\Branch;
use Illuminate\Validation\Rule;


class Branches extends Component
{
    public $branch,$contact_no,$street_address,$branch_id;
    public function render()
    {
        $branches=Branch::all();
        return view('livewire.branches',compact('branches'));
    }
    public function save()
    {
        $this->validate([
            'branch'=>'required',
            'contact_no'=>['required','numeric','digits_between:7,10',Rule::unique('branches')->ignore($this->branch_id)]
        ]);

        Branch::updateOrCreate(['id'=>$this->branch_id],[
            'branch'=>$this->branch,
            'contact_no'=>$this->contact_no,
            'street_address'=>$this->street_address,

        ]);
        $this->dispatchBrowserEvent('notify',isset($this->branch_id)?'Branch Updated Successfully':'Branches Inserted Successfully');
        $this->reset();
    }
    public function edit($id){
        $branch=Branch::findOrFail($id);
        $this->branch_id=$branch->id;
        $this->branch=$branch->branch;
        $this->contact_no=$branch->contact_no;
        $this->street_address=$branch->street_address;
    }

    public function delete($id){
        Branch::destroy($id);
        $this->dispatchBrowserEvent('notify','Branch Deleted Successfully');
    }

}
