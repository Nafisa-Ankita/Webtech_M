<?php 

require_once 'db_connect.php';


function showAllResturants(){
	$conn = db_conn();
    $selectQuery = 'SELECT * FROM `resturant_info` where Display = 1 ';
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function showResturant($id){
	$conn = db_conn();
	$selectQuery = "SELECT * FROM `resturant_info` where ID = ?";

    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}

function searchResturant($resturant_name){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `resturant_info` WHERE Name LIKE '%$resturant_name%'";

    
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}


function addResturant($data){
	$conn = db_conn();
    $selectQuery = "INSERT into resturant_info (Name, Location, ContactNumber, Email, image, Display)
VALUES (:name, :location, :contactNumber, :email, :image, :display)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	':name' => $data['name'],
        	':location' => $data['location'],
        	':contactNumber' => $data['contactNumber'],
        	':email' => $data['email'],
        	':image' => $data['image'],
            ':display' => $data['display']
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}


function updateResturant($id, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE resturant_info set Name = ?, Location = ?, ContactNumber = ? where ID = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	$data['name'], $data['location'], $data['contactNumber'], $id
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function deleteResturant($id){
	$conn = db_conn();
    $selectQuery = "DELETE FROM `resturant_info` WHERE `ID` = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}