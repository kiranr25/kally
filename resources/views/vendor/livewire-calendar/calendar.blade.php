<div
    @if($pollMillis !== null && $pollAction !== null)
        wire:poll.{{ $pollMillis }}ms="{{ $pollAction }}"
    @elseif($pollMillis !== null)
        wire:poll.{{ $pollMillis }}ms
    @endif
>
    <div>
        @includeIf($beforeCalendarView)
    </div>


    <div class="bg-white">
        <div class="row">
            <div class="w-full mx-auto">
                <div class="sm:grid grid-cols-4 gap-5 mx-auto px-16">
                    <div class="col-12 d-flex justify-between">
                        <a href="#" wire:click="goToPreviousMonth" style="text-decoration: none">
                            <div
                                class="h-full p-2 dark:bg-gray-800 bg-white  rounded border-b-4 border-red-500 ">
                                <h3 class="text-2xl font-semibold inline-flex d-flex">
                                    <svg class="mr-2" width="24" height="30" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M1.02698 11.9929L5.26242 16.2426L6.67902 14.8308L4.85766 13.0033L22.9731 13.0012L22.9728 11.0012L4.85309 11.0033L6.6886 9.17398L5.27677 7.75739L1.02698 11.9929Z"
                                            fill="currentColor" /></svg>
                                    Prev
                                    <div>&nbsp;&nbsp;&nbsp;&nbsp;{{ $previousmonth}}</div>
                                </h3>
                            </div>
                        </a>
                        @if ($previousmonth)
                            <h3><a href="" wire:click="goToCurrentMonth" style="text-decoration: none">{{  date('M',strtotime('-'.$this->previousmonthincrement+2 .'month')) }}</a></h3>
                        @elseif ($nextmonthincrement)
                            <h3><a href="" wire:click="goToCurrentMonth" style="text-decoration: none">{{  date('M',strtotime('+'.$this->nextmonthincrement .'month')) }}</a></h3>

                        @else
                            <h3><a href="" wire:click="goToCurrentMonth" style="text-decoration: none">{{  date('M') }}</a></h3>

                        @endif

                        <a href="#" wire:click="goToNextMonth" style="text-decoration: none">
                            <div
                                class="h-full p-2 dark:bg-gray-800 bg-white  rounded border-b-4 border-red-500  text-right">
                                <h3 class="text-2xl font-semibold inline-flex d-flex">
                                    Next
                                    <svg class="ml-2" width="24" height="30" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M23.0677 11.9929L18.818 7.75739L17.4061 9.17398L19.2415 11.0032L0.932469 11.0012L0.932251 13.0012L19.2369 13.0032L17.4155 14.8308L18.8321 16.2426L23.0677 11.9929Z"
                                            fill="currentColor" /></svg>
                                            <div>&nbsp;&nbsp;&nbsp;&nbsp;{{ $nextmonth}}</div>

                                </h3>

                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="overflow-x-auto w-full">
            <div class="inline-block min-w-full overflow-hidden">

                <div class="w-full flex flex-row">
                    @foreach($monthGrid->first() as $day)
                        @include($dayOfWeekView, ['day' => $day])
                    @endforeach
                </div>

                @foreach($monthGrid as $week)
                    <div class="w-full flex flex-row">
                        @foreach($week as $day)
                            @include($dayView, [
                                    'componentId' => $componentId,
                                    'day' => $day,
                                    'dayInMonth' => $day->isSameMonth($startsAt),
                                    'isToday' => $day->isToday(),
                                    'events' => $getEventsForDay($day, $events),
                                ])
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>
    </div>


    @if($openModal)
        <div class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">
            <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
            <div class="fixed z-10 inset-0 overflow-y-auto" >
            <div class="flex  sm:items-start justify-center min-h-full p-4 text-center sm:p-0">
                <form wire:submit.prevent='addAppointment()' method="POST" class="w-50">
                    <div class="shadow overflow-hidden sm:rounded-md">
                    <div class="px-4 py-5 bg-white sm:p-6">
                        <div class="grid grid-cols-6 gap-6">
                        <div class="col-span-12">
                            <label for="title" class="block text-sm  text-gray-700" style="text-align:start">Title</label>
                            <input type="text" required name="title" wire:model="title" id="title" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>

                        <div class="col-span-12">
                            <label for="description" class="block text-sm  text-gray-700" style="text-align:start">Description</label>
                            <textarea type="text" required name="description" wire:model="description" id="description" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"></textarea>
                        </div>
                        </div>
                    </div>
                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                        <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm  rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Save</button>
                        <button type="button" wire:click="hideModal" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm  rounded-md text-white bg-red-600 hover:bg-white-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Cancel</button>
                    </div>

                    </div>
                </form>
            </div>
            </div>
        </div>
    @endif
    @if ($appointment)
    <div class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
        <div class="fixed z-10 inset-0 overflow-y-auto" >
        <div class="flex  sm:items-start justify-center min-h-full p-4 text-center sm:p-0">
            <form wire:submit.prevent='DeleteAppointment({{$appointment->id}})' method="POST" class="w-50">
                <div class="bg-gray-50 p-5">

                    <h2>Are you Sure you want to delete the appointment Schedule title "{{$appointment->title}} "?</h2>

                    <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm  rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Delete</button>
                    <button type="button" wire:click="hideConfirmation" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm  rounded-md text-white  hover:bg-white-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" style="background: green;">Cancel</button>

            </form>
        </div>
        </div>
    </div>

    @endif
    <div>
        @includeIf($afterCalendarView)
    </div>
</div>
