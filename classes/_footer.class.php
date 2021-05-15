<?php

class Footer {

    private $copyright = "&copy; 2021 André Luferat";
    private $javascript = '';

    public function set_copyright($copyright) {
        if ($copyright !== '')
            $this->copyright = trim($copyright);
    }

    public function set_javascript($javascript) {
        if ($javascript !== '')
            $this->javascript = "<script src=\"{$javascript}\"></script>";
    }

    public function __construct ($javascript = '', $copyright = '') {
        $this->set_copyright($copyright);
        $this->set_javascript($javascript);
    }

    public function get_footer () {
        echo <<<HTML

<p style="text-align:center">{$this->copyright}</p>
{$this->javascript}

</body>
</html>

HTML;
    }
}