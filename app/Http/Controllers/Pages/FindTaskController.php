<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Task;
use Illuminate\Http\Request;

class FindTaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index($categoryId,$subcategoryName)

    {

        $subcategory=explode('_',$subcategoryName);
        $get_category_id=Subcategory::where('subcategory_name',$subcategory[0])->first();


        if($get_category_id->category_id=$categoryId){

            $query=Task::latest();
            $query->whereIn('subcategory_name', $subcategory);


            $task=$query->paginate(2)->withQueryString();
            return response()->json(['message'=>$task]);


        }

    }
    public function allTasks(){
        $query=Task::latest();
        $query->where('status',false);
        $all_task=$query->paginate(5)->withQueryString();
        return response()->json(['message'=>$all_task]);

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
        //
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
        //
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