<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;
use PDF;
use App\Prescription;
class PatientlistController extends Controller
{
    public function index(Request $request)
    {
    	if($request->date){
    		$bookings = Booking::latest()->where('date',$request->date)->get();
    		return view('admin.patientlist.index',compact('bookings'));
    	}
    	$bookings = Booking::latest()->where('date',date('d-m-Y'))->get();
    	return view('admin.patientlist.index',compact('bookings'));
    }

    public function toggleStatus($id)
    {
        $booking  = Booking::find($id);
        $booking->status =! $booking->status;
        $booking->save();
        return redirect()->back();

    }

    public function allTimeAppointment()
    {
        $bookings = Booking::latest()->get();
        return view('admin.patientlist.all',compact('bookings'));
    }

    public function showBooking()
    {
        $bookings =  Booking::where('date',date('d-m-Y'))->where('doctor_id',auth()->user()->id)->get();
		return view('admin.patient.index',compact('bookings'));
    }

    public function showAllBooking()
    {
        $bookings =  Booking::where('doctor_id',auth()->user()->id)->get();
		return view('admin.patient.all',compact('bookings'));
    }

    public function generatePDF($userId, $date)
    {
        $data = Prescription::where('user_id',$userId)->where('date',$date)->first();
        $pdf = PDF::loadView('myPDF', compact('data'));
  
        return $pdf->download('chuandoan.pdf');
    }

}
