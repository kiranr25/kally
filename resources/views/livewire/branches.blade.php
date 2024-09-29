<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Branches') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 bg-gray-100 flex items-center justify-center">
                <div class="container max-w-screen-lg mx-auto">
                    <x-input.alert/>
                    {{-- ====================================================Add Branch Details=================================== --}}
                    <form wire:submit.prevent="save" class="mt-2">
                        <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
                            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                                <div class="text-gray-600">
                                    <p class="font-medium text-lg">Branch Details</p>
                                    <p>Please fill out all the fields.</p>
                                </div>
                                <div class="lg:col-span-2">
                                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                                        <div class="md:col-span-5">
                                            <label for="branch_name">Branch Name</label>
                                            <input type="text" name="branch_name" id="branch_name" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" wire:model.lazy="branch" />
                                            @error('branch')<div class="mt-1"><span class="text-red-500">* {{$message}}</span></div>@enderror
                                        </div>

                                        <div class="md:col-span-5">
                                            <label for="contact_no">Contact Number</label>
                                            <input type="number" name="contact_no" id="contact_no" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" wire:model.lazy="contact_no"/>
                                            @error('contact_no')<div class="mt-1"><span class="text-red-500">* {{$message}}</span></div> @enderror
                                        </div>

                                        <div class="md:col-span-5">
                                            <label for="street_address">Street Address</label>
                                            <input type="text" name="street_address" id="street_address" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" wire:model.lazy="street_address" />
                                            @error('street_address')<div class="mt-1"><span class="text-red-500">* {{$message}}</span></div>@enderror
                                        </div>

                                        <div class="md:col-span-5 text-right mt-4">
                                            <div class="inline-flex items-end">
                                                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    {{-- ====================================================End Branch Details=================================== --}}

                    {{-- ====================================================Showing Branch Details=============================== --}}
                    <section class="container mx-auto p-6 font-mono">
                        <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
                            <div class="w-full overflow-x-auto md:overflow-x-hidden">
                                <table class="w-full">
                                    <thead>
                                        <tr class="text-md font-semibold tracking-wide text-left text-gray-900 bg-white uppercase border-b border-gray-600">
                                        <th class="px-4 py-3">Branch</th>
                                        <th class="px-4 py-3">Contact</th>
                                        <th class="px-4 py-3">Street Address</th>
                                        <th class="px-4 py-3">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white">
                                        @forelse($branches as $row)
                                            <tr class="text-gray-700">
                                                <td class="px-4 py-3 border">
                                                    <div class="flex items-center text-sm">
                                                        {{$row->branch}}
                                                    </div>
                                                </td>
                                                <td class="px-4 py-3 text-ms font-semibold border">{{$row->contact_no}}</td>
                                                <td class="px-4 py-3 text-xs border">
                                                    <span class="px-2 py-1 font-semibold leading-tight"> {{$row->street_address}} </span>
                                                </td>
                                                <td class="py-3 px-6 text-center border">
                                                    <div class="flex item-center justify-center">
                                                        <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                            <a class="cursor-pointer" wire:click="edit({{$row->id}})"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                            </svg></a>
                                                        </div>
                                                        <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                            <a class="cursor-pointer" wire:click.prevent="delete({{$row->id}})" onclick="confirm('Are you sure?')|| event.stopImmediatePropagation()"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                            </svg></a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr><td colspan="3" class="text-red-500 p-4">* No Records Found</td></tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </section>
                    {{-- ======================================================End of Branch Details=============================== --}}
                </div>
            </div>
        </div>
    </div>
</div>
