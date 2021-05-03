<?php

// Connect Database
require_once "db.php";

// Admin Login script
if (isset($_POST['adminlogin_btn'])) {

    $email = $conn->real_escape_string($_POST['email']);
    $password = $conn->real_escape_string($_POST['password']);
    $firstName = $conn->real_escape_string($_POST['firstName']);
    $lastName = $conn->real_escape_string($_POST['lastName']);
    $position = $conn->real_escape_string($_POST['position']);
    $status = $conn->real_escape_string($_POST['status']);

    $password = sha1($password);
    $query = "SELECT * FROM admin WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_array($result)) {
        $firstName = $row['firstName'];
        $lastName = $row['lastName'];
        $email = $row['email'];
        $id = $row['id'];
        $status = $row['status'];
        $position = $row['position'];
        $picture = $row['picture'];
    }if (mysqli_num_rows($result) == 1) {
        $_SESSION['firstName'] = $firstName;
        $_SESSION['lastName'] = $lastName;
        $_SESSION['position'] = $position;
        $_SESSION['picture'] = $picture;
        $_SESSION['email'] = $email;
        $_SESSION['phone'] = $phone;
        $_SESSION['id'] = $id;
        if ($status == 'Inactive'){
            $_SESSION['message_title'] = "Account Inactive";
            $_SESSION['message'] = "Please contact admin!";
        }if ($status == 'Active') {
            if ($position == 'Admin') {
                header('location: dashboard');
            }if ($position == 'Super Admin') {
                header('location: dashboard');
            }
        }
    }else {
        $_SESSION['message_title'] = "Incorrect Details";
        $_SESSION['message'] = "Please login with correct credentials!";
    }
}


//Rent a Space Query
if (isset($_POST['rentshop_btn'])) {

    $email = $conn->real_escape_string($_POST['email']);
    $fullName = $conn->real_escape_string($_POST['fullName']);
    $companyName = $conn->real_escape_string($_POST['companyName']);
    $phoneNum = $conn->real_escape_string($_POST['phoneNum']);
    $comment = $conn->real_escape_string($_POST['comment']);

    // Finally, insert details into database
    $query = "INSERT INTO rentspace (email, fullName, companyName, phoneNum, comment) 
  			        VALUES('$email', '$fullName', '$companyName', '$phoneNum', '$comment')";
    mysqli_query($conn, $query);
    if (mysqli_affected_rows($conn) > 0) {
        $_SESSION['success_message_title'] = "Request Sent!";
        $_SESSION['success_message'] = "We will get back to you ASAP.";
    }else {
        $_SESSION['message_title']  = "Request Failed";
        $_SESSION['message']    = "Error sending request now: ".mysqli_error($conn).$id;
    }
}



//Infomation Request Query
if (isset($_POST['inforequest_btn'])) {

    $email = $conn->real_escape_string($_POST['email']);
    $fullName = $conn->real_escape_string($_POST['fullName']);
    $service = $conn->real_escape_string($_POST['service']);
    $phoneNum = $conn->real_escape_string($_POST['phoneNum']);
    $comment = $conn->real_escape_string($_POST['comment']);

    // Finally, insert details into database
    $query = "INSERT INTO inforequest (email, fullName, service, phoneNum, comment) 
  			        VALUES('$email', '$fullName', '$service', '$phoneNum', '$comment')";
    mysqli_query($conn, $query);
    if (mysqli_affected_rows($conn) > 0) {
        $_SESSION['success_message_title'] = "Contact Request Sent!";
        $_SESSION['success_message'] = "We will get back to you ASAP.";
    }else {
        $_SESSION['message_title']  = "Request Failed";
        $_SESSION['message']    = "Error sending request now: ".mysqli_error($conn).$id;
    }
}