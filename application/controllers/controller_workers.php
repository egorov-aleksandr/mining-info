<?php

class Controller_Workers extends Controller
{

    function __construct()
    {
        $this->model = new Model_Workers();
        $this->view = new View();
    }

    function action_index()
    {
        $data = $this->model->get_data();
        $this->view->generate('workers_view.php', 'template_view.php', $data);
    }
}
