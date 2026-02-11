<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class kategoriController extends Controller
{
    public function index(){
        return kategori::all();
    }

    public function store(Request $request){
        $request->validate([
            'nama_kategori' => 'required|string|max:255'
        ]);
        
        Kategori::create($request->all());
        return response()->json(['message' => 'kategori berhasil ditambahkan']);
    }

    public function update(Request $request, $id){
        $kategori = Kategori::findOrFail($id);
        $request->validate([
            'nama_kategori' => 'required'
        ]);
        $kategori->update($request->all());
        return response()->json(['message' => 'kategori berhasil diubah']);

    }

    public function destroy($id){
        Kategori::destroy($id);
        return response()->json(['message' => 'kategori berhasil dihapus']);
    }

}