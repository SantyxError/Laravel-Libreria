<?php

namespace Ciri\dao;

use Ciri\dto\LibroDTO;

interface ILibroDAO
{

    public function all();
    public function findById(int $id);
    public function save(LibroDTO $libroDTO): bool;
    public function update(LibroDTO  $LibroDTO, $id): LibroDTO;
    public function delete(int $id): bool;
}
