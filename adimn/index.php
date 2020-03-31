<?php
    session_start();
    $noNavbar = '';
    if(isset($_SESSION['Username'])) {
        header('Location: dashboard.php');
    };
    include 'init.php';
        
    // Check if user coming from http post request
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = $_POST['user'];
        $password = $_POST['pass'];  
        $hashedPass = sha1($password); 
        
        // check if the user Exist in Database

        $stmt = $con->prepare("SELECT Username, Password FROM users WHERE Username = ? AND Password = ? AND GroupID = 1");
        $stmt->execute(array($username, $hashedPass));
        $count = $stmt->rowCount();
        
        if($count > 0) {
            $_SESSION['Username'] = $username; //Register Session Name
            header('Location: dashboard.php');
            exit();
        }
    }
    
    ?>

    <form class="login" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        <h3 class="text-center">Admin Login</h3>
        <input class="form-control" type="text" name="user" placeholder="Username" autocomplete="off">
        <input class="form-control" type="password" name="pass" placeholder="Password" autocomplete="new-password">
        <input class="btn btn-primary btn-block" type="submit" value="Login">
    </form>

<?php include $tpl . 'footer.php'; ?>