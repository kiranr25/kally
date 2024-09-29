<?php

use App\Http\Livewire\Appointments;
use App\Http\Livewire\AppointmentsCalendar;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Customers;
use App\Http\Livewire\ViewCustomers;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Packages;
use App\Http\Livewire\UpdateSessions;
use App\Http\Livewire\Branches;
use App\Http\Livewire\CrossSales;
use App\Http\Livewire\Report;
use App\Http\Livewire\SalesReport;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('livewire.welcome');
});


Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/customer',Customers::class)->name('customer');
    Route::get('/packages',Packages::class)->name('packages');
    Route::get('/dashboard',Dashboard::class)->name('dashboard');
    Route::get('/customers',ViewCustomers::class)->name('customers');
    Route::get('/update/{id}',UpdateSessions::class)->name('update-sessions');
    Route::get('/branches',Branches::class)->name('branches');
    // Route::get('/report',Report::class)->name('report');
    Route::get('/sales-report',SalesReport::class)->name('sales-report');
    Route::get('/cross-sales',CrossSales::class)->name('cross-sales');
    Route::get('/appointments',AppointmentsCalendar::class)->name('appointment');



});

Route::get('/clear', function () {
    Artisan::call('cache:clear');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    Artisan::call('optimize');
    Artisan::call('route:cache');
    Artisan::call('config:cache');
    echo '<h1>All Clear</h1>';
});

