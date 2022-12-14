<?php 
require("./db.php");

//  Sub
$sql = "CREATE TABLE sub (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    reg INT(5) NOT NULL,
    reg_file VARCHAR(125),
    sy_file VARCHAR(125),
    oe_file VARCHAR(125),
    dept VARCHAR(10) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table sub created successfully<br>";
}

// seminars
$sql = "CREATE TABLE sem (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(500) NOT NULL,
    org VARCHAR(500) NOT NULL,
    start_date DATETIME NOT NULL,
    end_date DATETIME NOT NULL,
    guest VARCHAR(500) NOT NULL,
    dept VARCHAR(10) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table Sem created successfully<br>";
}

// achievement
$sql = "CREATE TABLE ac (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(500) NOT NULL,
    content VARCHAR(500) NOT NULL,
    ac_date DATETIME NOT NULL,
    title VARCHAR(50) NOT NULL,
    dept VARCHAR(10) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table Achievement created successfully<br>";
}

// lab
$sql = "CREATE TABLE mou (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(500) NOT NULL,
    pdf VARCHAR(500) NOT NULL,
    content VARCHAR(500) NOT NULL,
    mou_year INT(6) NOT NULL,
    dept VARCHAR(10) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
    
if ($conn->query($sql) === TRUE) {
    echo "Table mou created successfully<br>";
}

// lab
$sql = "CREATE TABLE lab (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(500) NOT NULL,
    pdf VARCHAR(500) NOT NULL,
    img VARCHAR(500) NOT NULL,
    dept VARCHAR(10) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
    
if ($conn->query($sql) === TRUE) {
    echo "Table Lab created successfully<br>";
}

// news
$sql = "CREATE TABLE news (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(500) NOT NULL,
    pdf VARCHAR(500) NOT NULL,
    dept VARCHAR(10) NOT NULL,
    news_date DATETIME NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
    
if ($conn->query($sql) === TRUE) {
    echo "Table News created successfully<br>";
}

// event
$sql = "CREATE TABLE event (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(500) NOT NULL,
    pdf VARCHAR(500) NOT NULL,
    img VARCHAR(500) NOT NULL,
    dept VARCHAR(10) NOT NULL,
    event_date DATETIME NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
    
if ($conn->query($sql) === TRUE) {
    echo "Table Event created successfully<br>";
}


// staff
$sql = "CREATE TABLE staff (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(500) NOT NULL,
    position VARCHAR(500) NOT NULL,
    email VARCHAR(500) NOT NULL,
    pic VARCHAR(500) NOT NULL,
    place INT(10) NOT NULL,
    dept VARCHAR(10) NOT NULL,
    pdf VARCHAR(500) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
    
if ($conn->query($sql) === TRUE) {
    echo "Table staff created successfully<br>";
}

$conn->close();


?>