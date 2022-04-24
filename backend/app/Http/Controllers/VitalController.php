<?php

namespace App\Http\Controllers;

use App\Models\Vital;
use Illuminate\Http\Request;

class VitalController extends Controller
{
    /**
     * バイタル画面
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('vital.index');
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
     * @param  \App\Models\Vital  $vital
     * @return \Illuminate\Http\Response
     */
    public function show(Vital $vital)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vital  $vital
     * @return \Illuminate\Http\Response
     */
    public function edit(Vital $vital)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vital  $vital
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vital $vital)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vital  $vital
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vital $vital)
    {
        //
    }
}
