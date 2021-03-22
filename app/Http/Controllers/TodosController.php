<?php

namespace App\Http\Controllers;

use App\todos;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('createtodos');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $create=new todos();
        $create->todoname=$request->todoname;
        $create->description=$request->description;
        $create->save();

        return redirect('/alltodos');
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
     * @param  \App\todos  $todos
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $alltodos=todos::all();
        return view('alltodos', compact('alltodos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\todos  $todos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $todo=todos::find($id);
        return view('edit',compact('todo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\todos  $todos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    { 
        $update=todos::find($id);
        $update->todoname=$request->todoname;
        $update->description=$request->description;
        $update->update();
        return redirect('/alltodos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\todos  $todos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy=todos::find($id);
        $destroy->delete();
        return redirect('/alltodos');
    }
}
