<?php

namespace App\Http\Controllers;

use App\Models\Recipient;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RecipientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(\Auth::user()->type=='admin')
        {
            return  view('recicpient.add');
        }
        else{
            return redirect('login')->with('failed','You must Login first');
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
        $recipient = Recipient::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'address' => $request->address,
            'phone' => $request->phone,
            'group' => $request->group,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        $recipient->save();
        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'address' => $request->address,
            'phone' => $request->phone,
            'group' => $request->group,
            'email' => $request->email,
            'type' =>'recipient',
            'password' => Hash::make($request->password),
        ]);
        return redirect()->back()->with('Success','Recipient Added to Database!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Recipient  $recipient
     * @return \Illuminate\Http\Response
     */
    public function show(Recipient $recipient)
    {
        $recipients = Recipient::all();
        dd('OK');
        if(\Auth::user())
        {
            dd('working');
        }
        else{
            return redirect('login')->with('failed','You Must Login First');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Recipient  $recipient
     * @return \Illuminate\Http\Response
     */
    public function edit(Recipient $recipient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Recipient  $recipient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recipient $recipient)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Recipient  $recipient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recipient $recipient)
    {
        //
    }
}
