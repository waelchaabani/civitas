<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use QrCode;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Page.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pages=Page::all();

        // retour à la vue avec les données
        return view('Page.liste', compact('pages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=> 'required',
            'email'=>'required|email',
        ]);
        $page=new Page();
        $page->name=$request->name;
        $page->email=$request->email;
        $page->save();
        return redirect('Page/liste')->with('success', 'formulaire saved avec success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page=Page::find($id);
        return view('Page.edit', compact('page'));
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
        $request->validate([
            'name'=> 'required',
            'email'=>'required|email',
        ]);
        $page=page::find($id);
        $page->name=$request->name;
        $page->email=$request->email;
        $page->save();
        return redirect('Page/liste')->with('success', 'formulaire updated avec success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $page=page::find($id);
        $page->delete();
        return redirect('Page/liste')->with('success', 'formulaire updated avec success');
    }
}
