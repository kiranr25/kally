<?php

namespace App\Http\Livewire;
use App\Models\Branch;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class SalesReport extends Component
{
    public $timely_data,$start_date,$end_date;
    public function mount(){
            $this->start_date = date('2022-01-01');
            $this->end_date = date('Y-m-d');
            $this->timely_data="today";
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

        //  $this->timelyDate($this->timely_data);
        $sales=Branch::select('branches.branch as b_name','branches.contact_no as b_contact',DB::raw('sum(customer_sessions.no_of_sessions) as totalsessions'),DB::raw('Sum(packages.price-packages.discount) as totalsales'))
        ->leftJoin('customer_sessions','customer_sessions.branch_id','branches.id')
        ->leftJoin('packages','packages.id','customer_sessions.package_id')
        ->when($this->start_date, function ($q) {
            $q->when($this->end_date, function ($q) {
                return $q->whereBetween(DB::raw('DATE(customer_sessions.created_at)'), array($this->start_date, $this->end_date));
            });
        })
         ->groupBy('branches.branch','branches.contact_no')
        ->paginate(10);



        return view('livewire.sales-report',compact('sales'));
    }
}
