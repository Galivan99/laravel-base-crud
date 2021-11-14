<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;

class FumettoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fumetti = Comic::all();
        return view('fumettis.index', compact('fumetti'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fumettis.create');
       
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

        $new_fumetto = new Comic();
        // $new_fumetto->title = $data['title'];
        // $new_fumetto->description = $data['description'];
        // $new_fumetto->image = $data['image'];
        // $new_fumetto->price = $data['price'];
        // $new_fumetto->series = $data['series'];
        // $new_fumetto->sale_date = $data['sale_date'];
        // $new_fumetto->type = $data['type'];
        $new_fumetto->fill($data);
        $new_fumetto->save();

        return redirect()->route('fumettis.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $fumetti)
    {
        return view('fumettis.show', compact('fumetti'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fumetto = Comic::findOrFail($id);
        // if($dettaglio_fumetto) {
        //     return view('fumettis.edit', compact('dettaglio_fumetto'));
        // }
        // abort(404);
        return view('fumettis.edit', compact('fumetto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $fumetti)
    {
        $data = $request->all(); 
        $fumetti->update($data);
        return redirect()->route('fumettis.show', $fumetti['id']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $fumetti)
    {
        $fumetti->delete();
        return redirect()->route('fumettis.index');
    }
}
