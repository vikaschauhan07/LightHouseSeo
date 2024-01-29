<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use Illuminate\Http\Request;
use App\Mail\AttendanceListMail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class AttendanceController extends Controller
{
    public function addPersons(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'department' => 'required|string',
            'attendance_status' => 'required|boolean',
        ]);
        try {
            $attendance = Attendance::create([
                'name' => $request->input('name'),
                'department' => $request->input('department'),
                'attendance_status' => $request->input('attendance_status'),
            ]);

            if ($attendance) {
                session()->flash('success', 'Attendance added successfully');
            } else {
                session()->flash('error', 'Attendance not saved. Please try again.');
            }
        } catch (\Exception $e) {
            session()->flash('error', 'An error occurred while adding attendance. Please try again.');
        }

        return redirect()->back();
    }

    public function index()
    {
        $allAttendanceData = Attendance::orderBy('department')->get();
        return view('attandence', ['allAttendanceData' => $allAttendanceData]);
    }
    public function markAttandence(Request $request)
    {
        try {
            Attendance::where('id', $request->id)->update(['attendance_status' => $request->status]);
            session()->flash('success', 'Attendance status updated successfully');
            return redirect()->back();
        } catch (\Exception $e) {
            session()->flash('error', 'Failed to update attendance status');
            return redirect()->back();
        }
    }

    // public function sendAttandenceMail()
    // {
    //   $presentList =  $this->getPresentList();

    // try {
    //     Mail::to(['vikas@yopmail.com', 'vikas.chauhan@itechnolabs.tech'])
    //         ->send(new AttendanceListMail($presentList));

    //     session()->flash('success', 'Email Sent Sucessfully');
    //     return redirect()->back();
    // } catch (\Exception $e) {
    //     dd($e);
    //     session()->flash('error', 'Email  Send Failed');
    //     return redirect()->back();
    // }
    // }


    public function sendAttandenceMail()
    // public function getPresentList()
    {
        $presentData = Attendance::where('attendance_status', 1)->orderBy('department')->get(['name', 'department']);

        $presentList = $presentData;
        // $presentList = '';
        // foreach ($presentData as $entry) {
        //     $presentList .= $entry->name . ' - ' . $entry->department . '<br>';
        // }
        return view('presentList', compact('presentList'));

        // return $presentList;
    }
    public function resetAll()
    {
        try {
            DB::table('attendances')->update(['attendance_status' => 0]);
            session()->flash('success', 'Attendance status updated successfully');
        } catch (\Exception $e) {
            session()->flash('error', 'Error updating attendance status');
        }

        return redirect()->back();
    }
    public function deletePerson($id){
        try {
            $affectedRows = Attendance::where('id', $id)->delete();
            if ($affectedRows > 0) {
                session()->flash('success', 'Attendance records deleted successfully');
            } else {
                session()->flash('info', 'No attendance records found to delete');
            }
        } catch (\Exception $e) {
            session()->flash('error', 'Error deleting attendance records');
        }
        return redirect()->back();
    }
}
