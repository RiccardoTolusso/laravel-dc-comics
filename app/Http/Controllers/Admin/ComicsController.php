<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateComicRequest;
use App\Models\Comic;
use Illuminate\Http\Request;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();

        return view("home", compact("comics"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("comics.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateComicRequest $request)
    {
        $data = $request->all();
        foreach ($data as $element) {
            if ($element == null) {
                abort(500);
            }
        }


        $comic = new Comic();
        $comic->fill($data);

        // CHECK IF IMAGE EXISTS
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $data['thumb']);
        // don't download content
        curl_setopt($ch, CURLOPT_NOBODY, 1);
        curl_setopt($ch, CURLOPT_FAILONERROR, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        $result = curl_exec($ch);
        curl_close($ch);
        if ($result !== FALSE) {
            $comic->thumb = $data['thumb'];
        } else {
            $comic->thumb = "https://png.pngtree.com/png-vector/20221125/ourmid/pngtree-no-image-available-icon-flatvector-illustration-thumbnail-graphic-illustration-vector-png-image_40966590.jpg";
        }

        $comic->save();

        return redirect(route("comics.show", ["comic" => $comic->id]));
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        return view("comics.comicShow", compact("comic"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        $comic->price = str_replace("$", "", $comic->price);
        $comic->price = floatval($comic->price);
        return view("comics.create", compact("comic"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        if ($comic != null) {
            $comic->update($request->all());
        }
        return redirect(route("comics.show", ['comic' => $comic->id]));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        if ($comic == null) {
            abort(404);
        } else {
            $comic->delete();
            return redirect()->route("comics.index");
        }
    }
}
