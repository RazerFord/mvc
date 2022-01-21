<?php

class Product
{

    const SHOW_BY_DEFAULT = 10;

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
}
