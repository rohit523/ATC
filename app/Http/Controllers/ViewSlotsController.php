<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slot;
use App\Http\Controllers\Input;
use DB;

class ViewSlotsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

    
        // return $request->input('airportname');

        $slots = DB::select('Select * from slots where Date = ? and Airport = ?',[$request->input('date'),$request->input('airportname')]);

       // $slots = Slot::where([
       //    'Airport' => 'SEA'
            
        // ])->get();
        //  return $slots;

        // $slots = Slot::select()->where('date',$request->input('date'));

        // $slots = Input::get('airportname');

        // return $slots;
        //$slots=Slot::all();
        return view('pages.allocation')->with('slots',$slots);
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
        // $post = new slot;
        // $post->Date = $request->input('date');
        // $post->AirportName = $request->input('airportname');
        // $posts = DB::select('Select * from slots where Date = $post->Date and AirportName = $post->AirportName');
        // return $posts;
        $this->validate($request,[
            'airport' => 'required',
            'flight' => 'required',
            'source' => 'required',
            'destination' => 'required',
            'date' => 'required',
        ]);

        //create post
        $slot = new slot;
        $slot->Airport = $request->input('airport');
        $slot->Flightnumber = $request->input('flight');
        $slot->Source = $request->input('source');
        $slot->Destination = $request->input('destination');
        $slot->Date = $request->input('date');
        $slot->save();

        return redirect('/addflight')->with('status','Flight Has Been Added Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // $id = $request->id;
        // $slots = Slot::find($id);
        // // $data=Rak::find($id);
        // $slots->Date = $request->input('date');
        // $slots->Source = $request->input('source');
        // $slots->Flightnumber = $request->input('flightnumber');
        // $slots->ArrivalTime = $request->input('arrivaltime');
        // $slots->DepartureTime = $request->input('departuretime');
        // $slots->Destination = $request->input('destination');
        // $slots->update();

        $check = $request->input('arrivaltime');
        $check2 = $request->input('departuretime');

        // DB::update('update slots set ArrivalTime = ? , DepartureTime = ? where Date = ? and Source = ? and Flightnumber = ? and Destination = ?', [$request->input('arrivaltime') , $request->input('departuretime') , $request->input('date'), $request->input('source'), $request->input('flightnumber'), $request->input('destination')]);

        if(!is_null($check) && is_null($check2))
        {
            // DB::update('update slots set DepartureTime = ? where Date = ? and Source = ? and Flightnumber = ? and Destination = ?', [$request->input('departuretime') , $request->input('date'), $request->input('source'), $request->input('flightnumber'), $request->input('destination')]);
            DB::update('update slots set ArrivalTime = ? where Date = ? and Source = ? and Flightnumber = ? and Destination = ?', [$request->input('arrivaltime') , $request->input('date'), $request->input('source'), $request->input('flightnumber'), $request->input('destination')]);
        }
        elseif(!is_null($check2) && is_null($check))
        {
            // DB::update('update slots set ArrivalTime = ? where Date = ? and Source = ? and Flightnumber = ? and Destination = ?', [$request->input('arrivaltime') , $request->input('date'), $request->input('source'), $request->input('flightnumber'), $request->input('destination')]);
            DB::update('update slots set DepartureTime = ? where Date = ? and Source = ? and Flightnumber = ? and Destination = ?', [$request->input('departuretime') , $request->input('date'), $request->input('source'), $request->input('flightnumber'), $request->input('destination')]);
        }
        else
        {
            DB::update('update slots set ArrivalTime = ? , DepartureTime = ? where Date = ? and Source = ? and Flightnumber = ? and Destination = ?', [$request->input('arrivaltime') , $request->input('departuretime') , $request->input('date'), $request->input('source'), $request->input('flightnumber'), $request->input('destination')]);
        }
        
        // $user = Slot::where('id', $id)->update(request()->all());
        
        return redirect('/addslot')->with('status','Your Data Has Been Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function viewflight(Request $request)
    {

    
        // return $request->input('airportname');

        // $slots = DB::select('Select * from slots where Date = ? and Source = ? and Destination = ?',[$request->input('date'),$request->input('src'),$request->input('dest')]);
        $slots = DB::select('Select DISTINCT Flightnumber,Source,Destination,DepartureTime,ArrivalTime,Date from slots where Date = ? and Source = ? and Destination = ?',[$request->input('date'),$request->input('src'),$request->input('dest')]);

       // $slots = Slot::where([
       //    'Airport' => 'SEA'
            
        // ])->get();
        //  return $slots;

        // $slots = Slot::select()->where('date',$request->input('date'));

        // $slots = Input::get('airportname');

        // return $slots;
        //$slots=Slot::all();
        return view('pages.viewflight')->with('slots',$slots);
    }
}
