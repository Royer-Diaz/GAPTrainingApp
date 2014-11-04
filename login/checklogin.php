<?php
ob_start();
include_once '../db/database_connection.php';
validateUser($connection);

function validateUser ($connection) {
    // username and password sent from form
    $myusername=$_POST['myusername'];
    $mypassword=$_POST['mypassword'];

    // To protect MySQL injection (more detail about MySQL injection)
    $myusername = stripslashes($myusername);
    $mypassword = stripslashes($mypassword);
    $myusername = mysqli_real_escape_string($connection,$myusername);
    $mypassword = mysqli_real_escape_string($connection,$mypassword);

    //$encrypted_mypassword=md5($mypassword);

    $tbl_name="User u INNER JOIN UserProject up on u.userId = up.userId INNER JOIN Project p on p.projectId = up.projectId"; // Table name
    // User query
    $sql="SELECT p.projectId, p.projectName, p.projectDescription, p.projectImagePath FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";
    $result=mysqli_query($connection,$sql);

    // Mysql_num_row is counting table row
    $count=$result->num_rows;

    // If result matched $myusername and $mypassword, table row must be 1 row
    if($count==1){
        session_start();
        verifyAmountOfProjects($result);
        $_SESSION['myusername']=$myusername;
        $_SESSION['mypassword']=$mypassword;
        session_write_close();
        echo true;
        return;
    }
    else {
        echo false;
        return;
    }

}

function verifyAmountOfProjects($result) {
    $projects = array();
    while ($row = mysqli_fetch_assoc($result)){
        $value = array(
            'projectId' => $row['projectId'],
            'projectName' => $row['projectName'],
            'projectDescription' => $row['projectDescription'],
            'projectImagePath' => $row['projectImagePath']);
        array_push($projects, $value);
    }
    $jsonProjects = json_encode($projects);
    $_SESSION['projects']=$jsonProjects;
    $num_rows = mysqli_num_rows($result);
    $_SESSION['num_rows']=$num_rows;
    return;
}

ob_end_flush();
?>