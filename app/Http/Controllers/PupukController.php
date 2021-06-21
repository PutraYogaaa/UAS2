<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Pupuk;

class PupukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pupuks = Pupuk::orderBy('id', 'DESC')->paginate(5);
        //return view('bibit.index');
        return view('pupuk.index', compact('pupuks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::get();
        return view('pupuk.create', compact('categories'));
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
        $fileName = time() . '.' . $request->file->extension();
        $request->file('file')->storeAs('public', $fileName);

        $pupuks = Pupuk::create([
            'category_id' => $request->category,
            'title' => $request->title,
            'content' => $request->content,
            'file' => $fileName,
        ]);
        return back()->with('success', 'Postingan Anda Behasil');
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
        $pupuks = Pupuk::whereId($id)->first();
        return view('pupuk.show', compact('pupuks'));
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
        $categories = Category::get();
        $pupuks = Pupuk::find($id);
        return view('pupuk.edit', compact('categories', 'pupuks'));
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

        $pupuks = Pupuk::whereId($id)->first();
        $pupuks->update([
            'category_id' => $request->category,
            'title' => $request->title,
            'content' => $request->content,
        ]);

        return back()->with('success', 'Ubah Data Behasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Pupuk::whereId($id)->delete();
        return back()->with('success', 'Hapus Data Berhasil');
    }
}