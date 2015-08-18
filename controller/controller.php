<?php
    class Controller {
        public function __construct() {
            $this->model = new model();
        }
        public function all() {
            $data = $this->model->getAll();
            $columns = $this->model->getAllColumnNames();
            require_once 'view/view.php';
        }
        public function one($id) {
            $data = $this->model->get($id);
            $columns = $this->model->getColumnNames();
            require_once 'view/viewone.php';
        }
    }
?>