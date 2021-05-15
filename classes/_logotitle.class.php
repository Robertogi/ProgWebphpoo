<?php

class Logo_Title {

    public $logo = '/img/logo.png';
    public $site_title = '';

    public function set_logo($logo) {
        if ($logo !== '')
            $this->logo = $logo;
    }

    public function set_title($title) {
        if ($title !== '')
            $this->site_title = $title;
    }

    public function get_logo_header() {
        return <<<LOGO

<div style="display: flex">
    <img src="{$this->logo}" alt="{$this->site_title}" style="width: 80px">
    <h1>{$this->site_title}</h1>
</div>

LOGO;
    }

}
