<?php

namespace App\Http\Controllers\Admin\Warehouse;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Unit;
use App\Models\Warehouse;


class UnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // if(request()->ajax()){

        //     $foods=Warehouse::select('id', 'name', 'status', 'total_units','area','height','width','location')
        //                 ->orderBy('id', 'asc')
        //                 ->get();
        //     return datatables()->of($foods)->addColumn('action',function($data){
        //     return '<div class="actions">
        //         <a class="text-black" href="'.route('admin.warehouse.edit',$data->id).'">
        //             <i class="feather-edit-3 me-1"></i> Edit
        //         </a>
        //         <a class="text-danger delete-speciality pointer-link" onclick="pack_del('.$data->id.')" data-id="'.$data->id.'">
        //        <i class="feather-trash-2 me-1"></i> Delete
        //        </a>
        //     </div>';
        //  })->make(true);


        // }
        $units=Unit::all();
        $count= Unit::count();
        return view ('admin.unit.index',compact('count','units'));

    }


    // public function create(Request $request)
    // {
    // return view('admin.warehouse.create');
    // }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $units=new Unit();
        $units->name=$request->name;
        $units->location=$request->location;
        $units->area=$request->area;
        $units->height=$request->height;
        $units->width=$request->width;
        $units->warehouse_id=$request->warehouse_id;
        $units->status=$request->status;
        $units->save();
    
        if (!$units) {
            return redirect()->route('admin.unit.index');
        }
        return redirect()->route('admin.unit.index')->with('success','Saved Successfully');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $unit = Unit::find($id);

        return view('admin.unit.edit',compact('unit'));
    }

     public function create(){
    $warehouse =Warehouse::all();

    return view('admin.unit.create',compact('warehouse'));
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
        $units =Unit::find($id);
        $units->name=$request->name;
        $units->location=$request->location;
        $units->area=$request->area;
        $units->height=$request->height;
        $units->width=$request->width;
        $units->warehouse_id=$request->warehouse_id;
        $units->status=$request->status;
        $units->save();
        if (!$units) {
            return redirect()->back()->with('Something Went Wrong');
        }

        return redirect()->route('admin.unit.index')->with('success','Updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request ,$id)
    {
        $foods = Food::findorfail($request->id);
         if ($foods->status == 0) {
            Food::findorfail($request->id)->delete();
            return response()->json(['status' => 0],);
        }
        return response()->json(['status' => 1],500);
     }


     public function check_food_exists(Request $request){



        $foods = $request->input('name');
        $foods = Food::where('name', $foods)->first();

        return response()->json([
            'exists' => $foods ? true : false
        ]);

    }


}
