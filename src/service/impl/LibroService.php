<?php

namespace Ciri\service\impl;

use Ciri\dao\impl\LibroDAO;
use Ciri\dto\LibroDTO;
use Ciri\service\ILibroService;

class LibroService implements ILibroService
{
    //Instanciamos un movieDAO
    private LibroDAO $libroDAO;


    //Creamos un consctructor donde creamos ese movieDAO
    public function __construct()
    {
        $this->libroDAO = new LibroDAO();
    }


    //Creamos los metodos que hereda de la interfaz del servicio. Estos llamarán al DAO:

    //GET
    public function all()
    {
        return $this->libroDAO->all();
    }

    //GET por ID
    public function findById(int $id)
    {
        return $this->libroDAO->findById($id);
    }

    //POST
    public function save(LibroDTO $libroDto): bool
    {
        return $this->libroDAO->save($libroDto);
    }

    //UPDATE
    public function update(LibroDTO $libro, $id): LibroDTO
    {
        return $this->libroDAO->update($libro, $id);
    }

    // DELETE
    public function delete($id): bool
    {
        return 0;
    }
}
