<?php 

class index {
    static function start() {
        $values = [];
        $model = new PostModel();
        


        $values["dataArticle"] = $model->GetAllArticle();

        return $values;
    }

    
}
