<?php
// Classe
class Fruits {

    // Atributos
    private $color = 'red';
    public $weight;
    public $flavor;
    private $local;

    // Construtor
    public function __construct ($color) {

        // Testes para verificar se "$color" é válido.
        $colors = array('blue', 'green', 'red', 'yellow', 'orange');

        if (in_array($color, $colors)) {

            // Atribui valor para a cor
            $this->color = $color;            
        } else {

            echo "Cor inválida";
            return false;
        }

    }

    // Destruidor
    public function __destruct() {
        $this->color = NULL;
    }

    // Métodos
    public function local() {

        return "Esta fruta tem a cor {$this->color}";
    }

    // Setter de 'color'
    public function setColor($color) {

        // Testes para verificar se "$color" é válido.
        $colors = array('blue', 'green', 'red', 'yellow', 'orange');

        if (in_array($color, $colors)) {

            // Atribui valor para a cor
            $this->color = $color;            
        } else {

            echo "Cor inválida";
            return false;
        }       
    }

    // Getter de 'color'
    public function getColor() {
        return $this->color;
    }
}

// Instância
$morango = new Fruits('blue');
echo '<p>Cor: ' . $morango->local();

var_dump($morango instanceof Fruits);

// $laranja = new Fruits;
// $laranja->setColor('orange');
// echo '<p>Cor: ' . $laranja->getColor();
exit();
die();
