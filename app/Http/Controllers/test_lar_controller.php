<?php

namespace App\Http\Controllers;

use App\Models\test_lar;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class test_lar_controller extends Controller
{
    /**     
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $test_lars = DB::table('test_lars')->get();
        return view('test_lar.index', ['test_lars' => $test_lars]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('test_lar.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
        ]);
    
        Test_Lar::create($request->all());
    
        return redirect()->route('test_lar.index')
            ->with('success', 'Post created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\test_lar  $test_lar
     * @return \Illuminate\Http\Response
     */
    public function show(test_lar $test_lar)
    {
        return view('test_lar.show',compact('test_lar'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\test_lar  $test_lar
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $test_lar = Test_lar::find($id);
        return view('test_lar.edit', compact('test_lar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\test_lar  $test_lar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|max:255',
            'descripcion' => 'required',
        ]);
        $test_lar = Test_lar::find($id);
        $test_lar->update($request->all());
        return redirect()->route('test_lar.index')
                        ->with('success','Post updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\test_lar  $test_lar
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $test_lar = Test_lar::find($id);
        $test_lar-> delete();
        return redirect()->route('test_lar.index')
                        ->with('success','User deleted successfully');
    }
}
