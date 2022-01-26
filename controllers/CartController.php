<?php

class CartController
{
    public function actionAdd($id)
    {
        Cart::addProduct($id);

        $referrer = $_SERVER['HTTP_REFERER'];
        header("Location: $referrer");
    }

    public function actionIndex()
    {
        $categories = array();
        $categories = Category::getCategoryList();

        $productsInCart = Cart::getProducts();

        if ($productsInCart) {
            $productsIds = array_keys($productsInCart);
            $products = Product::getProductByIds($productsIds);
            
            $totalPrice = Cart::getTotalPrice($products);
        }

        require_once(ROOT . '/views/cart/index.php');

        return true;
    }
}
