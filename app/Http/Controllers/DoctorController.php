<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;
class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
        // $users  = User::where('role_id','!=',3)->get();
        $users = DB::table('users')
        ->join('departments', 'users.department_id', 'departments.id')
        ->join('roles', 'users.role_id', 'roles.id')
        ->select('users.*', 'roles.name_role','departments.name_department')
        ->get();
        return view('admin.doctor.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.doctor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validateStore($request);
        $data = $request->all();
        $name = (new User)->userAvatar($request);
        $data['gender'] = $request->gender;
        $data['image'] = $name;
        $data['password'] = bcrypt($request->password);
        User::create($data);

        return redirect()->back()->with('message','Thêm người dùng thành công');


        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('admin.doctor.delete',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.doctor.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validateUpdate($request,$id);
        $data = $request->all();
        $user = User::find($id);
        $imageName = $user->image;
        $userPassword = $user->password;
        if($request->hasFile('image')){
            $imageName =(new User)->userAvatar($request);
            unlink(public_path('images/'.$user->image));
        }
        $data['image'] = $imageName;
        if($request->password){
            $data['password'] = bcrypt($request->password);
        }else{
            $data['password'] = $userPassword;
        }
         $user->update($data);
        return redirect()->back()->with('message','Cập nhật thông tin thành công');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       if(auth()->user()->id == $id){
            abort(401);
       }
       $user = User::find($id);
       $userDelete = $user->delete();
       if($userDelete){
        unlink(public_path('images/'.$user->image));
       }
        return redirect()->route('doctor.index')->with('message','Xoá thành công');

    }

    public function validateStore($request){
        return  $this->validate($request,[
            'name'=>'required',
            'email'=>'required|unique:users',
            'password'=>'required|min:6|max:25',
            'gender'=>'required',
            'education'=>'required',
            'address'=>'required',
            'department_id'=>'required',
            'phone_number'=>'required|numeric',
            'image'=>'required|mimes:jpeg,jpg,png',
            'role_id'=>'required',
            'description'=>'required'

        ],
        [
            'name.required' => 'Họ tên không được để trống.',
            'name.string' => 'Họ tên phải là chữ cái.',
            'gender.required' => 'Giới tinh không được để trống',
            'number_phone.required' => 'Số điện thoại không được để trống',
            'email.required' => 'Địa chỉ email không được để trống.',
            'education.required' => 'Học vấn không được để trống.',
            'address.required' => 'Địa chỉ không được để trống.',
            'department.required' => 'Chuyên khoa không được để trống.',
            'phone_number.required' => 'Số điện thoại không được để trống.',
            'image.required' => 'Ảnh không được để trống.',
            'role_id.required' => 'Vai trò không được để trống.',
            'description.required' => 'Mô tả không được để trống.',
            'email.string' => 'Địa chỉ email phải là ký tự.',
            'email.email' => 'Email không đúng định dạng.',
            'email.max' => 'Địa chỉ email không được quá 255 ký tự.',
            'password.required' => 'Mật khẩu không được để trống.',
            'password.min' => 'Mật khẩu ít nhất phải 6 kí tự.',
            'password.confirmed' => 'Mật khẩu nhập lại không khớp.'
        ]
    );
    }
    public function validateUpdate($request,$id){
        return  $this->validate($request,[
            'name'=>'required',
            'email'=>'required|unique:users,email,'.$id,
          
            'gender'=>'required',
            'education'=>'required',
            'address'=>'required',
            'department_id'=>'required',
            'phone_number'=>'required|numeric',
            'image'=>'mimes:jpeg,jpg,png',
            'role_id'=>'required',
            'description'=>'required'

       ]);
    }
   


 
}
