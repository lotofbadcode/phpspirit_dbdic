<?php

namespace phpspirit\dbdic;

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
    public function tables()
    {
        $tables=[];
        $this->_pdo->exec('show tables');
    }

    /**
     * 获取表中字段
     */
    public  function cloums($tablename)
    {
    }
}
