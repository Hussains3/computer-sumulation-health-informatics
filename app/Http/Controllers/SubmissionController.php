<?php

namespace App\Http\Controllers;

use App\Models\Submission;
use App\Http\Requests\StoreSubmissionRequest;
use App\Http\Requests\UpdateSubmissionRequest;
use App\Models\Reviwer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubmissionController extends Controller
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
     * Submission step one, article type and unique id
    */
    public function submissionOne(Request $request)
    {
        $submission = new Submission();
        $submission->submission_id = "CSHISUB".Auth::id().date('ymds');
        $submission->type_id = $request->articleType;
        $submission->user_id = Auth::id();
        $submission->save();
        return view('submissiontwo',compact('submission'));
    }
    /**
     * Submission step two, required files
    */
    public function submissionTwo (Request $request)
    {

        // return $request;

        $submission = Submission::where('submission_id',$request->this_submission)->first();
        // Saving cover letter
        if ($request->hasFile('cover_letter')) {
            $profilepic = $request->file('cover_letter');
            $photoName = $submission->submission_id."_cl_".time().$profilepic->getClientOriginalName();
            $path = public_path('files/submissions/coverleter/');
            $image_url = 'files/submissions/coverleter/'.$photoName;
            $success = $profilepic->move($path, $photoName);
            $submission->cover_letter = $image_url;
        }

        // Saving Manscript file
        if ($request->hasFile('ms_file')) {
            $profilepic = $request->file('ms_file');
            $photoName = $submission->submission_id."_mf_".time().$profilepic->getClientOriginalName();
            $path = public_path('files/submissions/menuscript/');
            $image_url = 'files/submissions/menuscript/'.$photoName;
            $success = $profilepic->move($path, $photoName);
            $submission->ms_file = $image_url;
        }

        // Saving Aknowledgement
        if ($request->hasFile('acknowledgement')) {
            $profilepic = $request->file('acknowledgement');
            $photoName = $submission->submission_id."_akmnt_".time().$profilepic->getClientOriginalName();
            $path = public_path('files/submissions/acknowledgement/');
            $image_url = 'files/submissions/acknowledgement/'.$photoName;
            $success = $profilepic->move($path, $photoName);
            $submission->akmnt = $image_url;
        }

        // Saving Conflict of interest
        if ($request->hasFile('conflict_of_interest')) {
            $profilepic = $request->file('conflict_of_interest');
            $photoName = $submission->submission_id."_coi_".time().$profilepic->getClientOriginalName();
            $path = public_path('files/submissions/coi/');
            $image_url = 'files/submissions/coi/'.$photoName;
            $success = $profilepic->move($path, $photoName);
            $submission->coi = $image_url;
        }
        $submission->save();

        $reviwers = Reviwer::all();
        return view('submissionthree',compact('submission','reviwers'));
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
     * @param  \App\Http\Requests\StoreSubmissionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSubmissionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Submission  $submission
     * @return \Illuminate\Http\Response
     */
    public function show(Submission $submission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Submission  $submission
     * @return \Illuminate\Http\Response
     */
    public function edit(Submission $submission)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSubmissionRequest  $request
     * @param  \App\Models\Submission  $submission
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSubmissionRequest $request, Submission $submission)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Submission  $submission
     * @return \Illuminate\Http\Response
     */
    public function destroy(Submission $submission)
    {
        //
    }
}
