<?php

namespace App\Http\Controllers;

use App\Holbolt;
use Illuminate\Http\Request;

class HolboltController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $holbolthiih = Holbolt::all();
        return view('holbolt.index', compact('holbolthiih'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('holbolt.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HolboltValidation $request)
    {
    //  dd($request->all());    
        Holbolt::create($request->all());
     //    massiv uusgeh
     // Holbolt::create([
     //      'ovog' => $request->get('ovog'),
     //      'ner' => $request->get('ner'),
     //      'huis' => $request->get('huis'),
     //      'kod' => $request->get('kod'),
    //       'mergejil' => $request->get('mergejil'),
    //       'elssen_on' => $request->get('elssen_on'),

    //   ]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Holbolt  $holbolt
     * @return \Illuminate\Http\Response
     */
    public function show(Holbolt $holbolt)
    {
       return view('holbolt.show', compact('holbolt'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Holbolt  $holbolt
     * @return \Illuminate\Http\Response
     */
    public function edit(Holbolt $holbolt)
    {
        return view('holbolt.edit', compact('holbolt'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Holbolt  $holbolt
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Holbolt $holbolt)
    {
        $holbolt->ovog = $request->ovog;
        $holbolt->ner = $request->ner;
        $holbolt->huis = $request->huis;
        $holbolt->kod = $request->kod;
        $holbolt->mergejil = $request->mergejil;
        $holbolt->elssen_on = $request->elssen_on;
        $holbolt->save();
        return redirect()->route('holbolt.index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Holbolt  $holbolt
     * @return \Illuminate\Http\Response
     */
    public function destroy(Holbolt $holbolt)
    {
        $holbolt->delete();
        //return redirect()->route('holbolt.index');
        return redirect()->to('/holbolthiih');
    }
}
