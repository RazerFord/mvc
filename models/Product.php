<?php

class Product
{

    const SHOW_BY_DEFAULT = 5;

    /**
     * Returns an array of product
     */
    public static function getLatesProducts($count = SELF::SHOW_BY_DEFAULT)
    {
        $count = intval($count);

        $db = Db::getConnection();

        $productLists = array();

        $result = $db->query('SELECT id, name, price, image, is_new FROM product'
            . ' WHERE status="1"'
            . ' ORDER BY id DESC'
            . ' LIMIT ' . $count);

        $i = 0;
        while ($row = $result->fetch()) {
            $productLists[$i]['id'] = $row['id'];
            $productLists[$i]['name'] = $row['name'];
            $productLists[$i]['image'] = $row['image'];
            $productLists[$i]['price'] = $row['price'];
            $productLists[$i]['is_new'] = $row['is_new'];
            $i++;
        }
        return $productLists;
    }
    /**
     * Returns an array of products
     */
    public static function getProductListByCategory($categoryId = false, $page = 1)
    {
        if ($categoryId) {

            $page = intval($page);
            $offset = ($page - 1) * SELF::SHOW_BY_DEFAULT;

            $db = Db::getConnection();

            $products = [];

            $result = $db->query('SELECT id, name, price, image, is_new FROM product'
                . ' WHERE status="1" AND category_id=' . $categoryId
                . ' ORDER BY id DESC'
                . ' LIMIT ' . SELF::SHOW_BY_DEFAULT
                . ' OFFSET ' . $offset);

            $i = 0;

            while ($row = $result->fetch()) {
                $products[$i]['id'] = $row['id'];
                $products[$i]['name'] = $row['name'];
                $products[$i]['image'] = $row['image'];
                $products[$i]['price'] = $row['price'];
                $products[$i]['is_new'] = $row['is_new'];
                $i++;
            }
        }
        return $products;
    }

    public static function getProductById($id)
    {
        $id = intval($id);

        if ($id) {
            $db = Db::getConnection();

            $result = $db->query('SELECT * FROM product WHERE id=' . $id);
            $result->setFetchMode(PDO::FETCH_ASSOC);

            return $result->fetch();
        }
    }
}
