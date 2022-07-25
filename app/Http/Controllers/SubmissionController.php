<?php

namespace App\Http\Controllers;

use App\Models\Submission;
use App\Http\Requests\StoreSubmissionRequest;
use App\Http\Requests\UpdateSubmissionRequest;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Reviwer;

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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    // ------------------------------------------
    public function submissionOne(Request $request)
    {
        $validatedData = $request->validate([
            'articleType' => 'required',
        ]);

        

        if(empty($request->session()->get('article'))){
            $article = new Article();
            $article->article_type = $request->articleType;
            $request->session()->put('article', $article);
        }else{
            $article = $request->session()->get('article');
            $article->article_type = $request->articleType;
            $request->session()->put('article', $article);
        }

        return redirect()->route('substpetwo');
    }

    public function substpetwo()
    {
        return view('submissiontwo');
    }

    // Submission step two
    public function submissionTwo(Request $request)
    {
        $validatedData = $request->validate([
            'cover_letter' => 'required|mimes:docx,doc,txt',
            'ms_file' => 'required|mimes:docx,doc,txt',
            'acknowledgement' => 'required|mimes:docx,doc,txt',
            'conflict_of_interest' => 'required|mimes:docx,doc,txt',
        ]);

        $article = $request->session()->get('article');

        // Uploading cover letter
        if ($request->hasFile('cover_letter')) {
            $file = $request->file('cover_letter');
            $filename = $request->first_name.time().$file->getClientOriginalName();
            $path = public_path('manuscripts/coverletter/');
            $fileurl = 'manuscripts/coverletter/'.$filename;
            $success = $file->move($path, $filename);
            $article->cover_letter = $fileurl;
        }

        // Uploading manuscript file
        if ($request->hasFile('ms_file')) {
            $file = $request->file('ms_file');
            $filename = $request->first_name.time().$file->getClientOriginalName();
            $path = public_path('manuscripts/msfile/');
            $fileurl = 'manuscripts/msfile/'.$filename;
            $success = $file->move($path, $filename);
            $article->ms_file = $fileurl;
        }

        // Uploading acknowledgement
        if ($request->hasFile('acknowledgement')) {
            $file = $request->file('acknowledgement');
            $filename = $request->first_name.time().$file->getClientOriginalName();
            $path = public_path('manuscripts/acknowledgement/');
            $fileurl = 'manuscripts/acknowledgement/'.$filename;
            $success = $file->move($path, $filename);
            $article->acknowledgement = $fileurl;
        }
        // Uploading conflict of interest
        if ($request->hasFile('conflict_of_interest')) {
            $file = $request->file('conflict_of_interest');
            $filename = $request->first_name.time().$file->getClientOriginalName();
            $path = public_path('manuscripts/coi/');
            $fileurl = 'manuscripts/coi/'.$filename;
            $success = $file->move($path, $filename);
            $article->conflict_of_interest = $fileurl;
        }

        $request->session()->put('article', $article);
        return redirect()->route('substpethree');
    }

    public function substpethree()
    {
        $reviwers = Reviwer::all();
        return view('submissionthree',compact('reviwers'));
    }
    // ------------------------------------------

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
