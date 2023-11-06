<?php


require_once 'function.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $pdo = connectToDb();

    $name = $_POST["name"];
    $email = $_POST["email"];
    $gender = $_POST["gender"];
    $city = $_POST["city"];

    $nameError = $emailError = '';

    if (empty($name)) {
        $nameError = 'Name is required';
    }

    if (empty($email)) {
        $emailError = 'Email is required';
    }

    if (empty($nameError) && empty($emailError)) {

    
    
        $sql = "INSERT INTO test1 (name, email, gender, city) VALUES ('$name', '$email', '$gender', '$city')";
        
        $statement = $pdo->prepare($sql);
        $statement -> execute();

        header('Location: index.php');
        exit;
    }else{
        echo "Errors found";
        header('Location: test_html_form.html');
    }}
    // require_once 'index.php';
   
    // exit;

?>