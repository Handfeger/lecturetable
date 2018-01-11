<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Lecture;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class LectureController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $lecture = Lecture::all();

        return view('backEnd.lecture.index', compact('lecture'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.lecture.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        Lecture::create($request->all());

        Session::flash('message', 'Lecture added!');
        Session::flash('status', 'success');

        return redirect('lecture');
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
        $lecture = Lecture::findOrFail($id);

        return view('backEnd.lecture.show', compact('lecture'));
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
        $lecture = Lecture::findOrFail($id);

        return view('backEnd.lecture.edit', compact('lecture'));
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
        
        $lecture = Lecture::findOrFail($id);
        $lecture->update($request->all());

        Session::flash('message', 'Lecture updated!');
        Session::flash('status', 'success');

        return redirect('lecture');
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
        $lecture = Lecture::findOrFail($id);

        $lecture->delete();

        Session::flash('message', 'Lecture deleted!');
        Session::flash('status', 'success');

        return redirect('lecture');
    }

}
