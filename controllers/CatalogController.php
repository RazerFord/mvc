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
        $latestProducts = Product::getLatesProducts();

        require_once(ROOT . '/views/catalog/catalog.php');

        return true;
    }

    public function actionCategory($categoryId)
    {
        $categories = array();
        $categories = Category::getCategoryList();

        $categoryItem = array();
        $categoryItem = Product::getProductListByCategory($categoryId);

        require_once(ROOT . '/views/catalog/category.php');

        return true;
    }
}
