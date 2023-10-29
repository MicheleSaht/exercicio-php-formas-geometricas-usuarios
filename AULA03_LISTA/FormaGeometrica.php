<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX1</title>
</head>
<link rel="stylesheet" href="style.css">

<body>

    <header>
        <nav>
            <ul>
            <a href="#"><svg class="logo" href="#main" width="48" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 -1 100 50"
                fill="#ffffff">
                <path
                    d="m7.579 10.123 14.204 0c4.169 0.035 7.19 1.237 9.063 3.604 1.873 2.367 2.491 5.6 1.855 9.699-0.247 1.873-0.795 3.71-1.643 5.512-0.813 1.802-1.943 3.427-3.392 4.876-1.767 1.837-3.657 3.003-5.671 3.498-2.014 0.495-4.099 0.742-6.254 0.742l-6.36 0-2.014 10.07-7.367 0 7.579-38.001 0 0m6.201 6.042-3.18 15.9c0.212 0.035 0.424 0.053 0.636 0.053 0.247 0 0.495 0 0.742 0 3.392 0.035 6.219-0.3 8.48-1.007 2.261-0.742 3.781-3.321 4.558-7.738 0.636-3.71 0-5.848-1.908-6.413-1.873-0.565-4.222-0.83-7.049-0.795-0.424 0.035-0.83 0.053-1.219 0.053-0.353 0-0.724 0-1.113 0l0.053-0.053" />
                <path
                    d="m41.093 0 7.314 0-2.067 10.123 6.572 0c3.604 0.071 6.289 0.813 8.056 2.226 1.802 1.413 2.332 4.099 1.59 8.056l-3.551 17.649-7.42 0 3.392-16.854c0.353-1.767 0.247-3.021-0.318-3.763-0.565-0.742-1.784-1.113-3.657-1.113l-5.883-0.053-4.346 21.783-7.314 0 7.632-38.054 0 0" />
                <path
                    d="m70.412 10.123 14.204 0c4.169 0.035 7.19 1.237 9.063 3.604 1.873 2.367 2.491 5.6 1.855 9.699-0.247 1.873-0.795 3.71-1.643 5.512-0.813 1.802-1.943 3.427-3.392 4.876-1.767 1.837-3.657 3.003-5.671 3.498-2.014 0.495-4.099 0.742-6.254 0.742l-6.36 0-2.014 10.07-7.367 0 7.579-38.001 0 0m6.201 6.042-3.18 15.9c0.212 0.035 0.424 0.053 0.636 0.053 0.247 0 0.495 0 0.742 0 3.392 0.035 6.219-0.3 8.48-1.007 2.261-0.742 3.781-3.321 4.558-7.738 0.636-3.71 0-5.848-1.908-6.413-1.873-0.565-4.222-0.83-7.049-0.795-0.424 0.035-0.83 0.053-1.219 0.053-0.353 0-0.724 0-1.113 0l0.053-0.053" />
            </svg></a></ul>
            
            <a href=""></a>
        </nav>
    </header>

    <MAIN>

        <h3>Exercício 1 </h3>
        <p>Crie uma classe abstrata chamada FormaGeometrica que possua um método abstrato
            chamado calculoDaArea e em seguida crie as classes Quadrado, Circulo e Losangulo com
            seus respectivos atributos de tamanho e métodos construtores e implementando o método
            calculoDaArea de acordo com cada classe. Por último, crie um objeto de cada tipo com
            dados fictícios sobre seu tamanho e verifique se o cálculo da área está correto.
            Fórmulas necessárias:
            Área de quadrado: comprimento * altura
        Área de círculo: 3.14 * (raio * raio)
        Área de losângulo: (diagonalMaior * diagonalMenor) / 2</p>
<br><hr><br>

        <?php

abstract class FormaGeometrica
{
    abstract public function calculoDaArea();
}

// Crie a classe Quadrado
class Quadrado extends FormaGeometrica
{
    private $lado;
    
    public function __construct($lado)
    {
        $this->lado = $lado;
    }
    
    public function calculoDaArea()
    {
        return "Área do Quadrado: " . $this->lado * $this->lado;
    }
}

class Circulo extends FormaGeometrica
{
    private $raio;

        public function __construct($raio)
        {
            $this->raio = $raio;
        }
        
        public function calculoDaArea()
        {
            return 'Área do Circulo: ' . 3.14 * ($this->raio * $this->raio);
        }
    }
    
    class Losangulo extends FormaGeometrica
    {
        private $diagonalMaior;
        private $diagonalMenor;
        
        public function __construct($diagonalMaior, $diagonalMenor)
        {
            $this->diagonalMaior = $diagonalMaior;
            $this->diagonalMenor = $diagonalMenor;
        }
        
        public function calculoDaArea()
        {
            return "Área do Losangulo: " . ($this->diagonalMaior * $this->diagonalMenor) / 2;
        }
    }
    
    $quadrado = new Quadrado(5);
    $circulo = new Circulo(3);
    $losangulo = new Losangulo(6, 4);
    
    echo $quadrado->calculoDaArea() . "<br>";
    echo $circulo->calculoDaArea() . "<br>";
    echo $losangulo->calculoDaArea() . "<br>";
    
    ?>

<br></hr>

<h3> Exercício 2</h3>
    <p>Assumindo o exemplo fictício de uma locadora, modele e construa os códigos necessários
        para as seguintes classes de um sistema:
        Classe Usuario: deve conter o nome, telefone e endereço do usuário da locadora, e também
        o número de filmes que ele já locou. Deve conter um método que exiba estas informações.
        Classe Funcionario: deve conter o nome, telefone e endereço do funcionário da locadora, e
        o valor do seu salário. Deve conter um método que exiba estas informações.
        Classe CD: deve conter o nome do artista, o nome do álbum e estilo. Deve conter um
        método que exiba estas informações.
        Classe DVD: deve conter o título do DVD e o estilo. Deve conter um método que exiba estas
        informações.
        Classe Bluray: deve conter o título do Bluray, estilo e resolução (se é HD ou FullHD). Deve
        conter um método que exiba estas informações.</p>
        <br><hr><br>
        <?php
    class Usuario
    {
        private string $nome;
        private int $telefone;
        private string $endereco;
        private int $numeroFilmes;
        
        
        public function __construct($nome, $telefone, $endereço, $numeroFilmes)
        {
            $this->nome = $nome;
            $this->telefone = $telefone;
            $this->endereço = $endereço;
            $this->numeroFilmes = $numeroFilmes;
        }
        
        public function exibir()
        {
            echo "<p>Nome: " . $this->nome;
            echo "<p>Telefone: " . $this->telefone;
            echo "<p>Endereço: " . $this->endereço;
            echo "<p>Numero de Filmes: " . $this->numeroFilmes;
        }
    }
    
    class Funcionario
    {
        private string $nome;
        private string $telefone;
        private string $endereco;
        private float $salario;
        
        public function __construct(string $nome, string $telefone, string $endereco, float $salario)
        {
            $this->nome = $nome;
            $this->telefone = $telefone;
            $this->endereco = $endereco;
            $this->salario = $salario;
        }
        
        public function exibir()
        {
            echo "<p>Nome: " . $this->nome;
            echo "<p>Telefone:" . $this->telefone;
            echo "<p>Endereço:" . $this->endereco;
            echo "<p>Salário:" . $this->salario;
        }
    }
    
    class CD
    {
        private string $artista;
        private string $album;
        private string $estilo;
        
        public function __construct(string $artista, string $album, string $estilo)
        {
            $this->artista = $artista;
            $this->album = $album;
            $this->estilo = $estilo;
        }
        
        public function exibir()
        {
            echo "<p>Artista: {$this->artista}<br>";
            echo "<p>Álbum: {$this->album}<br>";
            echo "<p>Estilo: {$this->estilo}<br>";
        }
    }
    
    class DVD
    {
        private string $titulo;
        private string $estilo;
        
        public function __construct(string $titulo, string $estilo)
        {
            $this->titulo = $titulo;
            $this->estilo = $estilo;
        }
        
        public function exibir()
        {
            echo "<p>Título: {$this->titulo}<br>";
            echo "<p>Estilo: {$this->estilo}<br>";
        }
    }
    
    class Bluray
    {
        private string $titulo;
        private string $estilo;
        private string $resolucao;
        
        public function __construct(string $titulo, string $estilo, string $resolucao)
        {
            $this->titulo = $titulo;
            $this->estilo = $estilo;
            $this->resolucao = $resolucao;
        }
        
        public function exibir()
        {
            echo "<p>Título: {$this->titulo}<br>";
            echo "<p>Estilo: {$this->estilo}<br>";
            echo "<p>Resolução: {$this->resolucao}<br>";
        }
    }
    
    
    $usuario = new Usuario('Michele', 11991928196, "Rua Manuel 1187", 10);
    $funcionario = new Funcionario("Maria", "999999999", "Rua B, São Paulo", 2500.00);
    $cd = new CD("Taylor", "Álbum 1", "POP");
    $dvd = new DVD("Jogos Vorazes", "Ação");
    $bluray = new Bluray("Barbie", "Drama", "FullHD");
  
echo "<h3>Usuario</h3>";
echo "<br>";
$usuario->exibir();
echo "<p>";
echo "<hr><br>";

echo "<h3>Funcionario</h3><br>";
$funcionario->exibir();
echo "<p>";
echo "<hr><br>";

echo "<h3>CD</h3><br>";
$cd->exibir();

echo "<hr><br>";
echo "<h3>DVD</h3><br>";
echo "<p>";
$dvd->exibir();

echo "<hr><br>";
echo "<h3>Bluray</h3><br>";
echo "<p>";
$bluray->exibir();
    ?>


</MAIN>
</body>
<footer>
        <p>&copy; 2023 Michele Santos Oliveira</p>
</footer>

</html>