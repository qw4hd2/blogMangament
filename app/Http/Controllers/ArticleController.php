<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use App\Models\Article;
use App\Models\Tag;
class ArticleController extends Controller
{
    public function create(){
        $tags = Tag::all();
        return view('articles.create',compact('tags'));
    }
    public function store(Request $request){
        if (Auth::check()) {
            $article = Auth::user()->articles()->create([
                'title' => $request->input('title'),
                'description' => $request->input('description'),
                'body' => $request->input('body'),
                'img' => $request->file('img')->store('public/img'),
                'category_id' => $request->input('category_id')
            ]);
    
            $selectedTags = $request->input('tags');
            foreach($selectedTags as $tagId){
                $article->tags()->attach($tagId);
            }
            
            return redirect()->route('home')->with("message", "Articolo caricato correttamente");
        } else {
            return redirect()->route('login')->with("message", "You must be logged in to create an article.");
        }
    }
    
    public function show(Article $article){
        return view('articles.show',compact('article'));
    }
    public function articlesForCategory(Category $category){
        $articles = Article::where('category_id', $category->id)->where('is_accepted',true)->orderBy('created_at','DESC')->get();
        return view('articles.category',compact('articles','category'));
    }
    public function article_dashboard(){
        return view('articles.dashboard');
    }
    public function edit(Article $article){
        $tags = Tag::all();
        return view('articles.edit',compact('article','tags'));
    }
    public function destroy(Article $article){
        $article->delete();
        return redirect()->route('articles.dashboard');
    }
    public function update(Request $request, Article $article){
        if($article->has('img')){
            $article->update(
                [
                    'title'=>$request->input('title'),
                    'description'=>$request->input('description'),
                    'body'=>$request->input('body'),
                    'img'=>$request->file('img')->store('public/img'),
                    'category_id'=>$request->input('category_id')
                ]
            );
        }else{
            $article->update(
                [
                    'title'=> $request->input('title'), 
                    'description' =>$request->input('description'),
                    'body' =>$request->input('body'),
                    'category_id' =>$request->input('category_id')
                ]
            );
        }
        $article->tags()->detach();
        $article->tags()->sync($request->input('tags'));
        return redirect()->route('articles.dashboard');
    }
}
