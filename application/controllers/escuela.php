<?php

class Escuela extends CI_Controller {

    function index() {
        $this->load->model('escuela_model');
        $data['result'] = $this->escuela_model->escuelas();
        $data['page_title'] = "Escuelas que se tienen registradas";
        $this->load->view('escuela_view', $data);
    }
}

?>