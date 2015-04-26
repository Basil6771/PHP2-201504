<?php
class Db
{
    protected $dbh;

    public function __construct()
    {
        $config = include __DIR__ . '/../config/db.php';
        $dsn = 'mysql:dbname=' . $config['dbname'] . ';host = ' . $config['host'] ;
        $this->dbh = new PDO($dsn, $config['user'], $config['password']);

    }

    public function findAll($class, $sql, $params = [])
    {
        $sth = $this->dbh->prepare($sql);
        $sth->execute($params);
        $res = $sth->fetchAll(PDO::FETCH_CLASS, $class);
        return $res;



       /* $res = mysql_query($sql);
        if (false ===$res){
            return false;
        }
        $ret = [];
        while ($row = mysql_fetch_object($res)){
            $ret[] = $row;
        }
        return $ret;*/
    }
    public function findOne($class, $sql, $params = [] )
    {
        return $this->findAll($class, $sql, $params)[0];
    }
}