<?php
$allow_output = true; 
include_once('connection.php');

try{
    //creating schemas
    $db->exec('CREATE SCHEME IF NOT EXISTS "WB";'); //whereby WB stands for water bottles 
    echo"<br><br>Schema 'WB' created successfully.";

    //creating UUID extensions for random numbers
    $db->exec('CREATE EXTENSION IF NOT EXISTS "uuid-ossp";');
    echo"<br><br> Extension 'uuid-ossp' created successfully.";
    
    //dropping the Users Table
    $db->exec('DROP TABLE IF EXISTS "WB"."tblUsers";');
    echo"<br><br> Table 'tblUsers' dropped successfully.";

    //dropping the Products table
    $db->exec('DROP TABLE IF EXISTS ""WB"."tblProducts";');
    echo"<br><br> Table 'tblProducts' dropped successfully.";

    //dropping the Basket table
    $db->exec('DROP TABLE IF EXISTS "WB"."tblBasket";');
    echo"<br><br> Table 'tblBasket' dropped successfully.";

    //dropping the Order table
    $db->exec('DROP TABLE IF EXISTS "WB"."tblOrder";');
    echo"<br><br> Table 'tblOrder' dropped successfully.";

    //dropping Reviews Table
    $db->exec('DROP TABLE IF EXISTS "WB"."tblReviews";');
    echo"<br><br> Table 'tblReviews' dropped successfully.";

    //dropping type table
    $db->exec('DROP TABLE IF EXISTS "WB"."tblType";');
    echo "<br><br> Table 'tblType' dropped successfully.";


}

?>