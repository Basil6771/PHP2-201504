<?php

require __DIR__ . '/AbstractController.php';
require __DIR__ . '/../models/NewsArticle.php';
require __DIR__ . '/../classes/View.php';


class NewsController
    extends AbstractController
{
    protected $view;
    public function __construct()
    {
        $this->view = new View(__DIR__ . '/../view/news');

    }

    public function actionAll()
    {
        $this->view->items = NewsArticle::findAll();
        $this->view->display('all');

    }



}