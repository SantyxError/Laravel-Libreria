<?php

namespace Ciri\dto;

use JsonSerializable;

class LibroDTO implements JsonSerializable
{


    //PROPIEDADES
    private ?int $id;
    private string $titulo;
    private int $anyo;
    private int $escritor_id;
    private int $editorial_id;


    //CONSTRUCTOR
    public function construct__(?int $id, string $titulo, int $anyo, int $escritor_id, int $editorial_id)
    {
        $this->id = $id;
        $this->titulo = $titulo;
        $this->anyo = $anyo;
        $this->escritor_id = $escritor_id;
        $this->editorial_id = $editorial_id;
    }

    //METODOS PARA ACCEDER A LAS PROPIEDADES
    public function getId(): int
    {
        return $this->id;
    }

    public function getTitulo(): string
    {
        return $this->titulo;
    }

    public function getAnyo(): int
    {
        return $this->anyo;
    }

    public function getescritor_id(): int
    {
        return $this->escritor_id;
    }

    public function getEditorial_id(): int
    {
        return $this->editorial_id;
    }


    //METODO DEL JSONSERIALIZE
    public function jsonSerialize(): mixed
    {
        return [
            "id" => $this->id,
            "titulo" => $this->titulo,
            "anyo" => $this->anyo,
            "escritor_id" => $this->escritor_id,
            "editorial_id" => $this->editorial_id
        ];
    }
}
