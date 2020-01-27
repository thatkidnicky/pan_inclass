<?php 
    require_once '../load.php';

    $ip = $_SERVER['REMOTE_ADDR'];

    if(isset($_POST['submit'])){
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);

        if(!empty($username) && !empty($password)){
            //Log usr in
            $result = login($username, $password);
        }else{
            $message = 'Please fill ot requred field';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
</head>
<body>
    <h2>Login Page</h2>
    <?php echo !empty($message)? $message: '';?>
    <form action="admin_login.php" method="post">
        <label for="">Username:</label>
        <input type="text" name="username" id="username" value="">

        <label for="">Password:</label>
        <input type="text" name="password" id="password" value=""> 

        <button name="submit">Submit</button>      
    </form>
</body>
</html>