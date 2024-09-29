@section('title')
    Packages
@endsection
<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Customer Packages') }}
        </h2>
    </x-slot>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="align-center mt-10 sm:mt-0">
                    <div><x-input.alert/></div>
                    <div class="mt-5 md:mt-0 md:col-span-2">
                        <form wire:submit.prevent="savePackage">
                            <div class="shadow  sm:rounded-md">
                                <div class="px-4 py-5 bg-white sm:p-6">
                                    <div class="grid grid-cols-12 gap-6">
                                        <div class="col-span-12 md:col-span-4 lg:col-span-4">
                                            <label class="block text-sm font-medium text-gray-700 mb-3">Price</label>
                                            <input type="text" wire:model="price" class="w-full py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200">
                                            @error('price')<h1 class="text-red-500">{{$message}}</h1>@enderror
                                        </div>
                                        <div class="col-span-12 md:col-span-4 lg:col-span-4">
                                            <label  class="block text-sm font-medium text-gray-700 mb-3">Discounted Price</label>
                                            <input type="number" wire:model="discount" class="w-full py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200">
                                            @error('discount')<h1 class="text-red-500">{{$message}}</h1>@enderror
                                        </div>
                                        <div class="col-span-12 md:col-span-4 lg:col-span-4">
                                            <label  class="block text-sm font-medium text-gray-700 mb-3">Number of Sessions</label>
                                            <input type="number" wire:model="total_sessions" class="w-full py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200">
                                            @error('total_sessions')<h1 class="text-red-500">{{$message}}</h1>@enderror
                                        </div>
                                    </div>

                                    <div class="mt-4">
                                        <label class="block text-sm font-medium text-gray-700 mb-3">Package Description</label>
                                        <textarea type="text" wire:model="package_name" class="w-full py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200"></textarea>
                                        @error('packages')<h1 class="text-red-500">{{$message}}</h1>@enderror
                                    </div>
                                </div>
                                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                    <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="">
                    <div class="flex justify-center my-5 text-2xl"><h1>Customer Packages</h1></div>
                    <div class="bg-gray-100 flex items-center justify-center font-sans">
                        <div class="overflow-x-auto w-full">
                            <div class="bg-white shadow-md rounded my-6">
                                <table class="min-w-max w-full table-auto">
                                    <thead>
                                        <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                            <th class="py-3 px-6 text-left">S.N</th>
                                            <th class="py-3 px-6 text-left">Package</th>
                                            <th class="py-3 px-6 text-left">Price</th>
                                            <th class="py-3 px-6 text-left">Discount</th>
                                            <th class="py-3 px-6 text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-gray-600 text-sm font-light">
                                        <?php $sn=1 ?>
                                        @forelse ($packages as $package)
                                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                                            <td class="py-3 px-6 text-left whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <span class="font-medium">{{$sn++}}</span>
                                                </div>
                                            </td>
                                            <td class="py-3 px-6 text-center">
                                                <div class="flex items-center">
                                                    <span>{{$package->package_name}}</span>
                                                </div>
                                            </td>
                                            <td class="py-3 px-6 text-left">
                                                <div class="flex items-left">
                                                    <span>$ {{$package->price}}</span>
                                                </div>
                                            </td>
                                            <td class="py-3 px-6 text-left">
                                                <div class="flex items-left">
                                                <span class="bg-green-200 text-white-600 py-1 px-3 rounded-full text-xs">Save  $ {{$package->discount}}</span>
                                                </div>
                                            </td>
                                            <td class="py-3 px-6 text-center">
                                                <div class="flex item-center justify-center">
                                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                        <a class="cursor-pointer" wire:click="edit({{$package->id}})"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                        </svg></a>
                                                    </div>
                                                    {{--<div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                        <a class="cursor-pointer" wire:click.prevent="delete({{$package->id}})" onclick="confirm('Are you sure?')|| event.stopImmediatePropagation()"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                        </svg></a>--}}
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        @empty
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
