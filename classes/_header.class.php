<?php

include ('_menu.class.php');

// Cabeçalho da página

class Header extends Menu {

    // Atributos
    private $title;
    private $css;

    // Construtor
    public function __construct ($title, $css) {
        $this->set_title($title);
        $this->set_css($css);
    }

    // // Destruidor
    // public function __destruct() {
    //     echo $this->get_header();
    // }

    // getters
    public function set_title($title) {
        if ($title !== '') {
            $this->title = $title;
            $this->site_title = $title;
        } else
            $this->title = 'Página Inicial';
    }

    public function get_title() {
        return $this->title;
    }

    // setters
    public function set_css($css) {
        if ($css !== '')
            $this->css = "<link rel=\"stylesheet\" href=\"{$css}\">";
        else
            $this->css = '';
    }

    // get header
    public function get_header() {
        echo <<<HTML

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{$this->title}</title>
    {$this->css}
</head>
<body>

{$this->get_menu()}

<h2>Página de teste de PHPOO</h2>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime corporis, odio voluptates sed nulla minima inventore nisi tenetur, soluta veritatis eligendi eos sapiente sunt repudiandae tempore? Ipsa commodi quam sequi?</p>
    
HTML;
    }
}