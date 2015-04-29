<?php



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
        /*$art = new NewsArticle();
        $art->title = 'Новая Новость';
        $art->text = 'Вот она новая новость';
        $art->insert();

        var_dump($art);
        */



        $this->view->items = NewsArticle::findAll();
        $this->view->display('all');


    }

    public function actionOne()
    {
        $id = $_GET['id'];
        var_dump(NewsArticle::findOne($id));

    }

}