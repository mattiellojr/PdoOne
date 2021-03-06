<?php /** @noinspection PhpUnhandledExceptionInspection */

use eftec\PdoOne;

include '../vendor/autoload.php';
include "Collection.php";

// connecting to database sakila at 127.0.0.1 with user root and password abc.123

$pdoOne = new PdoOne('sqlsrv', 'PCJC\SQLEXPRESS', 'sa', 'abc.123', 'test', 'logpdoone.txt');
$pdoOne->logLevel = 3;
$pdoOne->throwOnError = true;
$pdoOne->open();
$pdoOne->db('test');


Table_1Repo::createTable();
echo "<pre>";
var_dump(Table_1Repo::validTable());
echo "</pre>";

/**
 * Generated by PdoOne Version 1.28.1
 * Class table_1Repo
 */
class table_1Repo
{
    const TABLE = 'table_1b';
    const PK = 't1pk';
    const DEF=[
        "t1pk" => "int NOT NULL IDENTITY(1,3)",
        "t2" => "int",
        "t3" => "varchar(50) DEFAULT ('IT IS A DEFAULT VALUE')",
        "t4" => "decimal(18,2)",
        "t5" => "float",
        "t6" => "tinyint",
        "t" => "nchar(10)"
    ];
    const DEFKEY=[
        "t4" => "UNIQUE KEY",
        "t6" => "KEY",
        "t1pk" => "PRIMARY KEY",
        "t2" => "FOREIGN KEY REFERENCES tbl_for(TABLEFOR)"
    ];

    /** @var PdoOne */
    public static $pdoOne = null;

    /**
     * It creates a new table<br>
     * If the table exists then the operation is ignored (and it returns false)
     *
     * @param array $definition
     * @param null  $extra
     *
     * @return array|bool|PDOStatement
     * @throws Exception
     */
    public static function createTable($definition=null, $extra = null) {
        if (!self::getPdoOne()->tableExist(self::TABLE)) {
            if($definition===null) $definition=self::DEF;
            return self::getPdoOne()->createTable(self::TABLE, $definition, self::DEFKEY, $extra);
        }
        return false; // table already exist
    }

    /**
     * It validates the table and returns an associative array with the errors.
     *
     * @return array If valid then it returns an empty array
     * @throws Exception
     */
    public static function validTable() {
        return PdoOne::validateDefTable(self::getPdoOne(),self::TABLE,self::DEF,self::DEFKEY);
    }

    /**
     * It is used for DI.<br>
     * If the field is not null, it returns the field self::$pdoOne<br>
     * If the global function pdoOne exists, then it is used<br>
     * if the globla variable $pdoOne exists, then it is used<br>
     * Otherwise, it returns null
     *
     * @return PdoOne
     */
    protected static function getPdoOne() {
        if (self::$pdoOne !== null) {
            return self::$pdoOne;
        }
        if (function_exists('pdoOne')) {
            return pdoOne();
        }
        if (isset($GLOBALS['pdoOne'])) {
            return $GLOBALS['pdoOne'];
        }
        return null;
    }

    /**
     * It sets the field self::$pdoOne
     *
     * @param $pdoOne
     */
    public static function setPdoOne($pdoOne) {
        self::$pdoOne = $pdoOne;
    }

    /**
     * It cleans the whole table (delete all rows)
     *
     * @return array|bool|PDOStatement
     * @throws Exception
     */
    public static function truncate() {
        return self::getPdoOne()->truncate(self::TABLE);
    }

    /**
     * It drops the table (structure and values)
     *
     * @return array|bool|PDOStatement
     * @throws Exception
     */
    public static function dropTable() {
        if (!self::getPdoOne()->tableExist(self::TABLE)) {
            return self::getPdoOne()->dropTable(self::TABLE);
        }
        return false; // table does not exist
    }

    /**
     * Insert an new row
     *
     * @param array $obj =["t1pk"=>0,"t2"=>0,"t3"=>'',"t4"=>0.0,"t5"=>0.0,"t6"=>0,"t"=>'']
     *
     * @return mixed
     * @throws Exception
     */
    public static function insert($obj) {
        return self::getPdoOne()->insertObject(self::TABLE, $obj);
    }

    /**
     * Update an registry
     *
     * @param array $obj =["t1pk"=>0,"t2"=>0,"t3"=>'',"t4"=>0.0,"t5"=>0.0,"t6"=>0,"t"=>'']
     *
     * @return mixed
     * @throws Exception
     */
    public static function update($obj) {
        return self::getPdoOne()->from(self::TABLE)
            ->set($obj)
            ->where(self::PK, $obj[self::PK])
            ->update();
    }

    /**
     * It deletes a registry
     *
     * @param mixed $pk
     *
     * @return mixed
     * @throws Exception
     */
    public static function delete($pk) {
        return self::getPdoOne()->from(self::TABLE)
            ->where(self::PK, $pk)
            ->delete();
    }

    /**
     * It gets a registry using the primary key.
     *
     * @param mixed $pk
     *
     * @return ["t1pk"=>0,"t2"=>0,"t3"=>'',"t4"=>0.0,"t5"=>0.0,"t6"=>0,"t"=>'']
     * @throws Exception
     */
    public static function get($pk) {
        return self::getPdoOne()->select('*')
            ->from(self::TABLE)
            ->where(self::PK, $pk)
            ->first();
    }

    /**
     * It returns a list of rows
     *
     * @param null|array $where =["t1pk"=>0,"t2"=>0,"t3"=>'',"t4"=>0.0,"t5"=>0.0,"t6"=>0,"t"=>'']
     * @param null|string $order
     * @param null|string $limit
     *
     * @return [["t1pk"=>0,"t2"=>0,"t3"=>'',"t4"=>0.0,"t5"=>0.0,"t6"=>0,"t"=>'']]
     * @throws Exception
     */
    public static function select($where = null, $order = null, $limit = null) {
        return self::getPdoOne()->select('*')
            ->from(self::TABLE)
            ->where($where)
            ->order($order)
            ->limit($limit)
            ->toList();
    }

    /**
     * It returns the number of rows
     *
     * @param null|array $where =["t1pk"=>0,"t2"=>0,"t3"=>'',"t4"=>0.0,"t5"=>0.0,"t6"=>0,"t"=>'']
     *
     * @return int
     * @throws Exception
     */
    public static function count($where = null) {
        return (int)self::getPdoOne()->count()
            ->from(self::TABLE)
            ->where($where)
            ->firstScalar();
    }
}