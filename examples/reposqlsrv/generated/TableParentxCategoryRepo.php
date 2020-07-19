<?php
/** @noinspection PhpUnused
 * @noinspection ReturnTypeCanBeDeclaredInspection
 */
namespace reposqlsrv;
use sqlsrv\repomodel\TableParentxCategoryModel;
use Exception;

/**
 * Generated by PdoOne Version 1.51 Date generated Sun, 19 Jul 2020 13:29:24 -0400. 
 * EDIT THIS CODE.
 * @copyright (c) Jorge Castro C. MIT License  https://github.com/EFTEC/PdoOne
 * Class TableParentxCategoryRepo
 * <pre>
 * $code=$pdoOne->generateCodeClassRepo(''TableParentxCategory'',''reposqlsrv'','array('TableParent'=>'TableParentRepo','TableChild'=>'TableChildRepo','TableGrandChild'=>'TableGrandChildRepo','TableGrandChildTag'=>'TableGrandChildTagRepo','TableParentxCategory'=>'TableParentxCategoryRepo','TableCategory'=>'TableCategoryRepo','TableParentExt'=>'TableParentExtRepo',)',''sqlsrv\repomodel\TableParentxCategoryModel'');
 * </pre>
 */
class TableParentxCategoryRepo extends AbstractTableParentxCategoryRepo
{
    const ME=__CLASS__; 
    const MODEL= TableParentxCategoryModel::class;
  
    
}