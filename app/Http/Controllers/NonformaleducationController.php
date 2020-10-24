<?php

namespace App\Http\Controllers;

use App\Nonformaleducation;
use Illuminate\Http\Request;

use DB;

class NonformaleducationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return datatables()->of(DB::table('non_formal_educations'))->toJson();

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
     * @param  \App\Nonformaleducation  $nonformaleducation
     * @return \Illuminate\Http\Response
     */
    public function show(Nonformaleducation $nonformaleducation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Nonformaleducation  $nonformaleducation
     * @return \Illuminate\Http\Response
     */
    public function edit(Nonformaleducation $nonformaleducation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Nonformaleducation  $nonformaleducation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nonformaleducation $nonformaleducation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Nonformaleducation  $nonformaleducation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nonformaleducation $nonformaleducation)
    {
        //
    }
}
