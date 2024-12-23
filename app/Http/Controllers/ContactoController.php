<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Contacto::all();
    }

    public function store(Request $request)
    {
        $contacto = Contacto::create($request->all());
        return response()->json($contacto, 201);
    }

    public function show($id)
    {
        return Contacto::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $contacto = Contacto::findOrFail($id);
        $contacto->update($request->all());
        return response()->json($contacto);
    }

    public function destroy($id)
    {
        Contacto::destroy($id);
        return response()->json(['message' => 'Contacto eliminado']);
    }
}
