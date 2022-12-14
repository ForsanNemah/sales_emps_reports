<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Crypt;
use Redirect;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

         
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.html.custs.add_cust');
    }




    public function create2()
    {
        
        return view('admin.html.custs.add_cust_with_mony');
    }
    
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try { 
            Customer::create(
                [
                    'name' => $request->name,
                    'business_type' => $request->business_type,
                    'service_type' => $request->service_type,
                    'emp_id' => Auth::id(),
                    'phone_number' => $request->phone,
                    'money' => $request->mony,
                    'email' => $request->email,
                    'address' => $request->address,
                    'meeted_person_position' => $request->meeting,
                    'money' => $request->mony,
                    'facebook' => $request->facebook,
                    'twiter' => $request->twiter,
                    'instgram' => $request->insta,
                    'snap' => $request->snap,
                    'ticktok' => $request->ticktok,
                    'note' => $request->note,
                    'x' => $request->x,
                    'y' => $request->y,
                    
                    
    
                   
                ]
            );
           } catch(\Illuminate\Database\QueryException $ex){ 
             //dd($ex->getMessage()); 
             return redirect()->route('index_emp')->with('error', ' الايميل موجود مسبقا  ');
           }

           return redirect()->route('index_emp')->with('done', 'تم الانشاء بنجاح');

      
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //


        try {
            $customer = Customer::findOrFail($id);
            return view('admin.html.emps.update_cust')->with('customer',$customer);
        } catch(Exception $e) {
            return redirect()->back();
        }
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $customer = Customer::findOrFail($id);
        $customer->update([
            
            'name' => $request->name,
                    

            'business_type' => $request->business_type,
            'service_type' => $request->service_type,

          
            'phone_number' => $request->phone,
            'money' => $request->mony,
            'email' => $request->email,
            'address' => $request->address,
            'meeted_person_position' => $request->meeting,
            'money' => $request->mony,
            'facebook' => $request->facebook,
            'twiter' => $request->twiter,
            'instgram' => $request->insta,
            'snap' => $request->snap,
            'ticktok' => $request->ticktok,
            'note' => $request->note,
        
        
        ]);


         
       
        
        return Redirect::back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        //
        echo Customer::where('id', $id)->delete();
        return redirect()->route('daily_reports')->with('done', 'تم الحذف بنجاح');
    }
}
