<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Escritor;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class EscritorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): Response
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Escritor $escritor): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Escritor $escritor): Response
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Escritor $escritor): Response
    {
        //
    }
}
