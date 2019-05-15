<?php

namespace App\Http\Controllers;

use App\TwitterUpdates;
use Illuminate\Http\Request;




class TwitterUpdatesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $twitterUpdates = TwitterUpdates::orderBy('id', 'DESC')->limit(6)->get()->toJson();

        return \Response::json($twitterUpdates);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //   $client = new \GuzzleHttp\Client();
        $twitter_name = $request->input('twitter_name');
        $twitter_id = $request->input('twitter_id');



        $response = $client->request('GET', 'https://publish.twitter.com/oembed?url=https://twitter.com/Pitch/status/' . $twitter_id);

        $body = $response->getBody();

        $json = json_decode($body, true);


        $TwitterRecord = new TwitterUpdates;
        $TwitterRecord->name = $twitter_name;
        $TwitterRecord->html = $twitter_id;

        $TwitterRecord->save();

        return 1;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TwitterUpdates  $twitterUpdates
     * @return \Illuminate\Http\Response
     */
    public function show(TwitterUpdates $twitterUpdates)
    { }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TwitterUpdates  $twitterUpdates
     * @return \Illuminate\Http\Response
     */
    public function edit(TwitterUpdates $twitterUpdates)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TwitterUpdates  $twitterUpdates
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TwitterUpdates $twitterUpdates)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TwitterUpdates  $twitterUpdates
     * @return \Illuminate\Http\Response
     */
    public function destroy(TwitterUpdates $twitterUpdates)
    {
        //
    }
}
