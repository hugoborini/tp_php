<?php
class Register{
    static function start(){
        $model = new PostModel();
        var_dump(DATAPOST);

        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $model->createAccount(DATAPOST["nom"], DATAPOST["prenom"], DATAPOST["email"], DATAPOST["password"], DATAPOST["isAdmin"]);
        }
        
        header("Location: /login");
    }
}