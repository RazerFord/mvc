<?php

class AdminController extends AdminBase
{
    public function actionIndex()
    {
        SELF::checkAdmin();

        require_once(ROOT . '/views/admin/index.php');

        return true;
    }
}
