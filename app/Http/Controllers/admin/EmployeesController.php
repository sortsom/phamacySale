<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Contracts\Foundation\Application;
//use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $employees=Employee::paginate(5);
        return view('admin.employees.index', ['employees' => $employees]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('admin.employees.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required|max:20',
            'gender'=>'required',
        ]);

       Employee::create([
           'name'=>$request->name,
           'gender'=>$request->gender,
           'dob'=>$request->dob,
           'id_card'=>$request->id_card,
           'date_in'=>$request->date_in,
           'position'=>$request->position,
           'graduate'=>$request->graduate,
           'salary'=>$request->salary,
           'address'=>$request->address,
           'phone'=>$request->phone,
           'image'=>'',
       ]);
    return  redirect()->route('admin.employees.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Application|Factory|View
     */
    public function show($id)
    {
        $employees =Employee::findOrFail($id);
        return view('admin.employees.index', ['employees' => $employees]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return Employee::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $data = [
            'name' => $request->name,
            'gender' => $request->gender,
            'date_in' => $request->date_in,
            'position'=>$request->position,
            'dob'=>$request->dob,
            'idcard'=>$request->idcard,
            'graduate'=>$request->graduate,
            'salary'=>$request->salary,
            'phone'=>$request->phone,
            'address'=>$request->address,
        ];
        if ($request->file('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('image'), $imageName);
            $data['image'] = $imageName;
        }
        $employees = Employee::findOrFail($id);
        $employees->update($data);
        return redirect()->route('admin.employees.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return RedirectResponse
     */
    public function destroy($id)
    {
        $employees=Employee::findOrFail($id);
        $employees->Delete();
        return redirect()->route('admin.employees.index')->with("Success",'You Delete successful!!');
    }
}
