<?php

namespace App\Http\Controllers;

use App\Models\Reviwer;
use App\Http\Requests\StoreReviwerRequest;
use App\Http\Requests\UpdateReviwerRequest;

class ReviwerController extends Controller
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
     * @param  \App\Http\Requests\StoreReviwerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreReviwerRequest $request)
    {
        $reviwer = new Reviwer();
        $reviwer->first_name = $request->first_name;
        $reviwer->last_name = $request->last_name;
        $reviwer->email = $request->email;
        $reviwer->reason = $request->reason;
        if ($request->middle_name) { $reviwer->middle_name = $request->middle_name; }
        if ($request->degree) { $reviwer->degree = $request->degree; }
        if ($request->position) { $reviwer->position = $request->position; }
        if ($request->institution) { $reviwer->institution = $request->institution; }
        if ($request->department) { $reviwer->department = $request->department; }
        $reviwer->save();

        return redirect()->route('substpethree');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reviwer  $reviwer
     * @return \Illuminate\Http\Response
     */
    public function show(Reviwer $reviwer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reviwer  $reviwer
     * @return \Illuminate\Http\Response
     */
    public function edit(Reviwer $reviwer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateReviwerRequest  $request
     * @param  \App\Models\Reviwer  $reviwer
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateReviwerRequest $request, Reviwer $reviwer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reviwer  $reviwer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reviwer $reviwer)
    {
        //
    }
}
