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
        $departments = Department::paginate(5);
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
        $department = Department::find($id);
        return view('admin.department.delete',compact('department'));
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
       $departmentDelete = $department->delete();
       if($departmentDelete){
        unlink(public_path('images/'.$department->image));
       }
        return redirect()->route('department.index')->with('message','Xoá chuyên khoa thành công');
    }

    public function SearchDepartment(Request $request)
    {
        $item = $request->searchDepartment;
        $results = Department::where('name_department','LIKE' ,"%$item%")->paginate(10);
        return view('admin.department.searchdepartment', compact('results', 'item'));
    }
}
