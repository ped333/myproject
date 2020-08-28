<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

Use App\Staff;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $perPage = 10; 
        $search = $request->get('search');        
        if (!empty($search)) {
//กรณีมีข้อมูลที่ต้องการ search จะมีการใช้คำสั่ง where และ orWhere
            $staffs = staff::where('name', 'LIKE', "%$search%")
                ->orWhere('Age', 'LIKE', "%$search%")
                ->orWhere('Salary', 'LIKE', "%$search%")
                ->orWhere('Phone', 'LIKE', "%$search%")
                ->orderBy('id', 'desc')->paginate($perPage);
        } else {
//กรณีไม่มีข้อมูล search จะทำงานเหมือนเดิม
            $staffs = staff::paginate($perPage);
        }        

        return view('staff/index' , compact('staffs') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('staff.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $requestData = $request->all();
        
        staff::create($requestData);

        return redirect('staff');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $staff = staff::findOrFail($id);

        return view('staff.show', compact('staff'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $staff = staff::findOrFail($id);

        return view('staff.edit', compact('staff'));
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
        $requestData = $request->all();        
        $staffs = staff::findOrFail($id);
        $staffs->update($requestData);
        return redirect('staff');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        staff::destroy($id);

        return redirect('staff');
    }
}
