<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostStoreRequest;
use App\Models\Posty;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index','show']);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posty = Posty::all(); // <==> $posty = new Posty(); $posty->all();
        return view('posty.index', compact('posty'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
       // dump(request());
        return view('posty.dodaj');
    }

    /**
     * Store a newly created resource in storage.
     */
    //public function store(Request $request)
    public function store(PostStoreRequest $request)
    {
        //
        //dump($request);
        //dd($request);
       // $request->dump();
       /* $request->validate([
        'tytul' => 'required|min:3|max:255',
        'autor' => 'required|min:2',
        'email' => 'required|email:rfc,dns',
        'tresc' => 'required|min:6'
       ]); */
       $posty = new Posty();
       $posty->tytul = request('tytul');
       $posty->autor = request('autor');
       $posty->email = request('email');
       $posty->tresc = request('tresc');
       $posty->save();
       return redirect()->route('posty.index')->with('message', "Pomyślnie dodano post") ;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //echo "Show: $id";
        $post = Posty::findOrFail($id);
        return view('posty.post', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //echo "Edit: $id";
        $post = Posty::findOrFail($id);
        return view('posty.zmien', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    //public function update(Request $request, string $id)
    public function update(PostStoreRequest $request, string $id)
    {
        //echo "Update: $id";
        $post = Posty::findOrFail($id);
        $post->tytul = request('tytul');
        $post->autor = request('autor');
        $post->email = request('email');
        $post->tresc = request('tresc');
        $post->update();
        return redirect()->route('posty.index')->with('message', "Pomyślnie zmieniono post") ;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //echo "Destroy: $id";
        $post = Posty::findOrFail($id);
        $post->delete();
        return redirect()->route('posty.index')->with('message', "Pomyślnie usunięto post") ;
    }
}
