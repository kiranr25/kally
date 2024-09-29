
<div class="mx-auto container mt-5 bg-white dark:bg-gray-800 shadow rounded">
    <div wire:loading>
        @include('livewire.loadingscreen')
    </div>
    <div class="flex flex-col lg:flex-row p-8 justify-between items-start lg:items-stretch w-full">
        <div class="w-full lg:w-3/4 lg:flex-row items-end">
            <div class="w-full relative mb-2 lg:mb-0 lg:mr-4">
                {{-- <div class="absolute text-gray-600 dark:text-gray-400 flex items-end pl-4 h-full">
                    <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/advance_table_with_filters_search_and_two_level_action_buttons-svg1.svg" alt="search">
                    <img class="dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/advance_table_with_filters_search_and_two_level_action_buttons-svg1dark.svg" alt="search">
                </div> --}}
                {{-- <label for="search" class="hidden"></label>
                <input placeholder="Search" id="search" class="bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-400 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-12 text-sm border-gray-300 dark:border-gray-200 rounded border" wire:modal="branch_search" placeholder="Search" /> --}}
            </div>
        </div>
        <div class="w-full lg:w-3/4  flex flex-col lg:flex-row">
            <div class="" style="display: flex">
                <div  class="relative ml-2  cursor-pointer z-0  dark:border-gray-200 rounded ">
                    <select aria-label="Selected tab" class="w-full" wire:model="branch_id">
                        <option class="text-gray-600 dark:text-gray-400"  value="" selected>All</option>

                        @foreach ($branches as $branch)
                        <option class="text-gray-600 dark:text-gray-400"  value="{{ $branch->id }}">{{ $branch->branch }}</option>
                        @endforeach
                    </select>
                </div>
                {{-- <div  class="relative xl:w-1/3 ml-2 cursor-pointer z-0  dark:border-gray-200 rounded ">
                     <div class="flex">
                                <button type="button" wire:click='showTimelyDate("today")' style="background-color: gray;color:#fff"  class="btn">Today</button>
                                <button type="button" wire:click='showTimelyDate("yesterday")' style="background-color: gray;color:#fff"  class="btn">Yesterday</button>
                                <button type="button" wire:click='showTimelyDate("thisweek")' style="background-color: gray;color:#fff" class="btn">This Week</button>
                                <button type="button" wire:click='showTimelyDate("thismonth")' style="background-color: gray;color:#fff" class="btn">This Month</button>
                            </div>
                </div> --}}
                <div  class="relative xl:w-1/3 ml-2 cursor-pointer z-0  dark:border-gray-200 rounded ">
                    <input type="date" name="" wire:model="start_date" id="">
                </div>
                <div class="relative xl:w-1/3 ml-2 cursor-pointer z-0  dark:border-gray-200 rounded ">
                    <input type="date" name="" wire:model="end_date" id="" >
                </div>
            </div>
        </div>
    </div>

 {{-- ==================================== New Row========================================================= --}}
 <div class="grid grid-cols-1 text-white text-sm">
    {{-- Show Package Details Along with Session --}}
   <div class="text-white pr-2" wire:loading.remove>
        @if(count($customerMembership)>0)
            <div class="information text-gray-700 text-center bg-white rounded-lg">
                <table class="table-auto" style="width: 100%">
                    <thead class="block md:table-header-group">
                        <tr class=" bg-gray-100 uppercase">
                            <th class="p-4"> S.N. </th>
                            <th class="p-4"> Customer Name </th>
                            <th class="p-4">Package</th>
                            <th class="p-4">Branch</th>
                            <th class="p-4">Purchased At</th>
                            <th class="p-4">Session Branch</th>
                            <th class="p-4">Session Date</th>
                            <th class="p-4">No Of Sessions</th>
                            <th class="p-4">Price</th>
                            <th class="p-4">Discount</th>
                            <th class="p-4">Sales</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <style>
                            .dynamic:nth-child(even) {
                            background: rgb(248, 224, 224);
                            }
                        </style>
                        <?php $sn=0 ?>
                        @forelse($customerMembership as $key=>$row)
                        <?php $customer_sessions = DB::table('customer_sessions')->where('package_id',$row->package_id)->where('customer_id',$row->customer_id)->where('membership_id',$row->id)->get() ?>
                            <?php $crossSale=0 ?>
                            @foreach ($customer_sessions as $checkdata)
                                <?php $crossSale=0 ?>
                                    @if($checkdata->branch_id !=($row->branch_id))
                                        <?php $crossSale+=1; ?>
                                    @else
                                        <?php $crossSale+=0; ?>
                                    @endif
                            @endforeach

                            @if($crossSale)

                                <tr class="px-4 py-3 dynamic">
                                    <td class="">
                                        {{++$sn}}


                                    </td>
                                    <?php $customer_name=DB::table('customers')->where('id',$row->customer_id)->first() ?>
                                    <td class="">
                                        {{$customer_name->customer_name}}
                                    </td>

                                    <td class="">
                                        <?php $membership = DB::table('packages')->where('id',$row->package_id)->first() ?>
                                        {{$membership?->package_name}}
                                    </td>
                                    <?php $branch = DB::table('branches')->where('id',$row->branch_id)->first() ?>
                                    <td class="">{{$branch->branch}}</td>
                                    <td class="">{{Carbon\Carbon::parse( $row->created_at)->format('M j   ,Y')}}</td>
                                    <td class="">
                                        @foreach ($customer_sessions as $customer_session)
                                            @if ($customer_session->branch_id != $branch->id)
                                                <?php $branchcustomer_name = DB::table('branches')->where('id',$customer_session->branch_id)->first() ?>
                                                {{ $branchcustomer_name->branch }}<br/><hr/>
                                            @endif
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach ($customer_sessions as $customer_session)
                                            @if ($customer_session->branch_id != $branch->id)
                                                {{Carbon\Carbon::parse($customer_session->created_at)->format('M j,Y')}}<br/>
                                            @endif
                                        @endforeach
                                    </td>
                                    <td class="p-2   block md:table-cell">
                                        <?php $totalsession=0 ?>
                                        @foreach ($customer_sessions as $customer_session)
                                            @if ($customer_session->branch_id != $branch->id)
                                                {{ $customer_session->no_of_sessions }}<br/>
                                            <?php $totalsession=$totalsession+ $customer_session->no_of_sessions ?>
                                            @endif
                                        @endforeach
                                    </td>
                                    <td class="p-2 block md:table-cell">
                                        ${{$membership?->price}}
                                    </td>
                                    <td class="p-2 block md:table-cell">
                                        ${{$membership?->discount}}
                                    </td>
                                    <td class="p-2 block md:table-cell">
                                        ${{($membership?->price ?? 0 - $membership?->discount ?? 0)*$totalsession}}
                                    </td>
                                </tr>
                            @endif
                            @empty
                            <tr>
                                <td style="color: red">No Cross Sales.</td>
                            </tr>
                            <?php $sn=+1 ?>
                        @endforelse
                    </tbody>
                </table>
                {{-- <div>{{$customerMembership->links()}}</div> --}}
            </div>
        @endif
   </div>
</div>
