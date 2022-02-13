<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;
use Alert;

class ColgateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {    
        $request->validate([
            'name' => 'required',
            'email'=> 'required|email',
            'tel'=> 'required',
            'university'=>'required',
            'faculty'=> 'required',
            'class'=> 'required',
            'kvkk'=> 'required'
        ],[
             'name.required'    => 'Bu alan boş bırakılamaz',
            'email.required'    => 'Bu alan boş bırakılamaz',
              'tel.required'    => 'Bu alan boş bırakılamaz',
       'university.required'    => 'Bu alan boş bırakılamaz',
          'faculty.required'    => 'Bu alan boş bırakılamaz',
            'class.required'    => 'Bu alan boş bırakılamaz',
             'kvkk.required'    => 'Bu alan boş bırakılamaz'
        ]);

        $user = new users;
        $user->name=$request->name;
        $user->email=$request->email;
        $user->tel=$request->tel;
        $user->university=$request->university;
        $user->faculty=$request->faculty;
        $user->class=$request->class;
        $user->kvkk=$request->kvkk;
        Alert::success('Good Job');
        $user->save();
        return redirect()->back();
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
    public function update(Request $request, $id)
    {
        //
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
}
