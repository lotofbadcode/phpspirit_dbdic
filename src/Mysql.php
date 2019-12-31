<?php

namespace phpspirit\dbdic;

use PDO;

class Mysql
{
    private $_pdo;
    public function __construct($pdo)
    {
        $this->_pdo = $pdo;
    }

    /**
     * 获取所有表
     */
    public function tables($dbname)
    {
        $sql = "select * from information_schema.`TABLES` where TABLE_SCHEMA ='" . $dbname . "'";
        $stmt = $this->_pdo->prepare($sql);
        $stmt->execute();
        return  $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * 获取表中字段
     */
    public  function cloums($tablename)
    {
        $sql = "select * from information_schema.COLUMNS where table_name ='" . $tablename . "'";
        $stmt = $this->_pdo->prepare($sql);
        $stmt->execute();
        return  $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
