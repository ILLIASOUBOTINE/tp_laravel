<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Jeu;
use App\Models\Tag;
use Illuminate\Http\Request;

class JeuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jeux = Jeu::all();
        return view('jeux.index',['jeux'=>$jeux]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categorie::all();
        return view('jeux.create',['categories'=>$categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        if ($request->validate([
            'titre' => 'required|string|max:45',
            'description' => 'required|string|max:254',
            // un champ => une règle
            ])) {
                $game = new Jeu();
                $game->titre = $request->input('titre');
                $game->description = $request->input('description');
                $game->save();
                // return redirect()->route('jeux.index');
                return redirect()->route('jeux.show', $game->id);
            // puis écriture en BDD
        }else{
            // Erreur
            return redirect()->back();
        }
            
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jeu = Jeu::find($id);
        // $categorie = $jeu->categorie;
        // dd($categorie);
        return view('jeux.show',['jeu'=>$jeu]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jeu = Jeu::find($id);
       
        $categories = Categorie::all();
        $tags = Tag::all();
        $tagsJeu = $jeu->tags;
       
        $index = 0;
        foreach ($tags as $tag) {
            foreach ($tagsJeu as $tagJeu) {
                if ($tag->id == $tagJeu->id) {
                    $tags->forget($index);
                }
            }
            $index++;
        }
        // dd($tags);
        return view('jeux.edit',['jeu'=>$jeu,'categories'=>$categories, 'tags'=> $tags]);
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
        // dd($request);
        if ($request->validate([
            'titre' => 'required|string|max:45',
            'description' => 'required|string|max:254',
            // un champ => une règle
            ])) {
                $jeu = Jeu::find($id);
                $jeu->titre = $request->input('titre');
                $jeu->description = $request->input('description');
                $jeu->categorie_id = $request->input('categorie');
                $jeu->save();
                // return redirect()->route('jeux.index');
                return redirect()->route('jeux.show', $jeu->id);
            // puis écriture en BDD
        }else{
            // Erreur
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Jeu::destroy($id);
        return redirect()->route('jeux.index');
    }

    public function attach(Request $request, $id_jeu) {
        // dd($request);
        if ($request->validate([
            'tag' => 'required|string|max:45',
           
            // un champ => une règle
            ])) {
                $jeu = Jeu::find($id_jeu);
                $jeu->tags()->attach($request->input('tag'));
                
                return redirect()->back();
            // puis écriture en BDD
        }else{
            // Erreur
            return redirect()->back();
        }
    }
        
    public function detach($id_jeu, $id_tag) {
        $jeu = Jeu::find($id_jeu);
        $jeu->tags()->detach($id_tag);
        return redirect()->back();
    }
        
   
}