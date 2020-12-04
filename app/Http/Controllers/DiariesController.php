<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Diary;

class DiariesController extends Controller
{
    public function showwrite($date='unknown'){
        $diary = new Diary;
        
        $data = ['date' => $date,'diary' => $diary];
        return view('diary.write',$data);
    }
    
    public function index($date){
        $diaries = Diary::where('date',$date)->get();
        
        return view('diary.index',[
                'date' => $date,
                'diaries' => $diaries,
            ]);
    }
    
    public function store(Request $request){
        
        $request->validate([
                'title' => 'required',
                'content' => 'required',
            ]);
            
        $request->user()->diaries()->create([
                'title' => $request->title,
                'content' => $request->content,
                'date' => $request->date,
                'author' => $request->name,
            ]);
        
        return redirect('calendar'); //前のURLへリダイレクト
    }
    
    public function show($id)
    {
        $diary = Diary::findOrFail($id);
        
        return view('diary.show',[
                'diary' => $diary,
            ]);
    }
}
