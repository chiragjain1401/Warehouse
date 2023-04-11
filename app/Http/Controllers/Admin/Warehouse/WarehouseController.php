<?php

namespace App\Http\Controllers\Admin\Warehouse;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Warehouse;


class WarehouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // if(request()->ajax()){

        //     $foods=Food::select('id', 'name', 'quantity', 'fat','carbs','protein','calories','status')
        //                 ->orderBy('id', 'asc')
        //                 ->get();
        //     return datatables()->of($foods)->addColumn('action',function($data){
        //     return '<div class="actions">
        //         <a class="text-black" href="'.route('admin.food.edit',$data->id).'">
        //             <i class="feather-edit-3 me-1"></i> Edit
        //         </a>
        //         <a class="text-danger delete-speciality pointer-link" onclick="pack_del('.$data->id.')" data-id="'.$data->id.'">
        //        <i class="feather-trash-2 me-1"></i> Delete
        //        </a>
        //     </div>';
        //  })->make(true);


        // }
        // $count= Warehouse::count();
        return view ('admin.warehouse.index');

    }


    public function create(Request $request)
    {
    return view('admin.warehouse.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $food=new Food();
        $food->name=$request->name;
        $food->quantity=$request->quantity??'0.0';
        $food->fat=$request->fat??'0.0';
        $food->carbs=$request->carbs??'0.0';
        $food->protein=$request->protein??'0.0';
        $food->calories=$request->calories??'0.0';
        // $food->quantity=$request->quantity;
        $food->status=$request->status;
        $food->save();
        if (!$food) {
            return redirect()->back()->with('Something Went Wrong');
        }

        return redirect()->route('admin.food.index')->with('success','Saved Successfully');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $food = Food::find($id);

        return view('admin.food.edit',compact('food'));
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
        $food =Food::find($id);
        $food->name=$request->name;
        $food->quantity=$request->quantity??'0.0';
        $food->fat=$request->fat??'0.0';
        $food->carbs=$request->carbs??'0.0';
        $food->protein=$request->protein??'0.0';
        $food->calories=$request->calories;
        $food->status=$request->status;
        $food->save();
        if (!$food) {
            return redirect()->back()->with('Something Went Wrong');
        }

        return redirect()->route('admin.food.index')->with('success','Updated Successfully');

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
