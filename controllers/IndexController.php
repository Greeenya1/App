<?php

class IndexController extends Controller {

    private $pageTpl = '/views/main.tpl.php';

    public function __construct()
    {
        $this->model = new IndexModel();
        $this->view = new View();
    }

    public function index() {
        $this->pageData['title'] = "Вход в личный кабинет";
        $this->ajax();
        if (!empty($_POST)) {
            $action = $_POST['action'];
            switch ($action) {
                case 'login':
                    if(!$this->login()) {
                        $this->pageData['error'] = "Неправильный логин или пароль";
                    }
                    break;
                case 'register':
                    if($this->register()) {
                        $this->pageData['registerMsg'] = "Регистрация прошла успешно. Пройдите авторизацию!";
                    }
                    else {
                        $this->pageData['registerMsg'] = "Ошибка регистрации";
                    }
                    break;
            }
        }
        $this->view->render($this->pageTpl, $this->pageData);
    }

    public function ajax() {
        var_dump($_POST);
    }

    public function login() {
        if(!$this->model->checkUser()) {
            return false;
        }
    }

    public function register() {
        if(!empty($_POST) && !empty($_POST['login']) && !empty($_POST['email']) ) { //полностью все поля добить
            $regUser = $_POST['name'];
            $regLogin = $_POST['login'];
            $regEmail = $_POST['email'];
            $regPassword = md5($_POST['password']);
            $this->model->registerNewUser($regLogin, $regEmail, $regPassword, $regUser);
            return true;
        } else {
            $this->pageData['registerMsg'] = 'Вы заполнили не все поля';
            return false;
        }
    }



}