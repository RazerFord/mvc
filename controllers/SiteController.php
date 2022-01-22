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
}
