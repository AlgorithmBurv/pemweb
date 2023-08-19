<?php

namespace App\Http\Controllers;

use App\Models\RentLog;
use Illuminate\Http\Request;

class RentLogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rentlogs = RentLog::with(['user', 'book'])->get();
        return view('rentlog', ['rentlogs' => $rentlogs]);
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
     * @param  \App\Models\RentLog  $rentLog
     * @return \Illuminate\Http\Response
     */
    public function show(RentLog $rentLog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RentLog  $rentLog
     * @return \Illuminate\Http\Response
     */
    public function edit(RentLog $rentLog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RentLog  $rentLog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RentLog $rentLog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RentLog  $rentLog
     * @return \Illuminate\Http\Response
     */
    public function destroy(RentLog $rentLog)
    {
        //
    }
}
