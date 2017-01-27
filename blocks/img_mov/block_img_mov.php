<?php
class block_img_mov extends block_base {
    function init() {
        $this->title = get_string('Imagen', 'block_img_mov');
        $this->version = 2004111200;
    }
}

function get_content() {
    if ($this->content !== NULL) {
        return $this->content;
    }

    $this->content = new stdClass;
    $this->content->text = '¡El contenido de nuestro bloque SimpleHTML!';
    $this->content->footer = 'Pie de página aquí...';

    return $this->content;
}



?>


