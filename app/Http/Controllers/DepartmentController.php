<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;
class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departments = Department::get();
        return view('admin.department.index',compact('departments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.department.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name_department'=>'required',
            'image' => 'required',
            'description_department' => 'required'
        ]);
        $data = $request->all();
        $name = (new Department)->specialistImage($request);
        $data['image'] = $name;
        Department::create($data);
        return redirect()->back()->with('message','Thêm mới chuyên khoa thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $department = Department::find($id);
        return view('admin.department.edit',compact('department'));
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
        $data = $request->all();
        $department = Department::find($id);
        $imageName = $department->image;
        if($request->hasFile('image')){
            $imageName =(new Department)->specialistImage($request);
            unlink(public_path('images/'.$department->image));
        }
        $data['image'] = $imageName;
        $department->update($data);
        return redirect()->route('department.index')->with('message','Cập nhật chuyên khoa thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $department = Department::find($id);
        $department->delete();
        return redirect()->route('department.index')->with('message','Xóa chuyên khoa thành công');
    }
}
