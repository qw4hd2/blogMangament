<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Facades\Auth;
use App\Mail\RequestRoleMail;
use Illuminate\Support\Facades\Mail;
class PublicController extends Controller
{
    public function home()
    {
        $articles = Article::where('is_accepted',true)->orderBy('created_at','desc')->take(6)->get();
        return view('welcome',compact('articles'));
    }
    public function workWithUs(){
        return view('workWithUs');
    }
    public function sendRoleRequest(Request $request) {
        $user = Auth::user();
        $role = $request->input('position');
        $email = $request->input('email');
        $presentation = $request->input('presentation');
        
        $info = compact('role', 'email', 'presentation');
        
        $requestMail = new RequestRoleMail($info);
        Mail::to('admin@blog.it')->send($requestMail);
        switch ($role) {
            case 'admin':
                $user->is_admin = 0;
                break;
            case 'revisor':
                $user->is_revisor = 0;
                break;
            case 'writer':
                $user->is_writer = 0;
                break;
            default:
                $user->is_admin = 0;
                $user->is_revisor = 0;
                $user->is_writer = 0;
                break;
        }
        
        $user->update();
        
        return redirect()->route('home')->with('message', 'Grazie per averci contattato');
    }
    public function searchArticle(Request $request){
        $key=$request->input('key');
        $articles = Article::search($key)->where('is_accepted',true)->get();
        return view('articles.index',compact('articles','key'));
    }
    
}

