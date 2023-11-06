<?php

require_once 'Test1.php';
require_once 'function.php';
$pdo= connectToDb();
$tasks= selectAll($pdo, 'test1','Test1');

require_once 'index.view.php';

require_once 'index.html';
?>



