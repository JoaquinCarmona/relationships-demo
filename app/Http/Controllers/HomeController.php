<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use App\Models\Address;
use App\Models\Country;
use App\Models\Customer;
use App\Models\Payment;
use App\Models\Store;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $countries = Country::with('cities.addresses')->get();
        return view('countries',compact('countries'));
    }

    public function getAddresses()
    {

        $addresses = Address::all();
        return view('addresses',compact('addresses'));
    }


    public function getCustomers()
    {
        $customers = Customer::all();
        return view('customers',compact('customers'));
    }

    public function getPayments()
    {
        $payments = Payment::all();
        return view('payments',compact('payments'));
    }

}
