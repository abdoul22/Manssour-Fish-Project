<?php

namespace App\Http\Controllers;

use App\Models\Approvisionnemt;
use Illuminate\Http\Request;

class ApprovisionnemtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('approvisionnement.index');
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
     * @param  \App\Models\Approvisionnemt  $approvisionnemt
     * @return \Illuminate\Http\Response
     */
    public function show(Approvisionnemt $approvisionnemt)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Approvisionnemt  $approvisionnemt
     * @return \Illuminate\Http\Response
     */
    public function edit(Approvisionnemt $approvisionnemt)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Approvisionnemt  $approvisionnemt
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Approvisionnemt $approvisionnemt)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Approvisionnemt  $approvisionnemt
     * @return \Illuminate\Http\Response
     */
    public function destroy(Approvisionnemt $approvisionnemt)
    {
        //
    }
}
