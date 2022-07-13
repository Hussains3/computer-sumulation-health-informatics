<?php

namespace App\Http\Controllers;

use App\Models\ArticleType;
use App\Http\Requests\StoreArticleTypeRequest;
use App\Http\Requests\UpdateArticleTypeRequest;
use Symfony\Component\HttpFoundation\Request;
class ArticleTypeController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->middleware('permission:articletype-list|articletype-create|articletype-edit|articletype-delete', ['only' => ['index','store']]);
        $this->middleware('permission:articletype-create', ['only' => ['create','store']]);
        $this->middleware('permission:articletype-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:articletype-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $types = ArticleType::all();
        return view('dashboard.articletypes.index',compact('types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreArticleTypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreArticleTypeRequest $request)
    {
        $request->validate([
            'name' => 'required|unique:article_types,name'
        ]);

        ArticleType::create($request->only('name'));

        return redirect()->route('articletypes.index')
            ->withSuccess(__('Type added successfully.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ArticleType  $articleType
     * @return \Illuminate\Http\Response
     */
    public function show(ArticleType $articleType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ArticleType  $articleType
     * @return \Illuminate\Http\Response
     */
    public function edit(ArticleType $articleType)
    {
        return $articleType;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateArticleTypeRequest  $request
     * @param  \App\Models\ArticleType  $articleType
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateArticleTypeRequest $request, ArticleType $articleType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ArticleType  $articleType
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $articleType = ArticleType::find($request->id);
        $articleType->delete();
        return redirect()->route('articletypes.index')
            ->withSuccess(__('Delete successfully.'));

    }
}
