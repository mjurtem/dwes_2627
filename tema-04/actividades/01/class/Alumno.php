<?php

class Alumno
{
    private ?int $id;
    private ?string $nombre;
    private ?string $apellidos;
    private ?string $poblacion;
    private ?string $email;
    private ?int $telefono;
    private ?string $curso;

    function  __construct(?int $id = null, ?string $nombre = null, ?string $apellidos = null, ?string $poblacion = null, ?string $email = null, ?int $telefono = null, 
    ?string $curso = null)
    {
        $this -> id = $id;
        $this -> nombre = $nombre;
        $this -> apellidos = $apellidos;
        $this -> poblacion = $poblacion;
        $this -> email = $email;
        $this -> telefono = $telefono;
        $this -> curso = $curso;
    }

    public function getId(): int
    {
        return $this -> id;
    }

    public function setId(int $id): void
    {
        $this -> id = $id;
    }

    public function getNombre(): string
    {
        return $this -> nombre;
    }

    public function setNombre(string $nombre): void
    {
        $this -> nombre = $nombre;
    }

    public function setApellidos(string $apellidos): void
    {
        $this -> apellidos = $apellidos;
    }

    public function getApellidos(): string
    {
        return $this -> apellidos;
    }

    public function setPoblacion(string $poblacion): void
    {
        $this -> poblacion = $poblacion;
    }

    public function getPoblacion(): string
    {
        return $this -> poblacion;
    }

    public function setEmail(string $email): void
    {
        $this -> email = $email;
    }

    public function getEmail(): string
    {
        return $this -> email;
    }

    public function setTelefono(int $telefono): void
    {
        $this -> telefono = $telefono;
    }

    public function getTelefono(): int
    {
        return $this -> telefono;
    }

    public function getCurso(): string
    {
        return $this -> curso;
    }

    public function setCurso(string $curso): void
    {
        $this -> curso = $curso;
    }
}
?>