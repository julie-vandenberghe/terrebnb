<?php

namespace App\Http\Controllers;

use App\Models\Accommodation;
use Illuminate\Http\Request;

class AccommodationController extends Controller
{
    //Ici, on affiche toutes les catégories. Pour cela, on retourne le modèle accommodation
    public function index()
    {
        return view('accommodations/index', [
            'logements' => Accommodation::all(), //Fait un SELECT * FROM accommodations ... en Laravel :o
        ]);
    }

    public function show($id)
    {
        $houseFound = Accommodation::findOrFail($id); //Afficher 1 logement
        return view('accommodations/show', [
            'logement' => $houseFound
        ]);
    }

    public function create()
    {
        return view('accommodations/create');
    }

    public function store(Request $request)
    {
        //Vérification des données
        $request->validate([
            'title' => 'required|min:2|unique:accommodations',
            'description' => 'required|min:50|max:1000',
            'image' => 'required|url',
        ]);

        //Insertion en BDD
        $house = new Accommodation();
        $house->title = $request->title;
        $house->slug = fake()->slug(); 
        $house->description = $request->description;
        $house->image = $request->image;
        $house->status = $request->status;
        $house->save(); //Fait un INSERT INTO accommodations en Laravel

        session()->flash('message', 'Le logement a été créé.');

        return redirect('/logements');
    }

    public function edit($id)
    {
        $house = Accommodation::findOrFail($id);

        return view('accommodations/edit', [
            'logement' => $house
        ]);
    }

    public function update(Request $request, $id)
    {
        //Vérification des données
        $request->validate([
            'title' => 'required|min:2',
            'description' => 'required|min:10',
        ]);

        //Insertion en BDD
        $house = Accommodation::findOrFail($id); //Ici on va modifier le logement
        $house->title = $request->title;
        $house->slug = fake()->slug();
        $house->description = $request->description;
        $house->image = $request->image;
        $house->status = 1;

        $house->save(); //Fait un INSERT INTO accommodations en Laravel

        return redirect('/logements');
    }

    public function destroy($id)
    {
        Accommodation::destroy($id); //DELETE FROM accommodations WHERE id...
        return redirect('/logements')->with('message', 'Le logement a été supprimé.');;
    }
}
