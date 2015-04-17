<?php

require __DIR__.'/../classes/DataBase.php';

abstract class Article
{
    abstract protected function getTable();

    protected function getDb()
    {
        return new Db;
    }

    public function findAll()
    {
        $db = new Db();
        return $db->findAll('SELECT * FROM ' . $this->getTable());
    }

    public function findOne($id)
    {
        $db = new Db();
        return $db->findAll('SELECT * FROM ' . $this->getTable() . ' WHERE id=' .$id);
    }
} 