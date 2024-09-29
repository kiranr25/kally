
                <div class="mx-auto container mt-5 bg-white dark:bg-gray-800 shadow rounded">
                    <div class="flex flex-col lg:flex-row p-8 justify-between items-start lg:items-stretch w-full">
                        <div class="w-full lg:w-2/4 xl:w-2/3 flex flex-col lg:flex-row items-start lg:items-center">
                            {{-- <div class="w-full relative mb-2 lg:mb-0 lg:mr-4">
                                <div class="absolute text-gray-600 dark:text-gray-400 flex items-center pl-4 h-full">
                                   <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/advance_table_with_filters_search_and_two_level_action_buttons-svg1.svg" alt="search">
                                   <img class="dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/advance_table_with_filters_search_and_two_level_action_buttons-svg1dark.svg" alt="search">
                                </div>
                                <label for="search" class="hidden"></label>
                                <input placeholder="Search" id="search" class="bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-400 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-12 text-sm border-gray-300 dark:border-gray-200 rounded border" placeholder="Search" />
                            </div> --}}
                        </div>
                        <div class="w-full lg:w-1/4 xl:w-1/3 flex flex-col lg:flex-row items-start lg:items-center justify-between">
                            <div class="" style="display: flex">
                                {{-- <div  class="relative  cursor-pointer z-0  dark:border-gray-200 rounded ">
                                    <select aria-label="Selected tab" class="w-full" wire:model="timely_data">
                                        <option class="text-gray-600 dark:text-gray-400"  value="today" selected>Today</option>
                                        <option class="text-gray-600 dark:text-gray-400" value="weekly">Weekly Sales</option>
                                        <option class="text-gray-600 dark:text-gray-400" value="monthly">Monthly Sales</option>

                                    </select>
                                </div> --}}
                                <div  class="relative ml-3 cursor-pointer z-0  dark:border-gray-200 rounded ">
                                    <input type="date" name="" wire:model="start_date" id="">
                                </div>
                                <div class="relative ml-3 cursor-pointer z-0  dark:border-gray-200 rounded ">
                                    <input type="date" name="" wire:model="end_date" id="" >
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full overflow-x-scroll xl:overflow-x-hidden">
                        <table class="min-w-full bg-white dark:bg-gray-800 rounded">
                            <thead>
                                <tr class="w-full h-16 border-gray-300 dark:border-gray-200 border-b py-8 bg-indigo-50">
                                    <th role="columnheader" class="pl-8 text-gray-600 font-normal pr-6 text-left text-sm tracking-normal leading-4">Brancha Name</th>
                                    <th role="columnheader" class="text-gray-600 font-normal pr-6 text-left text-sm tracking-normal leading-4">Contact No</th>
                                    <th role="columnheader" class="text-gray-600 font-normal pr-6 text-left text-sm tracking-normal leading-4">No of Sessions</th>
                                    <th role="columnheader" class="text-gray-600 font-normal pr-6 text-left text-sm tracking-normal leading-4">Total Sales</th>

                                </tr>
                            </thead>
                            <tbody role="rowgroup" >
                                @forelse ($sales as $sale)
                                    <tr role="row" class="h-20 border-gray-300 border-t border-b hover:border-indigo-300 hover:shadow-md cursor-pointer transition duration-150 ease-in-out">
                                        <td class="pl-4 whitespace-no-wrap text-sm text-gray-800 dark:text-gray-100 tracking-normal">{{ $sale->b_name }}</td>
                                        <td class="pl-4 whitespace-no-wrap text-sm text-gray-800 dark:text-gray-100 tracking-normal">{{ $sale->b_contact }}</td>
                                        <td class="pl-4 whitespace-no-wrap text-sm text-gray-800 dark:text-gray-100 tracking-normal">{{ $sale->totalsessions }}</td>
                                        <td class="pl-4 whitespace-no-wrap text-sm text-gray-800 dark:text-gray-100 tracking-normal">${{ $sale->totalsales  }}</td>

                                    </tr>
                                @empty
                                    <tr role="row" class="h-20 border-gray-300 border-t border-b hover:border-indigo-300 hover:shadow-md cursor-pointer transition duration-150 ease-in-out">
                                        <td class="w-full" style="padding-left:50px;color:red" colspan="4"> No Sales Yet*</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>

