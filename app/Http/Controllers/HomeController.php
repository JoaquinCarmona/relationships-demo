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
        /*
         * 1915 Models, 112 queries
        $countries = Country::with('cities.addresses')->get();
        return view('countries',compact('countries'));
        */


        /*
         * 712 Models, 2 Queries

        $countries = Country::with('addresses')->get();
        return view('countries',compact('countries'));
        */

        /*
         * 109 Models, 1 Queries

        $countries = Country::withCount('addresses')->get();
        return view('countries',compact('countries'));
        */

        $countries = Country::with('payments')->get();
        return view('countries',compact('countries'));
    }

    public function getAddresses()
    {
        /*
         * 1809 Models, 1207 Queries
         */
        //$addresses = Address::all();
        //return view('addresses',compact('addresses'));


        /*
         * 1311 Models, 3 Queries

        $addresses = Address::with('city.country')->get();
        return view('addresses',compact('addresses'));
        */

        /*
         *  1202 Models, 2 Queries
         */
        $addresses = Address::with('country')->get();
        return view('addresses',compact('addresses'));
    }


    public function getCustomers()
    {
        $customers = Customer::all();
        return view('customers',compact('customers'));
    }

    public function getPayments()
    {
        $payments = Payment::with('country')->get();
        return view('payments',compact('payments'));
    }

}
