<?php

namespace Ciri\service;

use Ciri\dto\LibroDTO;

interface ILibroService
{


    public function all();

    public function findById(int $id);

    public function save(LibroDTO $libroDTO): bool;

    public function update(LibroDTO $libroDTO, $id): LibroDTO;

    public function delete(int $id): bool;
}
