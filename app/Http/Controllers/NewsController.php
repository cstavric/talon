<?php

namespace App\Http\Controllers;

use App\News;
use App\Sport;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::all();
        return view('news.show', compact('news'));
    }

    public function show($sport_id)
    {
        $type = Sport::where('id', $sport_id)->first();
        //$news = News::where('sport_id', '=', $sport_id)->orderBy('news_date', 'DESC')->get();
        return view('news.show', compact('type'));
    }


    public function destroy($id)
    {
        $news = News::findOrFail($id);

        $news->delete();

        Session::flash('flash_message_s', 'School successfully deleted!');


        return redirect()->back();
    }
}
