<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Customer;
use Illuminate\Support\Facades\Auth;
// use DB;


class CustomerController extends Controller
{
    public function index(Customer $customers)
    {
        // $rows = Customer::all();
        $customers = Customer::all();

        $users = User::all();

        return view('customers.index', ['users'=>$users,'customers'=>$customers]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customers.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Auth::check()){
            $customer = Customer::create([
                'voornaam' => $request->input('voornaam'),
                'tussenvoegsel' => $request->input('tussenvoegsel'),
                'achternaam' => $request->input('achternaam'),
                'email' => $request->input('email'),
                'telefoon' => $request->input('telefoon'),
                'adres' => $request->input('adres'),
                'plaats' => $request->input('plaats'),
                'postcode' => $request->input('postcode')
            ]);
            if($customer){
                return redirect()->route('customers.index', ['customer'=> $customer->id])
                ->with('customer_created', 'Klant is succesvol toegevoegd!');
            }
        }
        
            return back()->withInput()->with('errors', 'Error creating new customer');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // // $user = User::find($user->id);
        // $customer = Customer::where('id',$id)->first();

        // // $user = User::find($id);

        // return view('customers.show', [ 'customer' => $customer]);

        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer = Customer::find($id);


        return view('customers.edit', [ 'customer' => $customer]);
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $customer = Customer::find($id);
        $customer->voornaam = $request->voornaam;
        $customer->tussenvoegsel = $request->tussenvoegsel;
        $customer->achternaam = $request->achternaam;
        $customer->email = $request->email;
        $customer->telefoon = $request->telefoon;
        $customer->adres = $request->adres;
        $customer->postcode = $request->postcode;
        $customer->plaats = $request->plaats;
        $customer->save();

        return redirect()->back()->with('customer_updated' , 'Klant is succesvol gewijzigd!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        // $findcustomer = Customer::find($id);
        // $findcustomer ->delete();

        // $customer = Customer::where('id',$id)->delete();
        // $customer = Customer::find($id);
        // $customer = Customer::where('customers.id',$customer->id)->first();
        // Customer::find($customer->id);
        // $customer->delete();
        // dd($customer);

        $customer->delete();

        return redirect()->back()->with('customer_deleted', 'Klant is succesvol verwijderd!');
    }
}