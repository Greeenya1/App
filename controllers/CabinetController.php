<?php

class CabinetController extends Controller {

    private $pageTpl = "/views/cabinet.tpl.php";

    public function __construct()
    {
        $this->model = new CabinetModel();
        $this->view = new View();
    }

    public function index() {

        if (!$_SESSION['user']) {
            header("Location: /");
        }
        echo $_SESSION['user'];
        $this->pageData['title'] = "Кабинет";
        $this->view->render($this->pageTpl, $this->pageData);
    }



    public function logout() {
        session_destroy();
        header("Location: /Testmanao");
    }
}