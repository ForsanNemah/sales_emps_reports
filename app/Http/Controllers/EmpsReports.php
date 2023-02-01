<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use DB;
use Session;

class EmpsReports extends Controller
{
    //


    public function emp_report_daily($emp_id)
    {

      Session::put('emp_id',$emp_id);
      //  echo  $emp_id;

      $date = date('Y-m-d');
     //echo $date;
   $customers =DB::select('select * from customers where emp_id=?  and date(created_at) = ? ORDER BY id DESC',[$emp_id,$date]);
   //return    $customers; 
   
      return view('admin.html.emps.daily_report')->with('customers', $customers );
      //echo  $customers;
        
    
    }


    public function emp_report_no_edit($emp_id)
    {

      Session::put('emp_id',$emp_id);
      //  echo  $emp_id;

      $date = date('Y-m-d');
     //echo $date;
   $customers =DB::select('select * from customers where emp_id=?  and date(created_at) = ? ORDER BY id DESC',[$emp_id,$date]);
   //return    $customers; 
   
      return view('admin.html.emps.daily_report_for_emps')->with('customers', $customers );
      //echo  $customers;
        
    
    }







    public function emp_report_full($emp_id)
    {


      Session::put('emp_id',$emp_id);
      //  echo  $emp_id;

      $date = date('Y-m-d');
     //echo $date;
   $customers =DB::select('select * from customers where emp_id=?  ORDER BY id DESC  ',[$emp_id]);
   //return    $customers; 
   
      return view('admin.html.emps.full_report')->with('customers', $customers );
      //echo  $customers;
        
    
    }

   



    public function  full_all_emps_report()
    {

      
      //  echo  $emp_id;

       
   $customers =DB::select('select * from customers ORDER BY id DESC  ');
   //return    $customers; 
   
      return view('admin.html.emps.full_all_emps_report')->with('customers', $customers );
      //echo  $customers;
        
    
    }


}
