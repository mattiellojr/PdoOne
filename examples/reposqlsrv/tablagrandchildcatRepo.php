<?php
/** @noinspection PhpUnused */
namespace repo;
use eftec\PdoOne;
use eftec\_BasePdoOneRepo;

/**
 * Generated by PdoOne Version 1.39
 * @copyright (c) Jorge Castro C. MIT License  https://github.com/EFTEC/PdoOne 
 * Class TablagrandchildcatRepo
 */
class TablagrandchildcatRepo extends _BasePdoOneRepo
{
    const TABLE = 'tablagrandchildcat';
    const PK = [
	    'IdTablaGrandChildCatPK'
	];
    const ME=__CLASS__;   
    
    public static function getDef($onlyKeys=false) {
        $r= [
		    'IdTablaGrandChildCatPK' => 'int NOT NULL IDENTITY(1,1)',
		    'Name' => 'varchar(50) DEFAULT (NULL)',
		    'IdgrandchildFK' => 'int DEFAULT (NULL)'
		];
        return ($onlyKeys)? array_keys($r): $r;
    }
    
    /**
     * It returns an associative array (colname=>key type) with all the keys/indexes (if any)
     * 
     * @return string[]
     */    
    public static function getDefKey() {
        return [
		    'IdTablaGrandChildCatPK' => 'PRIMARY KEY',
		    'IdgrandchildFK' => 'KEY'
		];
    }
    public static function getDefIdentity() {
        return [
		    'IdTablaGrandChildCatPK'
		];
    }
    public static function getDefFK($structure=false) {
        if ($structure) {
            return [
			    'IdgrandchildFK' => 'FOREIGN KEY REFERENCES [tablagrandchild]([idgrandchildPK])'
			];
        }
        /* key,refcol,reftable,extra */
        return [
		    'IdgrandchildFK' => [
		        'key' => 'FOREIGN KEY',
		        'refcol' => 'idgrandchildPK',
		        'reftable' => 'tablagrandchild',
		        'extra' => '',
		        'name' => 'FK_tablagrandchildcat_tablagrandchild'
		    ],
		    '/IdgrandchildFK' => [
		        'key' => 'ONETOONE',
		        'refcol' => 'idgrandchildPK',
		        'reftable' => 'tablagrandchild',
		        'extra' => '',
		        'name' => 'FK_tablagrandchildcat_tablagrandchild'
		    ]
		];
    }
    public static function toList($filter=null,$filterValue=null) {
        return self::_toList($filter,$filterValue);
    }
    public static function first($pk = null) {
        return self::_first($pk);
    }
    
    /**
     * @param array $entity=self::factory()
     * @return bool true if the pks exists
     */
    public static function exist($entity) {
        return self::_exist($entity);
    }
    /**
     * @param array $entity=self::factory()
     * @param bool $transactional If true (default) then the operation is transaction
     * @return array|false=self::factory()
     */
    public static function insert(&$entity,$transactional=true) {
        return self::_insert($entity,$transactional);
    }
    
    /**
     * @param array $entity=self::factory()
     * @param bool $transactional If true (default) then the operation is transaction
     * @return array|false=self::factory()
     */
    public static function update($entity,$transactional=true) {
        return self::_update($entity,$transactional);
    }
    public static function delete($entity,$transactional=true) {
        return self::_delete($entity,$transactional);
    }
    public static function deleteById($pk,$transactional=true) {
        return self::_deleteById($pk,$transactional);
    }  
    

    public static function factory() {
        $recursive=static::getRecursive();
        return [
		'IdTablaGrandChildCatPK'=>0,
		'Name'=>'',
		'IdgrandchildFK'=>0,
		'/IdgrandchildFK'=>(in_array('/IdgrandchildFK',$recursive)) 
		                            ? tablagrandchildRepo::factory() 
		                            : null, /* manytoone */
		];
    }
    public static function factoryNull() {
        return [
		'IdTablaGrandChildCatPK'=>null,
		'Name'=>null,
		'IdgrandchildFK'=>null,
		'/IdgrandchildFK'=>null, /* manytoone */
		];
    }     
     
}