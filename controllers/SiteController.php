<?php

class SiteController
{

    public function actionIndex()
    {
        $categories = [];
        $categories = Category::getCategoryList();

        $latestProducts = array();
        $latestProducts = Product::getLatesProducts(3);

        require_once(ROOT . '/views/site/index.php');

        return true;
    }

    public function actionContact()
    {
        
        require_once(ROOT . '/views/contact/contact.php');

        return true;
    }
}
