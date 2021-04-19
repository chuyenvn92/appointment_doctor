<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;
use App\Prescription;
class PrescriptionController extends Controller
{
    public function index()
    {

    	date_default_timezone_set('Asia/Ho_Chi_Minh');
		$bookings =  Booking::where('date',date('Y-m-d'))->where('status',1)->where('doctor_id',auth()->user()->id)->get();
		return view('admin.prescription.index',compact('bookings'));
    }
   

    public function store(Request $request)
    {
    	$data  = $request->all();
    	$data['medicine'] = implode(',',$request->medicine);
    	Prescription::create($data);
    	return redirect()->back()->with('message','Đơn thuốc đã được tạo thành công');
    }

    public function show($userId,$date)
    {
        $prescription = Prescription::where('user_id',$userId)->where('date',$date)->first();
        return view('admin.prescription.show',compact('prescription'));
    }

    //get all patients from prescription table
    public function patientsFromPrescription()
    {
        $patients = Prescription::get();
        return view('admin.prescription.all',compact('patients'));
    }



}
