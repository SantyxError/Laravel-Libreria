<?php

namespace Ciri\dao\impl;

use Ciri\dao\ILibroDAO;
use Ciri\dto\LibroDTO;

class LibroDAO implements ILibroDAO
{


    public function all()
    {
        $libros = Libro::all(); //Usamos el modelo Libro y su metodo all()
        $libroDTO = array(); //Creamos un array
        foreach ($libros as $libro) { //Llenamos ese array con peliculas
            $libroDTO[] = new LibroDTO(
                $libro->id,
                $libro->titulo,
                $libro->anyo,
                $libro->escritor_id,
                $libro->editorial_id
            );
        }
        return $libroDTO; //Devolvemos el array con todas las peliculas en su interior
    }


    public function findById(int $id)
    {
        $libro = Libro::findOrFail($id);
        $libroDTO = new LibroDTO(
            $libro->id,
            $libro->titulo,
            $libro->anyo,
            $libro->escritor_id,
            $libro->editorial_id
        );
        return $libroDTO;
    }

    public function save(LibroDTO $libroDTO): bool
    {
        $libro = new Libro();
        $libro->titulo = $libroDTO->getTitulo();
        $libro->anyo = $libroDTO->getAnyo();
        $libro->escritor()->associate(Escritor::findOrFail($libroDTO->getEscritor_id()));
        $libro->editorial()->associate(Editorial::findOrFail($libroDTO->getEditorial_id()));
        return $libro->save();
    }

    public function update(LibroDTO $libro, $id): LibroDTO
    {
        $libro = Libro::findOrFail($id);
        $libro->titulo = $libro->getTitulo();
        $libro->anyo = $libro->getAnyo();
        $libro->save();
        return new LibroDTO($libro->id, $libro->titulo, $libro->anyo, $libro->escritor_id, $libro->editorial_id);
    }

    public function delete($id): bool
    {
        return 0;
    }
}
