<?php
$conn = mysqli_connect('localhost', 'root', '', 'users');
if($conn->connect_error){
    die( "Sorry! There seems to be a problem connecting to our database.");
}


function addUser($conn, $fname, $lname, $age, $role){
    if($stmt = $conn->prepare("INSERT INTO users (fname, lname, age, `role`) VALUES (?,?,?,?)")){
    $stmt->bind_param("sssi", $fname, $lname, $age, $role);
    $stmt->execute();
    $id = $conn->insert_id;
    echo 'Added ID is: '.$id.'</br>';
    $stmt->close();
    } else {
        die('Error: '.$conn->error);
    }
}

function showContent($conn){
    $stmt = $conn->prepare("SELECT * FROM users ORDER BY `id` ASC");
    $stmt->execute();
    $result = $stmt->get_result();
    while($row = $result->fetch_assoc()){
        echo $row['id']." | ".$row['fname']." | ".$row['lname']." | ".$row['role'].'</br>';
    }
}

?>