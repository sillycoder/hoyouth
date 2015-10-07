<?php

class IndexController extends Controller
{
    public function actionIndex()
    {
        // renders the view file 'protected/views/site/index.php'
        // using the default layout 'protected/views/layouts/main.php'
        header("Location:http://hoyouth.com/shop");
        $this->render('index');
        //$this->renderpartial('error');
    }

}
