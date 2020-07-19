<?php
/** @noinspection PhpIncompatibleReturnTypeInspection
 * @noinspection ReturnTypeCanBeDeclaredInspection
 * @noinspection DuplicatedCode
 * @noinspection PhpUnused
 * @noinspection PhpUndefinedMethodInspection
 * @noinspection PhpUnusedLocalVariableInspection
 * @noinspection PhpUnusedAliasInspection
 * @noinspection NullPointerExceptionInspection
 * @noinspection SenselessProxyMethodInspection
 * @noinspection PhpParameterByRefIsNotUsedAsReferenceInspection
 */
namespace reposqlsrv;
use eftec\PdoOne;
use eftec\_BasePdoOneRepo;
use Exception;

/**
 * Generated by PdoOne Version {version}. 
 * @copyright (c) Jorge Castro C. MIT License  https://github.com/EFTEC/PdoOne
 * Class TestDb
 */
class TestDb extends _BasePdoOneRepo
{
    const type = 'sqlsrv';
    const NS = 'reposqlsrv\\';
    
    /** 
     * @var bool if true then it uses objects (instead of array) in the 
     * methods tolist(),first(),insert(),update() and delete() 
     */
    public static $useModel=true;      
    
    
    /** @var string[] it is used to set the relations betweeen table (key) and class (value) */
    const RELATIONS = [
	    'TableParent' => 'TableParentRepo',
	    'TableChild' => 'TableChildRepo',
	    'TableGrandChild' => 'TableGrandChildRepo',
	    'TableGrandChildTag' => 'TableGrandChildTagRepo',
	    'TableParentxCategory' => 'TableParentxCategoryRepo',
	    'TableCategory' => 'TableCategoryRepo',
	    'TableParentExt' => 'TableParentExtRepo'
	];
    /**
     * With the name of the table, we get the class
     * @param string $tableName
     *
     * @return string[]
     */
    protected function tabletoClass($tableName) {        
        return static::RELATIONS[$tableName];           
    }    
}