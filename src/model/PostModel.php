<?php

class PostModel{

    public function PostArticle(array $data)
    {
        $db = db::dbConnect();
        $req = $db->prepare("INSERT INTO article(image_path,titre, contenu, auteur, date) VALUES(:image_path,:titre,:contenu,:auteur,:date)");
        $exec = $req->execute([
            'image_path' => $data["image_path"],
            'titre' => $data["titre"],
            'contenu' => $data["contenu"],
            'auteur' => $data["auteur"],
            'date' => $data["date"]
        ]);

        return $exec;
        
    }

    public function test()
    {
        echo "pou";
    }

    public function GetAllArticle() : Array
    {
        $db = db::dbConnect();
        $select = $db->query("SELECT * FROM article");
        $data = $select->fetchAll();

        return $data;
    }

    public function GetArticleById(int $id) : Array
    {
        $db = db::dbConnect();
        $req = $db->prepare("SELECT * FROM article WHERE id_article = :id");
        $exec = $req->execute([
            "id" => $id
        ]);

        $data = $req->fetchAll();
        
        return $data;
    }

    public function GetCommentById(int $id) : Array {

        $db = db::dbConnect();
        $req = $db->prepare("SELECT * FROM commentaire WHERE id_article = :id");
        $exec = $req->execute([
            "id" => $id
        ]);
        $data = $req->fetchAll();
        return $data;
    }

    public function PostComment($auteur, $date, $content, $id_article){

        $db = db::dbConnect();
        $req = $db->prepare("INSERT INTO commentaire(auteur_commentaire, date_commentaire, content_commentaire, id_article) VALUES(:auteur_commentaire, :date_commentaire, :content_commentaire ,:id_article)");
        $exec = $req->execute([
            "auteur_commentaire" => $auteur,
            "date_commentaire" => $date,
            "content_commentaire" => $content,
            "id_article" => $id_article
        ]);

        return $exec;
    }


    public function createAccount(string $nom, string $prenom, string $email, string $mdp, string $isAdmin = null) {

        $db = db::dbConnect();
        $pass_hache =  password_hash($mdp, PASSWORD_DEFAULT);
        $req = $db->prepare("INSERT INTO user(nom , prenom, email, mdp, is_admin) VALUES(:nom, :prenom,  :email,  :mdp, :is_admin)");
        if($isAdmin === null){
            $isAdmin = "off";
        }
        $user = $req->execute(array(
            "nom" => $nom,
            "prenom" => $prenom,
            "email" => $email,
            "mdp" => $pass_hache ,
            "is_admin" => $isAdmin
        ));


    }

    public function login(String $email, String $mdp)
    {
        $db = db::dbConnect();
        $member = $db->prepare("SELECT * FROM user WHERE email = :email");
        $member->execute([
        'email' => $email,
        ]);

        $member_data = $member->fetch();
        if (!$member_data){
            return false;
        }

        $ispasscorrect = password_verify($mdp, $member_data['mdp']);

        if ($ispasscorrect) {
            session_start();
            $_SESSION["log"] = $member_data;
            return true;
        } else {
            return false;
        }
    }
}