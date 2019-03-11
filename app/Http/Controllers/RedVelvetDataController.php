<?php

namespace App\Http\Controllers;

use App\RedVelvetData;
use Illuminate\Http\Request;

class RedVelvetDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function JoyDataAchiv(){

       $data = \DB::table('joy_achievement')->get();
       $result = json_decode($data, true);

        return view("Joy.achievements", compact('result'));
    }



    public function RedVelvetTV(){
        $data = \DB::table('tv_appearances')->get();
        $result = json_decode($data, true);

        return view("RedVelvet.tv_appearances", compact('result'));
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
     * @param  \App\RedVelvetData  $redVelvetData
     * @return \Illuminate\Http\Response
     */
    public function show(RedVelvetData $redVelvetData)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RedVelvetData  $redVelvetData
     * @return \Illuminate\Http\Response
     */
    public function edit(RedVelvetData $redVelvetData)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RedVelvetData  $redVelvetData
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RedVelvetData $redVelvetData)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RedVelvetData  $redVelvetData
     * @return \Illuminate\Http\Response
     */
    public function destroy(RedVelvetData $redVelvetData)
    {
        //
    }
}
