<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Appointment;
use App\Time;
use App\User;
use App\Booking;
use App\Department;
use DB;
use App\Guest;
use App\Prescription;
use App\Mail\AppointmentMail;
class FrontendController extends Controller
{
    
    public function index()
    {
    	date_default_timezone_set('Asia/Ho_Chi_Minh');
        if(request('date')){
            $doctors = $this->findDoctorsBasedOnDate(request('date'));
            return view('welcome',compact('doctors'));
        }
        $doctors = Appointment::where('date',date('Y-m-d'))->get();
    	return view('welcome',compact('doctors'));
    }

    public function listAppointment(){
        return view('list-appointment');
    }

    public function show($doctorId,$date)
    {
        $appointment = Appointment::where('user_id',$doctorId)->where('date',$date)->first();
        $times = Time::where('appointment_id',$appointment->id)->where('status',0)->get();
        $user = User::where('id',$doctorId)->first();
        $doctor_id = $doctorId;

        return view('appointment',compact('times','date','user','doctor_id'));
    }

    public function findDoctorsBasedOnDate($date)
    {
        $doctors = Appointment::where('date',$date)->get();
        return $doctors;

    }

    public function store(Request $request)
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $request->validate(['time'=>'required']);
        $check=$this->checkBookingTimeInterval();
        if($check){
            $notification = array(
                'messege' => 'Bạn đã đăng kí khám rồi. Vui lòng quay lại sau!!!',
                'alert-type' => 'error'
              );
            return redirect()->back()->with($notification);
        }
   
        
        Booking::create([
            'user_id'=> auth()->user()->id,
            'doctor_id'=> $request->doctorId,
            'time'=> $request->time,
            'date'=> $request->date,
            'status'=>0
        ]);

        Time::where('appointment_id',$request->appointmentId)
            ->where('time',$request->time)
            ->update(['status'=>1]);
        //send email notification
        $doctorName = User::where('id',$request->doctorId)->first();
        $mailData = [
            'name'=>auth()->user()->name,
            'time'=>$request->time,
            'date'=>$request->date,
            'doctorName' => $doctorName->name

        ];
        try{
           \Mail::to(auth()->user()->email)->send(new AppointmentMail($mailData));

        }catch(\Exception $e){

        }
        $notification = array(
            'messege' => 'Đặt lịch hẹn khám thành công. Vui lòng kiểm tra email.',
            'alert-type' => 'success'
          );
        return Redirect()->back()->with($notification);
    }

    
    public function storeGuest(Request $request)
    {
        Guest::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'date'=> $request->date,
            'specialist'=> $request->specialist,
            'phone'=> $request->phone,
            'message'=> $request->message
        ]);
        $notification = array(
            'messege' => 'Chúng tôi đã ghi nhận thông tin và sẽ sớm liên hệ với bạn!!!',
            'alert-type' => 'info'
            );
        return Redirect()->back()->with($notification);
    }

    public function checkBookingTimeInterval()
    {
        return Booking::orderby('id','desc')
            ->where('user_id',auth()->user()->id)
            ->whereDate('created_at',date('Y-m-d'))
            ->exists();
    }

    public function myBookings()
    {
        $appointments = Booking::latest()->where('user_id',auth()->user()->id)->get();
        return view('booking.index',compact('appointments'));
    }

    public function myPrescription()
    {
        $prescriptions = Prescription::where('user_id',auth()->user()->id)->get();
        return view('my-prescription',compact('prescriptions'));
    }

    public function doctorToday(Request $request)
    {
        $doctors = Appointment::with('doctor')
        ->where('date',date('d-m-Y'))
        ->get();
        return $doctors;
    }

    public function findDoctors(Request $request)
    {
        $doctors = Appointment::with('doctor')->where('date',$request->date)->get();
        return $doctors;
    }

    public function DoctorView($id)
    {
        $doctor = User::where('id',$id)->first();
        return view('doctor-detail', compact('doctor'));
    }

    public function DepartmentShow()
    {
        $departments = Department::get();
        return view('department', compact('departments'));
    }

    public function DoctorShow()
    {
        $doctors = User::where('role_id', 1)->get();
        return view('doctor', compact('doctors'));
    }

}
