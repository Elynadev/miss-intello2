<?php

// app/Http/Controllers/ArticleController.php
namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ArticleController extends Controller
{
    // Afficher tous les articles
    public function index()
    {
        $articles = Article::with('category')->get();
        return Inertia::render('Articles/Index', [
            'articles' => $articles,
        ]);
    }

    // Afficher le formulaire de création
    public function create()
    {
        $categories = Category::all();
        return Inertia::render('Articles/Create', [
            'categories' => $categories,
        ]);
    }

    // Enregistrer un nouvel article
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'content' => 'required|string',
            'category_id' => 'nullable|exists:categories,id',
        ]);

        Article::create($request->all());

        return redirect()->route('articles.index')->with('success', 'Article créé avec succès.');
    }

    // Afficher le formulaire d'édition
    public function edit(Article $article)
    {
        $categories = Category::all();
        return Inertia::render('Articles/Edit', [
            'article' => $article,
            'categories' => $categories,
        ]);
    }

    // Mettre à jour un article
    public function update(Request $request, Article $article)
    {
        $request->validate([
            'title' => 'required|string',
            'content' => 'required|string',
            'category_id' => 'nullable|exists:categories,id',
        ]);

        $article->update($request->all());

        return redirect()->route('articles.index')->with('success', 'Article mis à jour avec succès.');
    }

    // Supprimer un article
    public function destroy(Article $article)
    {
        $article->delete();

        return redirect()->route('articles.index')->with('success', 'Article supprimé avec succès.');
    }
}
