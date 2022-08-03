<?php

class IndexModel extends Model {

    public function checkUser() {
        $login = $_POST['login'];
        $password = md5($_POST['password']);

        $sql = "SELECT * FROM users WHERE login = :login AND password = :password";
        $stmt = $this->db->prepare($sql);//Подготавливает запрос к выполнению и возвращает связанный с этим запросом объект
        $stmt->bindValue(":login", $login, PDO::PARAM_STR); //Связывает параметр с заданным значением
        $stmt->bindValue(":password", $password, PDO::PARAM_STR);
        $stmt->execute(); //Запускает подготовленный запрос на выполнение

        $res = $stmt->fetch(PDO::FETCH_ASSOC);

        if(!empty($res)) {
            $_SESSION['user'] = $_POST['login'];
            header("Location: cabinet");
        }
        else {
            return false;
        }

    }

    public function registerNewUser($regLogin, $regEmail, $regPassword, $regUser) {
        $sql = "INSERT INTO users(login, email, password, name ) VALUES (:login, :email, :password, :name )";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(":login", $regLogin, PDO::PARAM_STR);
        $stmt->bindValue(":email", $regEmail, PDO::PARAM_STR);
        $stmt->bindValue(":password", $regPassword, PDO::PARAM_STR);
        $stmt->bindValue(":name", $regUser, PDO::PARAM_STR);
        $stmt->execute();
    }

}