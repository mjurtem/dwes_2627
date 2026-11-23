<?php
/*
    Aumno.php
    atributos:
        - id: 
        - nombre:
        - apellidos:
        - email::
        - f_nacimiento:
        - curso:
        - asignaturas:
*/
class Alumno
{
    public ?int $id;
    public ?string $nombre;
    public ?string $apellidos;
    public ?string $email;
    public ?string $f_nacimiento;
    public ?int $curso;
    public ?array $asignaturas;

    public function __construct(?int $id, ?string $nombre, ?string $apellidos, ?string $email, ?string $f_nacimiento, ?string $curso, ?array $asignaturas)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->email = $email;
        $this->f_nacimiento = $f_nacimiento;
        $this->curso = $curso;
        $this->asignaturas = $asignaturas;
    }

    public function getEdad(?string $f_nacimiento): ?int
    {
        $fechaActual = new DateTime('now');

        if (str_contains($f_nacimiento, '-'))
        {
            $fechaCorregida = str_replace('-', '/', $f_nacimiento);
            $fechaAlumno = DateTime::createFromFormat('d/m/Y' ,$fechaCorregida);
            return $fechaAlumno->diff($fechaActual)->y;
        }
        else
        {
            $fechaAlumno = DateTime::createFromFormat('d/m/Y' ,$f_nacimiento);

            return $fechaAlumno->diff($fechaActual)->y;
        }
        
       
    }
}
?>