<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AdvanceSalary; 
use App\Models\Employee; 
use Carbon\Carbon;
use App\Models\PaySalary;

class SalaryController extends Controller
{
    public function AddAdvanceSalary(){

        $employee = Employee::latest()->get();
        return view('backend.salary.add_advance_salary',compact('employee'));

    }// End Method 


public function AdvanceSalaryStore(Request $request){

    $validateData = $request->validate([
        'month' => 'required',
        'year' => 'required',
        'employee_id' => 'required', // Check if the employee exists
    ]);

    $month = $request->month;
    $employee_id = $request->employee_id;

    $originalSalary = Employee::findOrFail($employee_id)->salary;
    $advanceSalary = $request->advance_salary;

    // Compare the advance salary with the original salary
    if ($advanceSalary > $originalSalary) {
        $notification = array(
            'message' => 'Advance Salary is higher than the Original Salary. Entry not saved.',
            'alert-type' => 'warning'
        );

        return redirect()->back()->with($notification);
    }

    $advanced = AdvanceSalary::where('month', $month)->where('employee_id', $employee_id)->first();

    if ($advanced === NULL) {
        AdvanceSalary::insert([
            'employee_id' => $request->employee_id,
            'month' => $request->month,
            'year' => $request->year,
            'advance_salary' => $advanceSalary,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Advance Salary Paid Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    } else {
        $notification = array(
            'message' => 'Advance Already Paid',
            'alert-type' => 'warning'
        );

        return redirect()->back()->with($notification);
    }
}


public function AllAdvanceSalary(){

        $salary = AdvanceSalary::latest()->get();
        return view('backend.salary.all_advance_salary',compact('salary'));

    }// End Method 


    public function EditAdvanceSalary($id){
        $employee = Employee::latest()->get();
        $salary = AdvanceSalary::findOrFail($id);
        return view('backend.salary.edit_advance_salary',compact('salary','employee'));



    }// End Method 


    public function AdvanceSalaryUpdate(Request $request){
    $salary_id = $request->id;

    // Retrieve the original salary of the employee
    $originalSalary = Employee::findOrFail($request->employee_id)->salary;

    // Check if the updated advance_salary is higher than the original salary
    if ($request->advance_salary > $originalSalary) {
        $notification = array(
            'message' => 'Advance Salary is higher than the Original Salary. Update not saved.',
            'alert-type' => 'warning'
        );

        return redirect()->back()->with($notification);
    }

    // Update the advance salary if it's valid
    AdvanceSalary::findOrFail($salary_id)->update([
        'employee_id' => $request->employee_id,
        'month' => $request->month,
        'year' => $request->year,
        'advance_salary' => $request->advance_salary,
        'created_at' => Carbon::now(),
    ]);

    $notification = array(
        'message' => 'Advance Salary Updated Successfully',
        'alert-type' => 'success'
    );

    return redirect()->route('all.advance.salary')->with($notification);
} //End method
 



     public function DeleteAdvanceSalary($id){

     //   $employee_img = Employee::findOrFail($id);
      //  $img = $employee_img->image ;
      //  unlink($img);

        AdvanceSalary::findOrFail($id)->delete();
        $notification = array(
            'message' =>'Employee record deleted successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    /////////////////////// Pay Salary Methods  //////////////////////////////////////

    public function PaySalary(){

        $employee = Employee::latest()->get();
        return view('backend.salary.pay_salary',compact('employee'));
    }// End Method 

    public function PayNowSalary($id){

        $paysalary = Employee::findOrFail($id);
        return view('backend.salary.paid_salary',compact('paysalary'));

    }// End Method 

    public function EmployeSalaryStore(Request $request){
    $employee_id = $request->id;
    $month = $request->month;

    // Check if a record already exists for the employee and month
    $existingRecord = PaySalary::where('employee_id', $employee_id)
        ->where('salary_month', $month)
        ->first();

    if ($existingRecord) {
        $notification = [
            'message' => 'Salary for this employee and month already paid!',
            'alert-type' => 'warning',
        ];
    } else {
        // If no existing record, insert the new data
        PaySalary::insert([
            'employee_id' => $employee_id,
            'salary_month' => $month,
            'paid_amount' => $request->paid_amount,
            'advance_salary' => $request->advance_salary,
            'due_salary' => $request->due_salary,
            'created_at' => Carbon::now(),
        ]);

        $notification = [
            'message' => 'Employee Salary Paid Successfully',
            'alert-type' => 'success',
        ];
    }

    return redirect()->route('pay.salary')->with($notification); 
} //End Method


public function MonthSalary(){

        $paidsalary = PaySalary::latest()->get();
        return view('backend.salary.month_salary',compact('paidsalary'));

    }// End Method





}