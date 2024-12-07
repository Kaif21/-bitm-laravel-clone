<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    private $customers,$customer;
    public function index(){
        $this->customers = Customer::all();
        return view('customer.index',['customers'=>$this->customers]);
    }
    public function create(){
        return view('customer.create');
    }
    public function store(Request $request){

       Customer::newCustomer($request);
       return back()->with('message',"New customer added");

    }
    public function edit($id){
        $this->customer = Customer::find($id);
        return view('customer.edit',['customer'=>$this->customer]);
    }

    public function update(Request $request, $id){
        Customer::updateCustomer($request,$id);
         return redirect('/customer')->with('message','update the customer info');
    }

    public function destroy($id){
        Customer::destroyCustomer($id);
         return redirect('/customer')->with('message','update the customer info');
    }
}
