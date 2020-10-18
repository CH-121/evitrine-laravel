<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categorie;
use App\Article;


class VitrineController extends Controller
{
    public function index()
    {
        $categories = Categorie::all();
        $articles = Article::paginate(4);
        return view('vitrine' , compact('categories', 'articles'));
    }
    //---- pour afficher tous les articles qui correspond à la catégorie choisie----
    public function articles($id)
    {
        $articles = Categorie::find($id)->articles;
        $categories = Categorie::all();
        return view('catArticles' , compact('articles' , 'categories'));
    }
    //--- pour afficher le détail d'un article -----
    public function detail($id)
    {
        $article = Article::find($id);
        $categories = Categorie::all();
        return view('detail',compact('article' , 'categories'));
    }


}
