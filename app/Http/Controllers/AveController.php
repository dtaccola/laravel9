<?php

namespace App\Http\Controllers;

use App\Models\Ave;
use Illuminate\Http\Request;

class AveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aves = Ave::get();
        return view('aves.index', compact('aves'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('aves.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $data = $request->all();

        Ave::create($data);

        return redirect()->route('aves.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ave  $ave
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ave = Ave::where('id', $id)->first();
        return view('aves.show', compact('ave'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ave  $ave
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ave = Ave::find($id);
        if(!$ave)
            return redirect()->route('aves.index');
            
        return view('aves.edit', compact('ave'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ave  $ave
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ave = Ave::find($id);
        $data = $request->all();        
        if(!$ave)
            return redirect()->route('aves.index');
        $ave->update($data);

        return redirect()->route('aves.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ave  $ave
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ave = Ave::find($id);
        if(!$ave)
            return redirect()->route('aves.index');
        $ave->delete();

        return redirect()->route('aves.index');
    }
}
