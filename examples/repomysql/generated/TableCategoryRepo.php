<?php
/** @noinspection PhpUnused
 * @noinspection ReturnTypeCanBeDeclaredInspection
 */
namespace repomysql;
use mysql\repomodel\TableCategoryModel;
use Exception;

/**
 * Generated by PdoOne Version 1.51 Date generated Sun, 19 Jul 2020 13:31:38 -0400. 
 * EDIT THIS CODE.
 * @copyright (c) Jorge Castro C. MIT License  https://github.com/EFTEC/PdoOne
 * Class TableCategoryRepo
 * <pre>
 * $code=$pdoOne->generateCodeClassRepo(''TableCategory'',''repomysql'','array('TableParent'=>'TableParentRepo','TableChild'=>'TableChildRepo','TableGrandChild'=>'TableGrandChildRepo','TableGrandChildTag'=>'TableGrandChildTagRepo','TableParentxCategory'=>'TableParentxCategoryRepo','TableCategory'=>'TableCategoryRepo','TableParentExt'=>'TableParentExtRepo',)',''mysql\repomodel\TableCategoryModel'');
 * </pre>
 */
class TableCategoryRepo extends AbstractTableCategoryRepo
{
    const ME=__CLASS__; 
    const MODEL= TableCategoryModel::class;
  
    
}