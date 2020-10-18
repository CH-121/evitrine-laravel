<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Categorie;


class ArticleController extends Controller
{
    public function index()
    {
        return view('articles.index');
    }
    //--- pour créer un article ----
    public function create()
    {
       $categories = Categorie::all();
        return view('articles.create', compact('categories'));
    }
    //---- pour enregistrer un article dans la BDD----
    public function save(Request $request)
    {
        $article = new Article;
        $article->codeArt = $request->input('codeArt');
        $article->nomArt = $request->input('nomArt');
        $article->pu = $request->input('pu');
        $article->quantite = $request->input('quantite');
        $article->garantie = $request->input('garantie');
        $article->joursEchantillon = $request->input('joursEchantillon');
        $article->joursLivraison = $request->input('joursLivraison');
        $article->prixLivraison = $request->input('prixLivraison');
        $article->description = $request->input('description');

        $article->user_id = auth()->user()->id;
        $article->categorie_id = $request->get('nomCat');
        //---- To save image -------
        if($request->hasfile('image') != null)
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/articles/', $filename);
            $article->image = $filename;
        }
        else{
          //  return $request;
            $article->image='';
        }
        $article->save();
        return redirect('articles');
    }
    //---- pour afficher tous les articles -----
    public function list()
    {
        $articles = Article::all();
        return view('articles.index', ['articles' => $articles]);
    }
    //----- pour modifier un article -----
    public function edit(Request $request, $id)
    {
        $article = Article::find($id);
       $categories = Categorie::all();
        return view('articles.edit', compact('article', 'categories'));
    }
    //------ pour enregistrer les modifications -------
    public function update(Request $request, $id)
    {
        $article = Article::find($id);

        $article->codeArt = $request->input('codeArt');
        $article->nomArt = $request->input('nomArt');
        $article->pu = $request->input('pu');
        $article->quantite = $request->input('quantite');
        $article->garantie = $request->input('garantie');
        $article->joursEchantillon = $request->input('joursEchantillon');
        $article->joursLivraison = $request->input('joursLivraison');
        $article->prixLivraison = $request->input('prixLivraison');
        $article->description = $request->input('description');

        $article->categorie_id = $request->get('nomCat');

        //---- To save image -------
        if($request->hasfile('image') != null)
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/articles/', $filename);
            $article->image = $filename;
        }
        else{
          //  return $request;
            $article->image='';
        }

        $article->save();
        return redirect('articles');
    }
    //------- pour supprimer un article ----
    public function delete($id)
    {
        $article = Article::find($id);
        $article->delete();
        return redirect('articles');
    }
}
