<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Article;

class ArticleController extends Controller
{
    
    
    public function listing()
    {
    	$atcs = \App\Article::all();
    	
    	return view('articles.articleslisting', compact('atcs'));
    }
    
    public function details($id)
    {
    	$atc = Article::findOrFail($id);
    	
    	
    	return view('articles.articledetails', compact('atc'));
    	
    }
}
