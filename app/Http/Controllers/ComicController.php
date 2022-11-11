<?php

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('comics.create');
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
        $request->validate([
            "title" => 'required|max:255|min:5|unique:comics',
            "descrition" => 'required',
            "thumb" => 'required|max:255|url',
            "price" => 'required|min:1|max:999.99',
            "series" => 'required|max:50',
            "sale_date" => 'required|date',
            "type" => 'required|max:15',
        ]);

        $data= $request->all();
        $newComic = new Comic();
        $newComic->fill($data);
        $newComic->save();
        return redirect()->route('comics.show', $newComic->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        //
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        //
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        //

        $request->validate([
            "title" => 'required|unique:comics',
            "descrition" => 'required',
            "thumb" => 'required|max:255|url',
            "price" => 'required|min:1|max:999.99',
            "series" => 'required|max:50',
            "sale_date" => 'required|date',
            "type" => 'required|max:15',
        ]);

        $data = $request->all();
        $comic->update($data);

        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        //
        $comic->delete();
        return redirect()->route('comics.index');
    }
}
