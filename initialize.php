<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// Create database
$sql = "CREATE DATABASE IF NOT EXISTS Kickstart";
if ($conn->query($sql) === TRUE) {
    $dbname = "Kickstart";
    $conn = new mysqli($servername, $username, $password , $dbname);
// sql to create table
$sql = "CREATE TABLE IF NOT EXISTS `tender` (
 `id` int(100) NOT NULL AUTO_INCREMENT,
 `Department` varchar(200) NOT NULL,
 `Work` varchar(500) NOT NULL,
 `Contract` int(100) NOT NULL,
 `BidType` varchar(100) NOT NULL,
 `TenderFee` int(100) NOT NULL,
 `BidEMD` varchar(200) NOT NULL,
 `StartDate` varchar(200) NOT NULL,
 `EndDate` varchar(200) NOT NULL,
 `PreBid` varchar(200) NOT NULL,
 `Receipt` varchar(200) NOT NULL,
 `Submission` varchar(200) NOT NULL,
 `TechnicalBid` varchar(200) NOT NULL,
 `CommercialBid` varchar(200) NOT NULL,
 `maindoc` varchar(200) NOT NULL,
 `download` varchar(1000) NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1";

if ($conn->query($sql) === TRUE) {
    
} else {
    echo "Error creating table: " . $conn->error;
}

} else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();
?>