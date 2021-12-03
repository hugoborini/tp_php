<?php

class ListArticle {
    public function start(Type $var = null)
    {
        $values = [];
        $model = new PostModel();
        $path = explode("/", $_SERVER['REQUEST_URI']);
        $idArticle = explode("-", $path[1]);

        if ($_SERVER['REQUEST_METHOD'] == 'POST'){

            $model->PostComment("hugo", "23/11/2000", DATAPOST["contenu"], $idArticle[1]);
        }
        

        
        $values["dataArticle"] = $model->GetArticleById($idArticle[1]);
        $values["dataCommentaire"] = $model->GetCommentById($idArticle[1]);


       return $values;
    }
}