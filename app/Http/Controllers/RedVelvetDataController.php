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

    public function RVDataAchiv($who){

    if($who == 'RedVelvet'){
        $data = \DB::table('achievement')->get();
        $result = json_decode($data, true);
    return view("RedVelvet.achievements", compact('result'));
} else if($who == 'Joy'){

    $data = \DB::table('achievement')->where('joy', 1)->get();
    $result = json_decode($data, true);
return view("RedVelvet.achievements", compact('result'));
} else if($who == 'Irene'){

    $data = \DB::table('achievement')->where('irene', 1)->get();
    $result = json_decode($data, true);
return view("RedVelvet.achievements", compact('result'));
}
else if($who == 'Wendy'){

    $data = \DB::table('achievement')->where('wendy', 1)->get();
    $result = json_decode($data, true);
return view("RedVelvet.achievements", compact('result'));
}
else if($who == 'Yeri'){

    $data = \DB::table('achievement')->where('yeri', 1)->get();
    $result = json_decode($data, true);
return view("RedVelvet.achievements", compact('result'));
}else if($who == 'Seulgi'){

    $data = \DB::table('achievement')->where('seulgi', 1)->get();
    $result = json_decode($data, true);
return view("RedVelvet.achievements", compact('result'));
} else {
    abort(404);
}
    }

    public function RVDataAchivnative(){

        $data = \DB::table('achievement')->get();
        $result = json_decode($data, true);
    return view("RedVelvet.achievement", compact('result'));
     }
 

     public function RedVelvetTVnative(){

        $data = \DB::table('tv_appearances')->get();
        $result = json_decode($data, true);
    return view("RedVelvet.tv_appearances", compact('result'));
     }


    public function RedVelvetTV($who){

        if($who == 'RedVelvet'){
            $data = \DB::table('tv_appearances')->get();
            $result = json_decode($data, true);
        return view("RedVelvet.tv_appearances", compact('result'));
    } else if($who == 'Joy'){

        $data = \DB::table('tv_appearances')->where('joy', 1)->get();
        $result = json_decode($data, true);
    return view("RedVelvet.tv_appearances", compact('result'));
    } else if($who == 'Irene'){

        $data = \DB::table('tv_appearances')->where('irene', 1)->get();
        $result = json_decode($data, true);
    return view("RedVelvet.tv_appearances", compact('result'));
    }
    else if($who == 'Wendy'){

        $data = \DB::table('tv_appearances')->where('wendy', 1)->get();
        $result = json_decode($data, true);
    return view("RedVelvet.tv_appearances", compact('result'));
    }
    else if($who == 'Yeri'){

        $data = \DB::table('tv_appearances')->where('yeri', 1)->get();
        $result = json_decode($data, true);
    return view("RedVelvet.tv_appearances", compact('result'));
    }else if($who == 'Seulgi'){

        $data = \DB::table('tv_appearances')->where('seulgi', 1)->get();
        $result = json_decode($data, true);
    return view("RedVelvet.tv_appearances", compact('result'));
    } else {
        abort(404);
    }

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