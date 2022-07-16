<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;
use Illuminate\Http\Request;
class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all();
        return view('dashboard.articles.index',compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.articles.create');
    }

    // --------------------------------------------------------------------------

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
        return view('submissionthree');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreArticleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreArticleRequest $request)
    {
        //
    }
    // -------------------------------------------------------------------------



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateArticleRequest  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateArticleRequest $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        //
    }
}
