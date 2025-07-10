
<?php
$host = "localhost";
$port = "5432";
$username = "postgres";
$password = "nn24"; 
$dbname = "WaterBottle Coursework"; 
try{
    //connecting to default 'postgres' database
    $dsn = "pgsql:host=$host;port=$port;dbname=postgres";
    $conn = new PDO($dsn, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //checking if target database exists
    $stmt = $conn->prepare("SELECT 1 FROM pg_database WHERE datname = :dbname");
    $stmt->execute([':dbname'=> $dbname]);
    if($stmt->fetch()){
        if(!empty($allow_output)){
            echo "Database '$dbname' already exists.\n";
        }
    } else {
        //creating target database
        $conn->exec('CREATE DATABASE \"$dbname\"');
        if(!empty($allow_output)){
            echo "Database '$dbname' created successfully.\n";
        }
    }
}
//connecting to target database
$dsnTarget = "pgsql:host=$host;port=$port;dbname=$dbname";
$db = new PDO($dsnTarget, $username, $password);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
if(!empty($allow_output)){
    echo "Connected to database '$dbname' successfully.\n";
} catch(PDOException $e){
    die("Database connection failed: " . $e->getMessage());
}
?>
