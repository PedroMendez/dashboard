<?php

namespace App\Http\Controllers;

use App\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfilesController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $hasNav = true;

        return view('profiles.create', compact('hasNav'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Profile $profile)
    {   

        Profile::create($this->validatesProfile($request));

        return redirect(route('profiles.show', $profile));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        $hasNav = true;

        return view('profiles.show', compact('hasNav', 'profile'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profile $profile)
    {
        $profile->update($this->validatesProfile($request));

        return redirect(route('profiles.show', $profile));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //
    }

    /**
     * Validates Request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    protected function validatesProfile(Request $request)
    {
        return $request->validate([
            'user_id' => 'required',
            'about_me' => 'required',
            'first_name' => 'required', 
            'last_name' => 'required', 
            'address' => 'required', 
            'city' => 'required', 
            'country' => 'required', 
            'zip_code' => 'required', 
            'description' => 'required'
        ]);
    }
}
