<?php

include_once(ROOT . '\models\Category.php');
include_once(ROOT . '\models\Product.php');

class CatalogController
{
    public function actionIndex()
    {
        $categories = [];
        $categories = Category::getCategoryList();

        $latestProducts = array();
        $latestProducts = Product::getLatesProducts(12);

        require_once(ROOT . '/views/catalog/index.php');

        return true;
    }
}
