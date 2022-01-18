<?php

namespace App\Http\Controllers;

use App\Models\Donor;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DonorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(\Auth::user()->type == 'admin')
        {
            return view('add-new-donor');
        }
        else{
            return redirect('login')->with('failed','You must Login First');
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

        $donor = Donor::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'address' => $request->address,
            'phone' => $request->phone,
            'group' => $request->group,
            'email' => $request->email,
            'password' => Hash::make($request->password),


        ]);
        $donor->save();
        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'address' => $request->address,
            'phone' => $request->phone,
            'group' => $request->group,
            'email' => $request->email,
            'type' =>'donor',
            'password' => Hash::make($request->password),
        ]);


        return redirect()->back()->with('Success','Donor Added Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Donor  $donor
     * @return \Illuminate\Http\Response
     */
    public function show(Donor $donor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Donor  $donor
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $donor = Donor::where('id',$id)->get();
       return view('edit-donor')->with('donor',$donor);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Donor  $donor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $donor = Donor::find($id);
        $donor->first_name = $request->input('first_name');
        $donor->last_name = $request->input('last_name');
        $donor->address = $request->input('address');
        $donor->phone = $request->input('phone');
        $donor->email = $request->input('email');
        $donor->group = $request->input('group');

        $donor->update();
        return redirect()->route('allDonors')->with('Success','Information Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Donor  $donor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $donor = Donor::find($id)->delete();
        return redirect()->back()->with('failed','Donor Removed Successfully!');

    }
    public function allDonors()
    {
        if(\Auth::user()->type == 'admin')
        {
            $donors = Donor::all();
            return view('all-donors')->with('donors',$donors);
        }
        else{
            return redirect('login')->with('failed','You must Login First');
        }

    }
}
