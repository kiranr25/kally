<div>
    {{-- @php dd($openModal) @endphp --}}
    <div>
        <x-input.alert/>
    </div>
    <div class="p-5">
        {{-- <div class="row">
            <div class="w-full mx-auto">
                <div class="sm:grid grid-cols-4 gap-5 mx-auto px-16">
                    <div class="col-12 d-flex justify-between">
                        <a href="#">
                            <div
                                class="h-full p-2 dark:bg-gray-800 bg-white  rounded border-b-4 border-red-500 shadow-md">
                                <h3 class="text-2xl font-semibold inline-flex">
                                    <svg class="mr-2" width="24" height="30" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M1.02698 11.9929L5.26242 16.2426L6.67902 14.8308L4.85766 13.0033L22.9731 13.0012L22.9728 11.0012L4.85309 11.0033L6.6886 9.17398L5.27677 7.75739L1.02698 11.9929Z"
                                            fill="currentColor" /></svg>
                                    Prev
                                </h3>
                            </div>
                        </a>
                        <a href="#">
                            <div
                                class="h-full p-2 dark:bg-gray-800 bg-white  rounded border-b-4 border-red-500 shadow-md text-right">
                                <h3 class="text-2xl font-semibold inline-flex ">
                                    Next
                                    <svg class="ml-2" width="24" height="30" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M23.0677 11.9929L18.818 7.75739L17.4061 9.17398L19.2415 11.0032L0.932469 11.0012L0.932251 13.0012L19.2369 13.0032L17.4155 14.8308L18.8321 16.2426L23.0677 11.9929Z"
                                            fill="currentColor" /></svg>
                                </h3>

                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div> --}}
        <livewire:appointments-calendar/>
    </div>


    @if ($show=="true")

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
</div>
