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
namespace sqlsrv\repomodel;
use eftec\PdoOne;
use Exception;

/**
 * Generated by PdoOne Version 1.51 Date generated Sun, 19 Jul 2020 13:29:24 -0400. 
 * DO NOT EDIT THIS CODE. THIS CODE WILL SELF GENERATE.
 * @copyright (c) Jorge Castro C. MIT License  https://github.com/EFTEC/PdoOne
 * Class TableParentxCategoryModel
 * <pre>
 * $code=$pdoOne->generateAbstractModelClass({args});
 * </pre>
 */
abstract class AbstractTableParentxCategoryModel
{
	/** @var int $idtablaparentPKFK  */
	public $idtablaparentPKFK;
	/** @var int $idcategoryPKFK  */
	public $idcategoryPKFK;

	/** @var TableCategoryModel $_idcategoryPKFK manytoone */
    public $_idcategoryPKFK;
	/** @var TableParentModel $_idtablaparentPKFK onetoone */
    public $_idtablaparentPKFK;

    //<editor-fold desc="array conversion">
    public static function fromArray($array) {
        if($array===null) {
            return null;
        }
        $obj=new TableParentxCategoryModel();
		$obj->idtablaparentPKFK=isset($array['idtablaparentPKFK']) ?  $array['idtablaparentPKFK'] : null;
		$obj->idcategoryPKFK=isset($array['idcategoryPKFK']) ?  $array['idcategoryPKFK'] : null;
		$obj->_idcategoryPKFK=isset($array['_idcategoryPKFK']) ? 
            $obj->_idcategoryPKFK=TableCategoryModel::fromArray($array['_idcategoryPKFK']) 
            : null; // manytoone
		$obj->_idtablaparentPKFK=isset($array['_idtablaparentPKFK']) ?  
            $obj->_idtablaparentPKFK=TableParentModel::fromArray($array['_idtablaparentPKFK']) 
            : null; // onetoone

        return $obj;
    }
    public function toArray() {
        return (array) $this;
    }
    public static function fromArrayMultiple($array) {
        if($array===null) {
            return null;
        }
        $objs=[];
        foreach($array as $v) {
            $objs[]=self::fromArray($v);
        }
        return $objs;
    }
    //</editor-fold>
    
} // end class