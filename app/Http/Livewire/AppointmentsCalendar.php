<?php

namespace App\Http\Livewire;

use App\Models\Appointment;
use Asantibanez\LivewireCalendar\LivewireCalendar;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

 class AppointmentsCalendar extends LivewireCalendar
 {
    public $openModal=0,$date,$description,$title,$presentyear,$appointment,$presentmonth,$previousmonth,$nextmonth;

    protected $listeners = ['refreshComponent' => '$refresh'];


    public function hideModal(){
        $this->openModal = false;
    }

    public function addAppointment()
    {
        $this->openModal = false;
        $addappointment=Appointment::Create([
            'user_id'=>Auth::user()->id,
            'title'=>$this->title,
            'description'=>$this->description,
            'date'=>$this->date,
        ]);
        if($addappointment){
            $this->title="";
            $this->description="";
            $this->emit('refreshComponent');
            $this->dispatchBrowserEvent('notify',"Appointment Added");
        }else{
            $this->dispatchBrowserEvent('notify',"Error in Adding Appointment");

        }

    }
    public function onDayClick($year, $month, $day)
    {
        $this->openModal=1;
        $this->date=strftime("%F", strtotime($year."-".$month."-".$day));

    }
    public function onEventDropped($eventId, $year, $month, $day)
    {
        $this->date = strftime("%F", strtotime($year."-".$month."-".$day));
        Appointment::updateorCreate(['id'=>$eventId],[
            'date'=>$this->date,
        ]);


    }
    public function onEventClick($eventId)
    {
        $this->appointment=Appointment::where('id',$eventId)->where('user_id',Auth::user()->id)->first();

    }
    public function DeleteAppointment($eventId){
        Appointment::where('id',$eventId)->where('user_id',Auth::user()->id)->delete();
        $this->dispatchBrowserEvent('notify',"Appointment Schedule Deleted");
        $this->appointment="";

    }
    public function hideConfirmation(){
        $this->appointment="";
    }

    public function events() : Collection
    {


        return Appointment::query()
        ->get()
        ->where('user_id',Auth::user()->id)
        ->map(function (Appointment $model) {
            return [
                'id' => $model->id,
                'title' => $model->title,
                'description' => $model->description,
                'date' => $model->date,
            ];
        });
    }
 }


