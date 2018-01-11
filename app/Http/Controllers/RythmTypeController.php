<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\RhythmType;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class RythmTypeController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $rythmtype = RhythmType::all();

        return view('backEnd.rythmtype.index', compact('rythmtype'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.rythmtype.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        RhythmType::create($request->all());

        Session::flash('message', 'RythmType added!');
        Session::flash('status', 'success');

        return redirect('rythmtype');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function show($id)
    {
        $rythmtype = RhythmType::findOrFail($id);

        return view('backEnd.rythmtype.show', compact('rythmtype'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $rythmtype = RhythmType::findOrFail($id);

        return view('backEnd.rythmtype.edit', compact('rythmtype'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function update($id, Request $request)
    {
        
        $rythmtype = RhythmType::findOrFail($id);
        $rythmtype->update($request->all());

        Session::flash('message', 'RythmType updated!');
        Session::flash('status', 'success');

        return redirect('rythmtype');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $rythmtype = RhythmType::findOrFail($id);

        $rythmtype->delete();

        Session::flash('message', 'RythmType deleted!');
        Session::flash('status', 'success');

        return redirect('rythmtype');
    }

}
