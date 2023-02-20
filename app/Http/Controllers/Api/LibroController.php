<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\LibroRequest;
use App\Models\Libro;
use Ciri\dto\LibroDTO;
use Ciri\service\impl\LibroService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    private LibroService $libroService;

    public function __construct()
    {
        $this->middleware('auth:sanctum', ['except' => ['index', 'show']]);
        $this->libroService = new LibroService();
    }

    public function index()
    {
        $libros = $this->libroService->all(); //llamamos al metodo all() del servicio
        return response()->json($libros, 200); //devolvemos la pelicula y el codigo 200
    }


    public function store(LibroRequest $libroRequest)
    {
        $LibroDTO = new LibroDTO(
            null,
            $libroRequest->titulo,
            $libroRequest->anyo,
            $libroRequest->director_id,
            $libroRequest->editorial_id
        );
        return response()->json($this->libroService->save($LibroDTO), 201);
    }

    public function show(int $id)
    {
        $libro = $this->libroService->findById($id);
        return response()->json($libro, 200);
    }


    public function update(Request $libroRequest, $id): JsonResponse
    {
        $libro = new LibroDTO(
            null,
            $libroRequest->titulo,
            $libroRequest->anyo,
            $libroRequest->director_id,
            $libroRequest->editorial_id
        );

        return response()->json($this->libroService->update($libro, $id), 200);
    }

    public function destroy($id): JsonResponse
    {
        $libro = Libro::destroy($id);
        echo "Libro eliminado con exito";
        return response()->json($libro, 200);
    }
}
