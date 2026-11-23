<?php
class TablaAlumnos
{
    public ?array $talumnos;

    public function __construct()
    {
        $this->talumnos = [];
    }

    public function create(Alumno $alumno): void
    {
        $this->talumnos[] = $alumno;
    }

    public function read(int $indice): ?Alumno
    {
        return $this->talumnos[$indice];
    }

    public function update(Alumno $alumno, int $indice): void
    {
        $this->talumnos[$indice] = $alumno;
    }

    public function delete(int $indice): void
    {
        unset($this->talumnos[$indice]);

        $this->talumnos = array_values($this->talumnos);
    }

    public function addAlumnos(): void
    {
        $this->create(new Alumno(1,"Lucía","García López","lucia.garcia@example.com","12/04/2005",0,[1, 2]));

        $this->create(new Alumno(2,"Marcos","Fernández Ruiz","marcos.fernandez@example.com","23/09/2004",1,[2, 5]));

        $this->create(new Alumno(3,"Sara","Martínez Torres","sara.martinez@example.com","30/01/2005",2,[3, 5]));

        $this->create(new Alumno(4,"Diego","Sánchez Romero","diego.sanchez@example.com","08/07/2004",3,[0, 4]));
    }

    static public function getAsignaturas(): ?array
    {
        return ['DWES', 'DWEC', 'Despliegue Aplicaciones', 'HLC', 'EINEM', 'Diseño Interfaces'];
    }

    static public function getCursos(): ?array
    {
        return ['1SMR', '2SMR', '1DAW', '2DAW', '1AD', '2AD'];
    }

    public function getAsignaturasIndices(array $indices): array
    {
        $asignaturas = self::getAsignaturas();
        $asignaturasAlumno = [];

        foreach ($indices as $indice) 
        {
            if (isset($asignaturas[$indice])) 
            {
                $asignaturasAlumno[] = $asignaturas[$indice];
            }
        }

        return $asignaturasAlumno;
    }

    public function idNuevoAlumno(): int
    {
        $ultimoAlumno = end($this->talumnos);
        return $ultimoAlumno->id + 1;
    }

    public function getIndiceById(int $id): ?int
    {
        foreach ($this->talumnos as $indice => $alumno) 
        {
            if ($alumno->id === $id) 
            {
                return $indice;
            }
        }
        return null;
    }

    public function getAlumnoById(int $id): ?Alumno
    {
        foreach ($this->talumnos as $alumno) 
        {
            if ($alumno->id === $id) 
            {
                return $alumno;
            }
        }
        return null;
    }
}
?>