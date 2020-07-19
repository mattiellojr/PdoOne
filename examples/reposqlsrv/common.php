<?php

use eftec\PdoOne;
use mapache_commons\Collection;
use reposqlsrv\TableParentRepo;


include '../../vendor/autoload.php';
include '../Collection.php';
include "../dBug.php";

include "generated/TestDb.php";

include 'generated/TableGrandChildRepoExt.php';
include 'generated/TableGrandChildRepo.php';
include 'generated/TableCategoryRepoExt.php';
include 'generated/TableCategoryRepo.php';
include 'generated/TableChildRepoExt.php';
include 'generated/TableChildRepo.php';
include 'generated/TableGrandChildTagRepoExt.php';
include 'generated/TableGrandChildTagRepo.php';
include 'generated/TableParentRepoExt.php';
include 'generated/TableParentRepo.php';
include 'generated/TableParentExtRepoExt.php';
include 'generated/TableParentExtRepo.php';
include 'generated/TableParentxCategoryRepoExt.php';
include 'generated/TableParentxCategoryRepo.php';

include 'generatedmodel/TableGrandChildModel.php';
include 'generatedmodel/TableParentModel.php';
include 'generatedmodel/TableCategoryModel.php';
include 'generatedmodel/TableChildModel.php';
include 'generatedmodel/TableGrandChildTagModel.php';
include 'generatedmodel/TableParentExtModel.php';
include 'generatedmodel/TableParentxCategoryModel.php';


// connecting to database sakila at 127.0.0.1 with user root and password abc.123
$pdoOne=new PdoOne('sqlsrv', 'PCJC\SQLEXPRESS', 'sa', 'abc.123', 'testdb', '');
$pdoOne->logLevel=3;
try {
    echo '<h1>connection. The instance 127.0.0.1, base:sakila  user:root and password:abc.123 must exists</h1>';
    $pdoOne->connect();
} catch (Exception $ex) {

}
