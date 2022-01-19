<?php

class ProductController
{
    public function actionView($id)
    {
        require_once(ROOT . '/views/product/view.php');

        return true;
    }

    public function actionList()
    {
        echo 'ProductController actionList';
        return true;
    }
}