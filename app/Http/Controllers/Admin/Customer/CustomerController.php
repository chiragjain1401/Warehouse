<?php

namespace App\Http\Controllers\Admin\Customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Hash;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //     if(request()->ajax()){

        //     $users=User::select('id', 'name', 'company_name', 'gstin','email','plan','address','state','city','mobile','role','password','status')
        //                 ->orderBy('id', 'asc')
        //                 ->get();
        //     return datatables()->of($users)->addColumn('action',function($data){
        //     return '<div class="actions">
        //         <a class="text-black" href="'.route('admin.customer.edit',$data->id).'">
        //             <i class="feather-edit-3 me-1"></i> Edit
        //         </a>
        //         <a class="text-danger delete-speciality pointer-link" onclick="pack_del('.$data->id.')" data-id="'.$data->id.'">
        //        <i class="feather-trash-2 me-1"></i> Delete
        //        </a>
        //     </div>';
        //  })->make(true);


        // }
         $users=User::all();
         $count= User::count();
         return view('admin.customer.index',compact('count','users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $users=new User();
        $users->name=$request->name;
        $users->company_name=$request->company_name;
        $users->gstin=$request->gstin;
        $users->email=$request->email;
        $users->plan=$request->plan;
        $users->address=$request->address;
        $users->state=$request->state;
        $users->city=$request->city;
        $users->mobile=$request->mobile;
        $users->roles=$request->roles;
        $users->password = Hash::make($request->password);
        $users->status=$request->status;
        $users->save();

        if (!$users) {
            return redirect()->back()->with('Something Went Wrong');
        }

        return redirect()->route('admin.customer.index')->with('success','Saved Successfully');
    }
     /**
     * create a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     return view('admin.customer.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::find($id);
        return view('admin.customer.edit',compact('users'));
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
        $users =User::find($id);
        $users->name=$request->name;
        $users->company_name=$request->company_name;
        $users->gstin=$request->gstin;
        $users->email=$request->email;
        $users->plan=$request->plan;
        $users->address=$request->address;
        $users->state=$request->state;
        $users->city=$request->city;
        $users->mobile=$request->mobile;
        $users->roles=$request->roles;
        $users->start_date=$request->start_date;
        $users->end_date=$request->end_date;
        // $users->password=$request->password;
        $users->status=$request->status;
        $users->save();
        if (!$users) {
            return redirect()->back()->with('Something Went Wrong');
        }

        return redirect()->route('admin.customer.index')->with('success','Saved Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users = User::findorfail($request->id);
        if ($users->status == 0) {
            User::findorfail($request->id)->delete();
           return response()->json(['status' => 0],);
       }
       return response()->json(['status' => 1],500);
    }



}
