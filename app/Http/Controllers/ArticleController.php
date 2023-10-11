<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Article;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Carbon\Carbon;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        if($request->ajax())
        {
            $articles = Article::query();

            return DataTables::of($articles)

            ->editColumn('created_at', function($e) {
                return Carbon::parse($e->created_at)->format("F j, Y, g:i a");
            })
            
            ->addColumn('action', function($a) {

                $detail = '<a href=" '.route('articles.show', $a->id).'" class="btn btn-primary" style="margin-right: 10px;">Detail</a>';
                $edit = '<a href=" '.route('articles.edit', $a->id).'" class="btn btn-success" style="margin-right: 10px;">Edit</a>';
                $delete = '<a href="" class="deleteButton btn btn-danger" data-id="'. $a->id .'">Delete</a>';

                return '<div class="action">' . $detail . $edit . $delete . '</div>';

            })->rawColumns(['action'])->make(true);
        }

        return view('backend.articles.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostRequest $request)
    {
        $article = new Article();
        $article->title = $request->title;
        $article->body = $request->body;

        //content image
        $imageNames = [];
        foreach($request->file('image') as $image)
        {
            $originalFileName = $image->getClientOriginalName();
            $imageName = $originalFileName . "_" . time() . "_" . uniqid() . "." . $image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imageName);
            $imageNames[] = $imageName;

        }
        $article->image = implode(',', $imageNames);

        //featured image
        $featuredImageName = date('YmdHis') . "." . $request->featured_image->getClientOriginalExtension();
        $request->featured_image->move(public_path('featured'), $featuredImageName);
        $article->featured_image = $featuredImageName;
        
        $article->save();
        
        return redirect('admin/articles')->with('create', 'Successfully Created');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Article::findOrFail($id);
        $image = explode(',', $article->image);

        return view('backend.articles.detail', compact('article', 'image'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        $image = explode(',' ,$article->image);
        return view('backend.articles.edit', compact('article','image'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        $article->title = $request->title;
        $article->body = $request->body;

        if($request->featured_image)
        {
            $featuredImageName = date('YmdHis') . "." . $request->featured_image->getClientOriginalExtension();
            $request->featured_image->move(public_path('featured'), $featuredImageName);
            $article->featured_image = $featuredImageName;
        }

        $imageNames = [];
        if($request->image)
        {           
            foreach($request->file('image') as $image)
            {
                $originalFileName = $image->getClientOriginalName();
                $imageName = $originalFileName . "_" . time() . "_" . uniqid() . "." . $image->getClientOriginalExtension();
                $image->move(public_path('uploads'), $imageName);
                $imageNames[] = $imageName;

            }
            $article->image = implode(',', $imageNames);
        }

        $article->save();

        return redirect('admin/articles')->with('update', 'Updated Successfully!');
     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::findOrFail($id);
        $article->delete();

        return 'success';
    }
}
