<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;
use PDF;
use DB;
use App\User;
use App\Prescription;
use App\Mail\ConfirmMail;
use App\Mail\CancelMail;
use App\Mail\SuccessMail;
class PatientlistController extends Controller
{
    public function pending(Request $request)
    {
    	if($request->date){
    		$bookings = Booking::latest()->where('date',$request->date)->get();
    		return view('admin.patientlist.index',compact('bookings'));
    	}
    	$bookings = Booking::latest()->where('status', 0)->get();
    	return view('admin.patientlist.index',compact('bookings'));
    }

    public function confirmed(Request $request)
    {
    	if($request->date){
    		$bookings = Booking::latest()->where('date',$request->date)->get();
    		return view('admin.patientlist.index',compact('bookings'));
    	}
    	$bookings = Booking::latest()->where('status', 1)->get();
    	return view('admin.patientlist.index',compact('bookings'));
    }

    public function doneBooking(Request $request)
    {
    	if($request->date){
    		$bookings = Booking::latest()->where('date',$request->date)->get();
    		return view('admin.patientlist.index',compact('bookings'));
    	}
    	$bookings = Booking::latest()->where('status', 3)->get();
    	return view('admin.patientlist.index',compact('bookings'));
    }

    public function cancelBooking(Request $request)
    {
    	if($request->date){
    		$bookings = Booking::latest()->where('date',$request->date)->get();
    		return view('admin.patientlist.index',compact('bookings'));
    	}
    	$bookings = Booking::latest()->where('status', 1)->get();
    	return view('admin.patientlist.index',compact('bookings'));
    }

    public function allTimeAppointment()
    {
        $bookings = Booking::latest()->get();
        return view('admin.patientlist.all',compact('bookings'));
    }

    // Quản trị lịch khám cho bác sĩ
    public function showPendingTodayBooking()
    {
        $bookings =  Booking::where('date',date('Y-m-d'))
                            ->where('doctor_id',auth()->user()->id)
                            ->where('status', 0)
                            ->get();
		return view('admin.patient.pendingtoday',compact('bookings'));
    }

    public function showPendingAllBooking()
    {
        $bookings =  Booking::where('doctor_id',auth()->user()->id)
                            ->where('status', 0)
                            ->orderBy('id', 'DESC')
                            ->get();
		return view('admin.patient.pendingall',compact('bookings'));
    }

    public function showConfirmedAllBooking()
    {
        $bookings =  Booking::where('doctor_id',auth()->user()->id)
                            ->where('status', 1)
                            ->orderBy('id', 'DESC')
                            ->get();
		return view('admin.patient.confirmed',compact('bookings'));
    }

    public function showCancelAllBooking()
    {
        $bookings =  Booking::where('doctor_id',auth()->user()->id)
                            ->where('status', 3)
                            ->orderBy('id', 'DESC')
                            ->get();
		return view('admin.patient.cancel',compact('bookings'));
    }

    public function acceptBooking(Request $request)
    {
        DB::table('bookings')->where('id', $request->id)->update(['status' => 1]);

        $mailData = [
            'name'=>$request->user_name,
            'time'=>$request->time,
            'date'=>$request->date,
            'doctorName' => $request->doctor_name

        ];
        try{
           \Mail::to($request->user_email)->send(new ConfirmMail($mailData));

        }catch(\Exception $e){

        }
        
        return redirect()->back()->with('message','Xác nhận thành công');
    }

    public function ignoreBooking(Request $request)
    {
        DB::table('bookings')->where('id', $request->id)->update(['status' => 3]);
        
        $mailData = [
            'name'=>$request->user_name,
            'time'=>$request->time,
            'date'=>$request->date,
            'doctorName' => $request->doctor_name

        ];
        try{
           \Mail::to($request->user_email)->send(new CancelMail($mailData));

        }catch(\Exception $e){

        }

        return redirect()->back()->with('message','Huỷ lịch đặt thành công');
    }

    public function successBooking($id)
    {
        DB::table('bookings')->where('id', $id)->update(['status' => 2]);
        
        return redirect()->back()->with('message','Xác nhận thành công');
    }

    public function showAllBooking()
    {
        $count =  Booking::where('doctor_id',auth()->user()->id)->get();
        $bookings =  Booking::where('doctor_id',auth()
                            ->user()->id)
                            ->orderBy('id', 'DESC')
                            ->paginate(5);
		return view('admin.patient.all',compact('bookings', 'count'));
    }

    public function generatePDF($userId, $date)
    {
        $data = Prescription::where('user_id',$userId)->where('date',$date)->first();
        $pdf = PDF::loadView('myPDF', compact('data'));
        return view('myPDF', compact('data'));
        // return $pdf->download('chuandoan.pdf');
    }

    public function sendPrescription(Request $request)
    {
        $prescripttions = Prescription::where('doctor_id', $request->doctor_id)
                                        ->where('user_id', $request->user_id)
                                        ->where('date', $request->date)
                                        ->first();
        $mailData = [
            'name'=>$request->user_name,
            'time'=>$request->time,
            'date'=>$request->date,
            'doctorName' => $request->doctor_name,
            'name_of_disease' => $prescripttions->name_of_disease,
            'symptoms' => $prescripttions->symptoms
        ];
        try{
           \Mail::to($request->user_email)->send(new SuccessMail($mailData));

        }catch(\Exception $e){

        }
        
        return redirect()->back()->with('message','Gửi chi tiết lịch khám thành công');
    }

}
