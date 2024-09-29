<div x-data="{show:false,message:'',color:''}"
    x-transition:enter="transition ease-out duration-1000"
    x-transition:enter-start="opacity-0 transform scale-90"
    x-transition:enter-end="opacity-100 transform scale-100"
    x-transition:leave="transition ease-in duration-1000"
    x-transition:leave-start="opacity-100 transform scale-100"
    x-transition:leave-end="opacity-0 transform scale-90"
    style="display: none"
    x-on:notify.window="show=true;message=$event.detail;setTimeout(()=>{show=false},2500)"
    x-on:color.window="color=$event.detail;setTimeout(()=>{color=''},3500)"
    x-show="show">
    <div class="mt-5 p-4 rounded-md" :class="color==''?'bg-green-500':'bg-'+color+'-500'">
        <p x-text="message" class="text-white"></p>
    </div>
</div>

