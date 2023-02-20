<?php

namespace Ciri\dto;

use JsonSerializable;

class LibroDTO implements JsonSerializable
{


    //PROPIEDADES
    private ?int $id;
    private string $title;
    private int $year;
    private int $writer_id;
    private int $editorial_id;


    //CONSTRUCTOR
    public function construct__(?int $id, string $title, int $year, int $writer_id, int $editorial_id)
    {
        $this->id = $id;
        $this->title = $title;
        $this->year = $year;
        $this->writer_id = $writer_id;
        $this->editorial_id = $editorial_id;
    }

    //METODOS PARA ACCEDER A LAS PROPIEDADES
    public function getId(): int
    {
        return $this->id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getYear(): int
    {
        return $this->year;
    }

    public function getWriter_id(): int
    {
        return $this->writer_id;
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
            "title" => $this->title,
            "year" => $this->year,
            "writer_id" => $this->writer_id,
            "editorial_id" => $this->editorial_id
        ];
    }
}
