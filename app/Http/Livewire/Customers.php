<?php

namespace App\Http\Livewire;

use Livewire\Component;
use DB;
use App\Models\Customer;
use App\Models\Package;
use App\Models\Branch;
use App\Models\CustomerMembership;
use Illuminate\Validation\Rule;

class Customers extends Component
{
    public function mount(){
        $this->no_of_sessions=1;
    }
    public $customer_name,$package_session_id,$contact,$package_id,$total,$email,$address,$customer_id,$hide=true,$old_deals=[],$branch_id,$package,$show=false,$session,$showUpdateInfoButton,$no_of_sessions,$attend_date,$membership_id,$package_deals_id,$session_branch_id;
    public function updatedContact()
    {
            $details=Customer::select()->where('contact',$this->contact)->first();
            if($details){
                $this->hide=false;
                $this->customer_name=$details->customer_name;
                $this->contact=$details->contact;
                $this->email=$details->email;
                $this->address=$details->address;
                $this->customer_id=$details->id;
                $this->old_deals=$this->getOldDeals();
            }else{
                $this->reset(['customer_name','package_id','email','address','customer_id','old_deals','branch_id']);
            }
    }

    public function showUpdateButton()
    {
       $this->showUpdateInfoButton= !$this->showUpdateInfoButton;
    }
    public function updatePersonalDetails(){
        $this->validate([
            'customer_name'=>'required',
            'contact'=>['required','numeric','digits_between:7,10',Rule::unique('customers')->ignore($this->customer_id)],
            'email'=>['nullable','email',Rule::unique('customers')->ignore($this->customer_id)]
        ]);

        $customer=Customer::updateOrCreate(
            ['id'=>$this->customer_id],
        [
            'customer_name'=>$this->customer_name,
            'email'=>$this->email,
            'contact'=>$this->contact,
            'address'=>$this->address
        ]);
        $this->dispatchBrowserEvent('notify','Updated Successfully');


    }
    public function updateSession()
    {
        $customerPackage = CustomerMembership::where('customer_id',$this->customer_id)->where('id',$this->membership_id)->where('status',0)->first();
        $customer_sessions = DB::table('customer_sessions')->where('membership_id',$this->membership_id)->where('customer_id',$this->customer_id)->get();
        $totalsession=0;
        foreach($customer_sessions as $customer_session){
            $totalsession=$totalsession+ $customer_session->no_of_sessions;
        }
        $this->total=$totalsession;

        $membership=Package::where('id',$customerPackage->package_id)->first();
        $totalsessioncheck=$membership->total_sessions;
        if($totalsessioncheck<($this->total+$this->no_of_sessions)){
            session()->flash('sessioncheck','Not Enough sessions ');
        }else{
            DB::table('customer_sessions')
                    ->insert(['customer_id'=>$this->customer_id,
                        'branch_id'=>$this->session_branch_id,
                        'package_id'=>$customerPackage->package_id,
                        'no_of_sessions'=>$this->no_of_sessions,
                        'membership_id'=>$this->membership_id,
                        'created_at'=>$this->attend_date,
                        'updated_at'=>$this->attend_date
                    ]);
                    $this->dispatchBrowserEvent('notify','Updated Successfully');
                    $this->reset(['no_of_sessions','attend_date']);

        }
        // updating the package session as complete
            $customer_sessions = DB::table('customer_sessions')->where('membership_id',$this->membership_id)->where('customer_id',$this->customer_id)->get();
            $totalsession=0;

            foreach($customer_sessions as $customer_session){
                $totalsession=$totalsession+ $customer_session->no_of_sessions;
            }
            $this->total=$totalsession;

            $membership=Package::where('id',$customerPackage->package_id)->first();
            $totalsessioncheck=$membership->total_sessions;
            // checking sessions and marking as complete
            if($totalsessioncheck==$this->total){
                $customerPackage->update(['status'=>1]);
            }


    }
    public function render()
    {
        $packages=Package::all();
        $branches=Branch::all();
        $customers=Customer::all();
        $customerMembership=CustomerMembership::where('customer_id',$this->customer_id)->get();
        // $this->old_deals=$this->getOldDeals();
        $activeCustomerPackages=CustomerMembership::where('customer_id',$this->customer_id)->where('status',0)->get();
        return view('livewire.customers',compact('packages','branches','customers','activeCustomerPackages','customerMembership'));
    }
    public function save()
    {

        $this->validate([
            'customer_name'=>'required',
            'contact'=>['required','numeric','digits_between:7,10',Rule::unique('customers')->ignore($this->customer_id)],
            'package_id'=>'required',
            'branch_id'=>'required',
            'email'=>['nullable','email',Rule::unique('customers')->ignore($this->customer_id)]
        ]);

        $customer=Customer::updateOrCreate(
            ['id'=>$this->customer_id],
        [
            'customer_name'=>$this->customer_name,
            'email'=>$this->email,
            'contact'=>$this->contact,
            'address'=>$this->address
        ]);
        CustomerMembership::create([
            'customer_id'=>$customer->id,
            'package_id'=>$this->package_id,
            'branch_id'=>$this->branch_id,
            'status'=>0,
        ]);
        $this->updatedContact();
        $this->dispatchBrowserEvent('notify',"Successfully Inserted");
    }
    // get old deals
    public function getOldDeals()
    {
        $deals = CustomerMembership::where('customer_id',$this->customer_id)->get();
        return $deals;
    }

    public function delete($id){
        CustomerMembership::destroy($id);
        $this->dispatchBrowserEvent('notify',"CustomerMembersip Deleted  Successfully");
    }
    


}
