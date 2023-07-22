<?php

namespace App\Http\Controllers;

use App\Models\Landing;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('landing.index', [
            'title' => 'Home'
        ]);
    }

    public function details($slug)
    {
        return view('landing.details', compact('slug'), [
            'title' => $slug . ' Details'
        ]);
    }

    public function categories()
    {
        //
    }

    public function testimonials()
    {
        return view('landing.testimonials', [
            'title' => 'Testimonials'
        ]);
    }

    public function wishlist()
    {
        return view('landing.wishlist', [
            'title' => 'Wishlist'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Landing $landing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Landing $landing)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Landing $landing)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Landing $landing)
    {
        //
    }
}
