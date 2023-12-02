<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;

class EmployeeController extends Controller
{
    public function AllEmployee(){

        $employee = Employee::latest()->get();
        return view('backend.employee.all_employee',compact('employee'));

    } //End Method

    public function AddEmployee() {
        return view('backend.employee.add_employee'); 

    }//End Method

    public function StoreEmployee(Request $request){

        $validateData = $request->validate([
            'name' => 'required|max:200' ,
            'email' => 'required|unique:employees|max:200' ,
            'phone' => 'required|max:200' ,
            'address' => 'required|max:400' ,
            'experience' => 'required|max:200' ,
            'salary' => 'required|max:200' ,
            'dept' => 'max:200' ,
            'vacation' => 'max:200' ,
        ]);
        
        if($request->file('image')){
                $image = $request->file('image');
                $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                Image::make($image)->resize(300,300)->save('upload/employee/'.$name_gen);
                $save_url = 'upload/employee/'.$name_gen ;

        Employee::insert([
            'name' => $request->name ,
            'email' => $request->email ,
            'phone' => $request->phone ,
            'address' => $request->address ,
            'salary' => $request->salary ,
            'experience' => $request->experience ,
            'dept' => $request->dept ,
            'vacation' => $request->vacation ,
            'image' => $save_url ,
            'created_at' => Carbon::now() 

        ] ,

        [
            'experience.required' => 'Please enter the years of experience of this employee ',
        ]
    
    );

        $notification = array(
            'message' =>'Employee recorded successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.employee')->with($notification);
    } 
    
    else{

        $save_url = 'upload/default.png' ;
        Employee::insert([
            'name' => $request->name ,
            'email' => $request->email ,
            'phone' => $request->phone ,
            'address' => $request->address ,
            'salary' => $request->salary ,
            'experience' => $request->experience ,
            'dept' => $request->dept ,
            'vacation' => $request->vacation ,
            'image' => $save_url ,
            'created_at' => Carbon::now() 

        ] ,

        [
            'experience.required' => 'Please enter the years of experience of this employee ',
        ]
    
        );

        $notification = array(
            'message' =>'Employee recorded successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.employee')->with($notification);

    }
 }

    public function EditEmployee($id){

        $employee = Employee::findOrFail($id);
        return view('backend.employee.edit_employee',compact('employee'));
    }

    public function UpdateEmployee(Request $request){
        $employee_id = $request->id ;

        if($request->file('image')){
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(300,300)->save('upload/employee/'.$name_gen);
            $save_url = 'upload/employee/'.$name_gen ;

            Employee::findOrFail($employee_id)->update([
                'name' => $request->name ,
                'email' => $request->email ,
                'phone' => $request->phone ,
                'address' => $request->address ,
                'salary' => $request->salary ,
                'experience' => $request->experience ,
                'dept' => $request->dept ,
                'vacation' => $request->vacation ,
                'image' => $save_url ,
                'created_at' => Carbon::now() 

            ] 
        
        );

            $notification = array(
                'message' =>'Employee details updated successfully',
                'alert-type' => 'success'
            );

            return redirect()->route('all.employee')->with($notification);
        }

        else {
                Employee::findOrFail($employee_id)->update([
                    'name' => $request->name ,
                    'email' => $request->email ,
                    'phone' => $request->phone ,
                    'address' => $request->address ,
                    'salary' => $request->salary ,
                    'experience' => $request->experience ,
                    'dept' => $request->dept ,
                    'vacation' => $request->vacation ,
                    'created_at' => Carbon::now() 

                ] 
            
            );

                $notification = array(
                    'message' =>'Employee details updated successfully',
                    'alert-type' => 'success'
                );

                return redirect()->route('all.employee')->with($notification);
            }
    }


    public function DeleteEmployee($id){

        $employee_img = Employee::findOrFail($id);
        $img = $employee_img->image ;
        unlink($img);

        Employee::findOrFail($id)->delete();
        $notification = array(
            'message' =>'Employee record deleted successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}



