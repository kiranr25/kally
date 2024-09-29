<?php

namespace App\Http\Livewire;

use App\Models\Branch;
use App\Models\Customer;
use App\Models\CustomerMembership;
use App\Models\CustomerSession;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class CrossSales extends Component
{
    use WithPagination;
    public $timely_data,$start_date,$end_date,$branch_id;
    public function mount(){
            $this->start_date =  date('Y-m-d');
            $this->end_date = date('Y-m-d');
            $this->timely_data="";
    }
    public function timelyDate($interval){
        if($interval=="today"){
            $this->start_date = date('Y-m-d');
            $this->end_date = date('Y-m-d');
        }elseif($interval=="monthly"){
            $this->start_date = date('Y-m-d',strtotime("-30 days"));;
            $this->end_date = date('Y-m-d');
        }else{
            $this->start_date = date('Y-m-d',strtotime("-7 days"));;
            $this->end_date = date('Y-m-d');
        }
    }
    public function render()
    {
        if($this->timely_data){
            $this->timelyDate($this->timely_data);
        }
        // $a = CustomerSession::select(DB::raw('count(customer_sessions.branch_id) as totalsessions'),'customer_sessions.branch_id as b_id', 'branches.branch as b_name','branches.contact_no as b_contact')
        // ->leftJoin('customers','customer_sessions.customer_id','customers.id')
        // ->leftJoin('branches','customer_sessions.branch_id','branches.id')
        // ->leftJoin('packages','customer_sessions.package_id', 'packages.id')
        // ->groupBy('customer_sessions.branch_id','branches.branch','branches.contact_no')
        // ->get();
        $branches = Branch::all();
        // dd($a);
        // $sales=CustomerMembership::select('customer_memberships.branch_id','branches.branch as b_name','branches.contact_no as b_contact')
        // ->leftJoin('branches','branches.id','customer_memberships.branch_id')
        // ->leftJoin('customer_sessions','customer_sessions.branch_id','customer_memberships.branch_id')
        // ->groupBy('customer_memberships.branch_id','branches.branch','branches.contact_no')->get();
        // dd($sales);
        // $sale=CustomerMembership::select('customer_memberships.branch_id','branches.branch as b_name','branches.contact_no as b_contact',
        // DB::raw('count(customer_sessions.branch_id) as totalsessions'),DB::raw('Sum(packages.price-packages.discount) as totalsales'))
        // ->leftJoin('customer_sessions','customer_sessions.branch_id','branches.id')
        // ->leftJoin('packages','packages.id','customer_sessions.package_id')
        // ->leftJoin('branches','branches.id','customer_memberships.branch_id')
        // ->where('customer_sessions.branch_id','branches.id')
        // ->when($this->start_date, function ($q) {
        //     $q->when($this->end_date, function ($q) {
        //         return $q->whereBetween(DB::raw('DATE(customer_sessions.created_at)'), array($this->start_date, $this->end_date));
        //     });
        // })
        //  ->groupBy('customer_memberships.branch_id','branches.branch','branches.contact_no')
        //  ->get();


        // $customerMembership=Customer::leftJoin('customer_memberships','customers.id','customer_memberships.customer_id')
        // ->when($this->start_date, function ($q) {
        //     $q->when($this->end_date, function ($q) {
        //         return $q->whereBetween(DB::raw('DATE(customer_memberships.created_at)'), array($this->start_date, $this->end_date));
        //     });
        // })->get();

        // $customerMembership= CustomerMembership::paginate(20);
        // $customer_session = CustomerSession::get('membership_id')->toArray();
        $customerMembership = CustomerMembership::
        when($this->start_date, function ($q) {
            $q->when($this->end_date, function ($q) {
                return $q->whereBetween(DB::raw('DATE(customer_memberships.created_at)'), array($this->start_date, $this->end_date));
           });
        })
        ->
when($this->branch_id,function($q){
            $q->when($this->start_date, function ($q) {
                $q->when($this->end_date, function ($q) {
                    return $q->where('branch_id',$this->branch_id)->whereBetween(DB::raw('DATE(customer_memberships.created_at)'), array($this->start_date, $this->end_date));
                });
            });
        })
        ->get();

        return view('livewire.cross-sales',compact('customerMembership','branches'));
    }
}
