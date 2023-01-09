<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\ExecutorProfile;
use App\Models\ExecutorSubcategory;
use App\Models\ExecutorWorkingRegion;
use Illuminate\Http\Request;

class FindExecutorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        dd(44);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($subcategoryName)
    {

        $findExecutorId = ExecutorSubcategory::where('subcategory_name',$subcategoryName)->pluck('executor_profile_id');

        $findExecutor=ExecutorProfile::whereIn('id', $findExecutorId)->with('users')->paginate(1);
        if($findExecutor->total()==0){
            return response()->json(['message'=>"Специалисты по данным параметрам не найдены"]);
        }else{
            return response()->json(['message'=>$findExecutor]);
        }

    }
    public function filter(Request $request){
        $subcategory_array=[];
        foreach($request->executor_subcategory as $item){
            array_push($subcategory_array,$item);
        }

        // $working_region=ExecutorWorkingRegion::distinct()->where('executorwork_region',$request->region)->pluck('executor_profile_id');
        // $matched_executor = ExecutorProfile::whereIn('id',$working_region);

        //     $working_region=ExecutorWorkingRegion::distinct()->where('executorwork_region',$request->region)->pluck('executor_profile_id');
        //     $findExecutorId = ExecutorSubcategory::whereIn('subcategory_name',$subcategory_array)->pluck('executor_profile_id');
        //     $matched_executor= $matched_executor->whereIn('id',$findExecutorId)->paginate(1);

            $findExecutorId = ExecutorSubcategory::whereIn('subcategory_name',$subcategory_array)->pluck('executor_profile_id');
            $matched_executor = ExecutorProfile::whereIn('id',$findExecutorId);
            $working_region = ExecutorWorkingRegion::distinct()->where('executorwork_region',$request->region)->pluck('executor_profile_id');
            $matched_executor = $matched_executor->whereIn('id',$working_region)->paginate(1);

            return response()->json(['executor'=>$matched_executor],200);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        dd(22);
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
        dd(33);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}