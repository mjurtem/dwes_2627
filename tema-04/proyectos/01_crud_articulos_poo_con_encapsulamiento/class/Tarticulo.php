<?php
class Tarticulo
{
    protected ?array $tarticulos;

    public function __construct(?array $tarticulos)
    {
        $this->tarticulos = $tarticulos;
    }

    public function getTarticulos(): ?array
    {
        return $this->tarticulos;
    }

    public function setTarticulos(?array $tarticulos): void
    {
        $this->tarticulos = $tarticulos;
    }

    public function getMarcas(): array
    {
       return $marcas = ['Adidas', 'Nike', 'Puma', 'Balenciaga', 'Gucci'];
    }

    public function addArticulos()
    {
        $this->tarticulos[] = new Articulo(1,"Camiseta de algodón","Basic",2,["Ropa", "Verano"],12,19.99);
        $this->tarticulos[] = new Articulo(2,"Zapatillas deportivas","Runner Pro",3,["Calzado", "Deporte"],8,59.99);
        $this->tarticulos[] = new Articulo(3,"Portátil ultraligero","ThinkPad X1",5,["Tecnología", "Informática"],4,899.99);
        $this->tarticulos[] = new Articulo(4,"Silla ergonómica","ErgoFlex",7,["Hogar", "Oficina"],6,129.50);
        $this->tarticulos[] = new Articulo(5,"Auriculares inalámbricos","SoundMax",4,["Electrónica", "Audio"],15,79.00);
    }

    public static function getCategorias(): array
    {
        $categorias = ["Electrónica", "Hogar", "Juguetes", "Ropa", "Deportes"];
        return $categorias;
    }

    public function indice_categorias_a_nombre_categorias(array $indices)
    {
        
    }
}
?>