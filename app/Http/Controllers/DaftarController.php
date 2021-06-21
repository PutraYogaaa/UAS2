<?php

namespace App\Http\Controllers;

use App\Models\Daftar;
use Illuminate\Http\Request;


class DaftarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $daftars = Daftar::paginate(10);
        return view('bibit.index', compact('daftars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('bibit.create');
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
        $validated = $request->validate([
            'title' => 'required|unique:daftars|min:4|max:50',
            'content' => 'required',
        ]);

        $fileName = time() . '.' . $request->file->extension();
        $request->file('file')->storeAs('public', $fileName);
        $daftars = Daftar::create(
            [
                'title' => $request->title,
                'content' => $request->content,
                'file' => $fileName,
            ]
        );


        /*$daftars = new Daftar;
        $daftars->title = $request->title;
        $daftars->content = $request->content;
        $daftars->file->$fileName;
        $daftars->save(); */

        if (!$daftars) {
            return back()->with('error', 'Data Gagal Disimpan!');
        } else {
            return back()->with('success', 'Data Berhasil Disimpan!');
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
        //
        $daftars = Daftar::find($id);
        return view('bibit.show', compact('daftars'));
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
        $daftars = Daftar::find($id);
        return view('bibit.edit', compact('daftars'));
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
        $validated = $request->validate([
            'title' => 'required|unique:daftars|min:4|max:50',
            'content' => 'required',
        ]);

        $daftars = Daftar::whereId($id)->first();

        $fileName = time() . '.' . $request->file->extension();
        $request->file('file')->storeAs('public', $fileName);
        $daftars->update(
            [
                'title' => $request->title,
                'content' => $request->content,
                'file' => $fileName,
            ]
        );
        /*$daftars->title = $request->title;
        $daftars->content = $request->content;
        $daftars->save();
        */

        if (!$daftars) {
            return back()->with('error', 'Data Gagal Disimpan!');
        } else {
            return back()->with('success', 'Data Berhasil Disimpan!');
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
        //
        $daftars = Daftar::whereId($id)->first();
        $daftars->delete();
        if (!$daftars) {
            return back()->with('error', 'Data Gagal Dihapus!');
        } else {
            return back()->with('success', 'Data Berhasil Dihapus!');
        }
    }
}