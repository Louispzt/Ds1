<?php

namespace App\Http\Controllers;

use App\modele\Film;
use App\modele\Categorie;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Response;
use Illuminate\View\View;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param null $laCategorie
     * @return Factory|Response|View
     */
    public function index($laCategorie = null)
    {
        $query = $laCategorie ? Categorie::where('libelle',"$laCategorie")->firstOrFail()->films() : Film::query();
        $lesFilms = $query->get();
        $categories = Categorie::all();
        return view('listeFilms', compact('lesFilms', 'categories', 'laCategorie'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  Film  $film
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Film $film)
    {
        $categorie = $film->categorie;
        return view('afficherFilm',compact('film','categorie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Delete the specified ressource in storage.
     *
     * @param  Film  $film
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Film $film)
    {
        $film->delete();
        return back()->with('info', 'Le film a été supprimé de la BD');
    }
}
