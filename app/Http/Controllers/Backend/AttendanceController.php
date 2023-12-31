<?php
namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Attendance; 
use App\Models\Employee; 
use Carbon\Carbon;

class AttendanceController extends Controller
{
    public function EmployeeAttendanceList(){

        $allData = Attendance::select('date')->groupBy('date')->orderBy('id','desc')->get();
        return view('backend.attendance.view_employee_attend',compact('allData'));

    } // End Method 

    public function AddEmployeeAttendance(){
        $employees = Employee::all();
        return view('backend.attendance.add_employee_attend',compact('employees'));
    }// End Method 


  public function EmployeeAttendanceStore(Request $request){
    $selectedDate = strtotime($request->date);
    $currentDate = strtotime(date('Y-m-d'));

    // Calculate the timestamp for tomorrow
    $tomorrow = strtotime('+1 day', $currentDate);

    // Check if the selected date is exactly one day in the future (tomorrow)
    if ($selectedDate > $tomorrow) {
        $notification = array(
            'message' => 'Selected date is in future. Attendance not saved.',
            'alert-type' => 'error'
        );

        return redirect()->route('employee.attend.list')->with($notification);
    }

    // Delete existing attendance records for the selected date
    $formattedSelectedDate = date('Y-m-d', $selectedDate);
    Attendance::where('date', $formattedSelectedDate)->delete();

    $countemployee = count($request->employee_id);

    for ($i = 0; $i < $countemployee; $i++) {
        $attend_status = 'attend_status' . $i;
        $status = $request->$attend_status; // Get the attendance status from the request

        if ($status === 'present' || $status === 'Absent' || $status === 'Leave') {
            $attend = new Attendance();
            $attend->date = $formattedSelectedDate;
            $attend->employee_id = $request->employee_id[$i];
            $attend->attend_status = $status;
            $attend->save();
        }
    }

    $notification = array(
        'message' => 'Data Inserted Successfully',
        'alert-type' => 'success'
    );

    return redirect()->route('employee.attend.list')->with($notification);
}

// End Method 


    public function EditEmployeeAttendance($date){

    // Get the attendance records for the specified date
    $attendanceToDelete = Attendance::where('date', $date)->get();

    // Delete the attendance records
    foreach ($attendanceToDelete as $attendance) {
        $attendance->delete();
    }

    $notification = array(
        'message' => 'Attendance Records Deleted Successfully',
        'alert-type' => 'success'
    );

    return redirect()->route('employee.attend.list')->with($notification);
}



    public function ViewEmployeeAttendance($date){

         $details = Attendance::where('date',$date)->get();
         return view('backend.attendance.details_employee_attend',compact('details'));


    }// End Method


}
