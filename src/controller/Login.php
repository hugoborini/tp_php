<?php
class Login {
    static function start(){
        $model = new PostModel();

        if ($_SERVER['REQUEST_METHOD'] == 'POST'){

            $log = $model->login(DATAPOST["email"], DATAPOST["password"]);
            
        }
    }
}