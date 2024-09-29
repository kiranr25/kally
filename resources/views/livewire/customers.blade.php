<div style="" x-data="{show:false}">
    <div class="">
        <div class="pt-5 flex justify-center m-auto">
            <div>
                <x-input.alert/>
            </div>
            <div class="px-4 mt-4" style="width: 50%">
                <div class='w-full flex-center md:w-full mb-4 justify-items-end'>
                    <label for="" class="text-gray-700"> Contact Number: </label>
                    <input style="width: 100%" class='appearance-none block  bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500' id='grid-text-2' type='text' placeholder='Enter Customer Number' wire:model="contact">
                    @error('contact')<div class="mt-2"><span class="text-red-500"> * {{$message}} </span></div>@enderror
                </div>
            </div>
        </div>
    </div>
    <div class="grid lg:grid-cols-3 sm:grid-cols-1 gap-4 m-5 text-white ">
        {{-- add Customers --}}
        <div class="items p-4 grid">
            <div class="items p-3 flex justify-between m-auto rounded-lg" style="background-color:#02AD9E;z-index:1;position: relative;width:80%">Customer Information
                <a  wire:click="showUpdateButton">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" >
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                    </svg>
                </a>
            </div>
            <form wire:submit.prevent="save()">
                <div class="information text-gray-700 text-left p-5 bg-white rounded-lg" style="margin-top:-7%;padding-top:8%">
                    <table class="">
                        <tr class="">
                            <th>
                                <label class='block uppercase tracking-wide  text-xs font-bold ' for='grid-text-1'>Full Name</label>
                            </th>
                            <th>:</th>
                            <th>
                                <input class='appearance-none block w-full bg-white text-gray-700  border border-gray-400 shadow-inner rounded-md  my-1   leading-tight focus:outline-none  focus:border-gray-500' id='grid-text-1' type='text' placeholder='Enter Customer customer_Name' wire:model.defer="customer_name">
                                @error('customer_name')<div class="mt-2"><span class="text-red-500"> * {{$message}} </span></div>@enderror
                            </th>
                        </tr>
                        <tr>
                            <th>
                                <label class='block uppercase tracking-wide  text-xs font-bold '>Contact Number</label>
                            </th>
                            <th>:</th>
                            <th>
                                <input class='appearance-none block w-full bg-white text-gray-700  border border-gray-400 shadow-inner rounded-md  my-1   leading-tight focus:outline-none  focus:border-gray-500' id='grid-text-2' type='text' placeholder='Enter Customer Number' wire:model="contact">
                                @error('contact')<div class="mt-2"><span class="text-red-500"> * {{$message}} </span></div>@enderror
                            </th>
                        </tr>
                        <tr>
                            <th>
                                <label class='block uppercase tracking-wide  text-xs font-bold ' >Email</label>
                            </th>
                            <th>:</th>
                            <th>
                                <input class='appearance-none block w-full bg-white text-gray-700  border border-gray-400 shadow-inner rounded-md  my-1   leading-tight focus:outline-none  focus:border-gray-500' type='text' wire:model.defer="email" placeholder="Enter Email">
                                @error('email')<div class="mt-2"><span class="text-red-500"> * {{$message}} </span></div>@enderror
                            </th>
                        </tr>
                        <tr>
                            <th>
                                <label class='block uppercase tracking-wide  text-xs font-bold ' >Address</label>
                            </th>
                            <th>:</th>
                            <th>
                                <input class='appearance-none block w-full bg-white text-gray-700  border border-gray-400 shadow-inner rounded-md  my-1   leading-tight focus:outline-none  focus:border-gray-500' type='text' wire:model.defer="address" placeholder="Enter Address">
                                @error('address')<div class="mt-2"><span class="text-red-500"> * {{$message}} </span></div>@enderror
                            </th>
                        </tr>
                    </table>
                    <div class="pt-5 pb-5 flex justify-center">
                        @if($showUpdateInfoButton)
                            <button type="button" class="bg-transparent bg-green-700 hover:bg-gray-900 font-semibold text-white py-2 px-4 border border-white hover:border-transparent rounded " style="width: 90%" wire:click="updatePersonalDetails()">
                                Update Customer
                            </button>
                        @endif
                    </div>
                </div>
            </form>
        </div>

            <div class="items p-4 grid min-h-full">
                {{-- ======================Add Package============================================================ --}}
                <div class="items p-3 flex justify-between m-auto rounded-lg" style="background-color:#7470fd;z-index:1;position: relative;width:80%">
                    Add New Packages
                </div>
                    <form  wire:submit.prevent="save()">
                        <div class="information text-gray-700 text-left p-5 bg-white rounded-lg" style="margin-top:-10%;padding-top:8%">
                            <table class="table" style="width: 100%">
                                <tr>
                                    <th>
                                        <label class='block uppercase tracking-wide  text-xs font-bold '>Packages</label>
                                    </th>
                                    <th>:</th>
                                    <th>
                                        <div class="flex-shrink w-full inline-block relative">
                                            <select class="block appearance-none  w-full bg-white text-gray-700 border border-gray-400 shadow-inner  my-1 pr-8 rounded" wire:model="package_id" required>
                                                <option value="">choose ...</option>
                                                    @foreach($packages as $package)
                                                        <option value="{{$package->id}}">{{$package->package_name}}</option>
                                                    @endforeach
                                            </select>
                                            @error('package_id')<div class="mt-2"><span class="text-red-500"> * {{$message}} </span></div>@enderror
                                        </div>
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        <label class='block uppercase tracking-wide  text-xs font-bold '>Branches</label>
                                    </th>
                                    <th>:</th>
                                    <th>
                                        <select class="block appearance-none w-full bg-white text-gray-700 border border-gray-400 shadow-inner  my-1 pr-8 rounded" wire:model.defer="branch_id" required>
                                            <option value="">choose ...</option>
                                                @foreach($branches as $branch)
                                                    <option value="{{$branch->id}}">{{$branch->branch}}</option>
                                                @endforeach
                                        </select>
                                    </th>
                                </tr>
                            </table>
                            <div class="pt-5 flex justify-center pb-5">
                                <button  class=" hover:bg-gray-900 text-white font-semibold hover:text-white py-2 px-4 border boder-white hover:border-transparent rounded " style="width: 90%;background-color:#7470fd">
                                    Add Package
                                </button>
                            </div>
                        </div>
                    </form>
            </div>
             {{-- =====================Add Number of Sessions======================================================= --}}
            <div class="items p-4 grid min-h-full">
                <div class="items p-3 flex justify-between m-auto rounded-lg" style="background-color:#02AD9E;z-index:1;position: relative;width:80%">
                    Record Sessions
                </div>
                <form wire:submit.prevent="updateSession()">
                    <div class="information text-gray-700 text-left p-5 bg-white rounded-lg" style="margin-top:-5%;padding-top:8%">
                        <table class="table-auto">
                            <tr>
                                <th>
                                    <label class='block uppercase tracking-wide  text-xs font-bold '>Branches</label>
                                </th>
                                <th>:</th>
                                <th>
                                    <select required class="block appearance-none  w-full bg-white text-gray-700 border border-gray-400 shadow-inner  my-1 pr-8 rounded" wire:model.defer="session_branch_id">>
                                        <option value="">choose ...</option>
                                        @foreach($branches as $branch)
                                            <option value="{{$branch->id}}">{{$branch->branch}}</option>
                                        @endforeach
                                    </select>
                                </th>
                            </tr>
                            <tr>
                                <th>
                                    <label class='block uppercase tracking-wide  text-xs font-bold '>Membership</label>
                                </th>
                                <th>:</th>
                                <th>
                                    <div class="flex-shrink w-full inline-block relative">
                                        <select required class="block appearance-none  w-full bg-white text-gray-700 border border-gray-400 shadow-inner  my-1 pr-8 rounded-lg" wire:model.defer="membership_id">>
                                            <option value="">Choose Membership</option>
                                            @foreach ($activeCustomerPackages as $activePackage)
                                                @php $packageName=DB::table('packages')->where('id',$activePackage->package_id)->first(); @endphp
                                                <option value="{{$activePackage->id}}">{{$packageName->package_name}}
                                            @endforeach

                                        </select>
                                        @error('membership_id')<div class="mt-2"><span class="text-red-500"> * {{$message}} </span></div>@enderror
                                    </div>
                                </th>
                            </tr>
                            @if (Session::has('sessioncheck'))
                                <p class="text-red-700">{{ Session::get('sessioncheck')}}</p>
                            @endif
                            <tr>

                                <th>

                                    <label class='block uppercase tracking-wide  text-xs font-bold '>Number oF Sessions</label>
                                </th>
                                <th>:</th>
                                <th>
                                    <input type="number" class="appearance-none block w-full bg-white text-gray-700  border border-gray-400 shadow-inner rounded-md  my-1   leading-tight focus:outline-none  focus:border-gray-500" wire:model.defer="no_of_sessions">
                                </th>
                            </tr>
                            <tr>
                                <th>
                                    <label class="block uppercase text-xs font-bold mb-2" htmlfor="grid-password">
                                        Attended Date
                                    </label>
                                </th>
                                <th>:</th>
                                <th>
                                    <input type="date" required class="appearance-none block w-full bg-white text-gray-700  border border-gray-400 shadow-inner rounded-md  my-1   leading-tight focus:outline-none  focus:border-gray-500" wire:model.defer="attend_date">
                                </th>
                            </tr>
                        </table>
                        <div class="pt-5 flex justify-center">
                            <button  class="hover:bg-gray-900 text-white font-semibold hover:text-white py-2 px-4 border border-white hover:border-transparent rounded-lg " style="width: 90%;background-color:#02AD9E">
                                Add Sessions
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            {{-- =====================Endo fo Number of Sessions=============================================================== --}}
        </div>

        {{-- ==================================== New Row========================================================= --}}
        <div class="grid grid-cols-1 gap-1 p-5 text-white text-sm">
            {{-- Show Package Details Along with Session --}}
           <div class="text-white pr-2">
               <div class="items p-3 flex justify-between m-auto rounded-lg" style="background-color:#7470fd;z-index:1;position: relative;width:80%">
                   Package History
               </div>
               @if($this->hide==false)
                   @if(count($customerMembership)>0)
                       <div class="information text-gray-700 text-center bg-white rounded-lg" style="margin-top:-2%;padding-top:4%">
                           <table class="table-auto" style="width: 100%">
                               <thead class="block md:table-header-group">
                                   <tr class=" bg-gray-100 uppercase">
                                       <th class="p-4"></th>
                                       <th class="p-4"> S.N. </th>
                                       <th class="p-4">Package</th>
                                       <th class="p-4">Branch</th>
                                       <th class="p-4">Purchased At</th>
                                       <th class="p-4">Session Branch</th>
                                       <th class="p-4">Session Date</th>
                                       <th class="p-4">No Of Sessions</th>
                                       <th class="p-4">Status</th>
                                   </tr>
                               </thead>
                               <tbody class="text-center">
                                   <style>
                                       .dynamic:nth-child(even) {
                                       background: rgb(248, 224, 224);
                                       }
                                   </style>
                                   @foreach($customerMembership as $key=>$row)
                                       <tr class="px-4 py-3 dynamic">
                                           <td>
                                            <a class="cursor-pointer" wire:click.prevent="delete({{$row->id}})" onclick="confirm('Are you sure?')|| event.stopImmediatePropagation()">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="width: 20px;!important">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg></a>
                                           </td>
                                           <td class="">
                                               {{++$key}}
                                           </td>
                                           <td class="">
                                               <?php $membership = DB::table('packages')->where('id',$row->package_id)->first() ?>
                                               {{$membership->package_name}}
                                           </td>
                                           <?php $branch = DB::table('branches')->where('id',$row->branch_id)->first() ?>
                                           <td class="">{{$branch->branch}}</td>
                                           <td class="">{{Carbon\Carbon::parse( $row->created_at)->format('M j   ,Y')}}</td>
                                           <?php $customer_sessions = DB::table('customer_sessions')->where('package_id',$row->package_id)->where('customer_id',$row->customer_id)->where('membership_id',$row->id)->get() ?>
                                           <td class="">
                                               @foreach ($customer_sessions as $customer_session)
                                                   <?php $branchcustomer_name = DB::table('branches')->where('id',$customer_session->branch_id)->first() ?>
                                                   {{ $branchcustomer_name->branch }}<br/><hr/>
                                               @endforeach
                                           </td>
                                           <td>
                                               @foreach ($customer_sessions as $customer_session)
                                                   {{Carbon\Carbon::parse($customer_session->created_at)->format('M j,Y')}}<br/>
                                               @endforeach
                                           </td>
                                           <td class="p-2   block md:table-cell">
                                               <?php $totalsession=0 ?>
                                               @foreach ($customer_sessions as $customer_session)
                                                   {{ $customer_session->no_of_sessions }}<br/>
                                                   <?php $totalsession=$totalsession+ $customer_session->no_of_sessions ?>
                                               @endforeach
                                           </td>
                                           <td class="p-2 block md:table-cell">
                                               @if ($totalsession>=$membership->total_sessions)
                                                   Completed
                                               @else
                                                   <?php echo $membership->total_sessions- $totalsession ?> Remaining
                                               @endif
                                           </td>
                                       </tr>
                                   @endforeach
                               </tbody>
                           </table>
                       </div>
                   @endif
               @endif
           </div>
           {{-- Customer Details --}}
           <div class="text-white">
            <div class="items p-3 flex justify-between m-auto rounded-lg" style="background-color:#7470fd;z-index:1;position: relative;width:80%">
                Customer Details
            </div>
            <div class="information text-gray-700 text-left bg-white rounded-lg" style="margin-top:-2%;padding-top:4%;max-height:500px;overflow-y:scroll">
                <table class="table-auto" style="width: 100%">
                    <thead class="w-100">
                    <tr class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase">
                        <th class="px-4 py-3">Name</th>
                        <th class="px-4 py-3">Contact</th>
                        <th class="px-4 py-3">Address</th>
                        <th class="px-4 py-3">Email</th>
                    </tr>
                    </thead>
                    <tbody class="bg-white">
                        @forelse($customers as $row)
                            <tr class="text-gray-700">
                                <td class="px-4 py-3  font-semibold text-blac">
                                    <div class="flex items-center text-sm">
                                        {{$row->customer_name}}
                                    </div>
                                </td>
                                <td class="px-4 py-3 text-ms font-semibold ">
                                    {{$row->contact}}
                                </td>
                                <td class="px-4 py-3 text-xs ">
                                    <span class="px-2 py-1 font-semibold leading-tight"> {{$row->address}} </span>
                                </td>
                                <td class="px-4 py-3 text-sm ">
                                    {{$row->email}}
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="p-4 text-red-500">
                                    No Records Found
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    {{-- =====================================end of New Row================================================== --}}
    </div>
</div>


