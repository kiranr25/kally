<?php

namespace App\Http\Livewire;

use App\Models\Appointment;
use App\Models\Customer;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Appointments extends Component
{
    public $show="false",$date,$description,$title;
    protected $listeners = ['openModal' => 'viewForm'];


    public function render()
    {
        return view('livewire.appointments');
    }

    public function viewForm($year, $month, $day)
    {

        $this->date = strftime("%F", strtotime($year."-".$month."-".$day));

        $this->show = true;
    }
    public function hideModal(){
        $this->show = false;
    }
    public function addAppointment()
    {
        $this->show = false;
        $addappointment=Appointment::Create([
            'user_id'=>Auth::user()->id,
            'title'=>$this->title,
            'description'=>$this->description,
            'date'=>$this->date,
        ]);
        if($addappointment){
            $this->emit('refreshComponent');
            $this->dispatchBrowserEvent('notify',"Appointment Added");
        }else{
            $this->dispatchBrowserEvent('notify',"Error in Adding Appointment");

        }

    }
}
