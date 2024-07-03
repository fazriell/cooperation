<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function create() {
        return view('customers.create');
    }

    public function store(Request $request) {
        $this->validate($request, [
            'code' => 'required|unique:customers|max:4',
            'name' => 'required|max:30',
            'phone' => 'max:15',
            'address' => 'required'
        ]);

        // INSERT INTO customers(code,name,phone,address) values ('')
        $customer = new Customer();
        $customer->code = $request->code;
        $customer->name = $request->name;
        $customer->phone = $request->phone;
        $customer->address = $request->address;

        if($customer->save()) {
            return redirect()->route('customer.show', $customer->id);
        } else {
            dd("Data Gagal Disimpan");
        }
    }

    public function show($id) {
        //SELECT * from customer where id - $id
        $customer = Customer::find($id);

        return view('customers.show', compact('customer'));
    }

    public function index() {
        $customers = Customer::all();

        return view('customers.index', compact('customers'));
    }

    public function edit($id) {
        $customer = Customer::find($id);

        return view('customers.edit', compact('customer'));
    }

    public function update(Request $request) {
        $this->validate($request, [
            'name' => 'required|max:30',
            'phone' => 'max:15',
            'address' => 'required'
        ]);

        // INSERT INTO customers(code,name,phone,address) values ('')
        $customer = Customer::find($request->id);
        $customer->name = $request->name;
        $customer->phone = $request->phone;
        $customer->address = $request->address;

        if($customer->save()) {
            return redirect()->route('customer.show', $customer->id);
        } else {
            dd("Data Gagal Disimpan");
        }
    }

    public function destroy($id) {
        $customer = Customer::find($id);

        if($customer->delete()) {
            return redirect()->route('customer.index')->with('success', "Data Berhasil di Hapus");
        }else {
            dd('Data Gagal Disimpan');
        }
    }
}
