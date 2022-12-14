<?php

namespace App\Http\Controllers;

use App\Models\Emps;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Crypt;

class EmpsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        //

        $users = User::where('user_type', 1)->get();
        return view('admin.html.emps.show_emps')->with('users', $users);

         
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
//echo "create ";
        return view('admin.html.emps.add_emp');
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
            User::create(
                [
                    'name' => $request->name,
                    'password' => Hash::make($request->password),  
                    
                    'email' => $request->mail,
    
                   
                ]
            );
           } catch(\Illuminate\Database\QueryException $ex){ 
             //dd($ex->getMessage()); 
           
             return redirect()->route('index')->with('error', ' الايميل موجود مسبقا  ');
           }

           return redirect()->route('index')->with('done', 'تم الانشاء بنجاح');



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Emps  $emps
     * @return \Illuminate\Http\Response
     */
    public function show(Emps $emps)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Emps  $emps
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

       // echo $id;



        try {
            $user = User::findOrFail($id);
            return view('admin.html.emps.update_emp')->with('user',$user);
        } catch(Exception $e) {
            return redirect()->back();
        }
        //
    }

    /*
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Emps  $emps
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {


        //echo $request->password;


        if($request->password==''){

//echo "no pass";

$user = User::findOrFail($id);
$user->update([
    
    'name' => $request->name,
  
    
    'email' => $request->mail,



]);

return redirect()->route('emp_index')->with('done', 'تم التحديث بنجاح');
        }
        else{
           // echo "pass";
             $user = User::findOrFail($id);
        $user->update([
            
            'name' => $request->name,
            'password' =>   Hash::make($request->password),
            
            'email' => $request->mail,



        ]);

        return redirect()->route('emp_index')->with('done', 'تم التحديث بنجاح');

        }


        //echo "wwe";
        //echo  $id;
/*
        
        $user = User::findOrFail($id);
        $user->update([
            
            'name' => $request->name,
            'password' =>   Hash::make($request->password),
            
            'email' => $request->mail,



        ]);

        return redirect()->route('emp_index')->with('done', 'تم التحديث بنجاح');

        */
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Emps  $emps
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        //echo $id."wwe";
        echo User::where('id', $id)->delete();
        return redirect()->route('emp_index')->with('done', 'تم الحذف بنجاح');
       
    }
}
