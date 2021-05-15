<?php

include('_logotitle.class.php');

class Menu extends Logo_Title {

    protected function get_menu() {

        return <<<MENU

{$this->get_logo_header()}

<p>
    <a href="/index.php">Início</a>
    <a href="/contact.php">Contatos</a>
    <a href="/about.php">Sobre</a>
</p>

MENU;
    }
}