<<<<<<< HEAD
<?php 

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "agritech_market";
    
    /************* Procedural ****************/ 
    // create connection
    $conn = mysqli_connect("$servername", "$username", "$password", "$dbname");

    /* Check if the connection succeeded */
    if (!$conn)
    {
       echo 'Connection failed<br>';
       echo 'Error number: ' . mysqli_connect_errno() . '<br>';
       echo 'Error message: ' . mysqli_connect_error() . '<br>';
       die();
    }

?>


=======
<?php 

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "agritech_market";
    
    /************* Procedural ****************/ 
    // create connection
    $conn = mysqli_connect("$servername", "$username", "$password", "$dbname");

    /* Check if the connection succeeded */
    if (!$conn)
    {
       echo 'Connection failed<br>';
       echo 'Error number: ' . mysqli_connect_errno() . '<br>';
       echo 'Error message: ' . mysqli_connect_error() . '<br>';
       die();
    }

?>


>>>>>>> 11296a39b7585d5fef0f5988d7049f03851232be
