<?php
    require_once "utils/pdo.php";
    if($_SERVER[REQUEST_METHOD]=="POST"){
        $sql = " SELECT * FROM Aziende WHERE email = :email ; ";
        try{
            $query = $pdo -> prepare($sql);
            $query -> bindParam("email", $_POST[email], PDO::PARAM_STR);
            $res = $query -> execute();
            $data = $query -> fetch();
            if (password_verify($_POST[password], $data[0] -> password)) {
                $_SESSION[loggato][email] = $data[0] -> email;
                header("location: ./");
            }
        }catch(\PDOException $ex){
            die("Errore: $ex");
        }
        echo 'login';
        exit(-1);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "utils/head.php" ?>

    <title> Accedi </title>
</head>
<body class="d-flex align-items-center justify-content-center min-vh-100">
    
    <form class="w-25 rounded-3 bg-altea-blue p-4 shadow-sm">
        <div class="mb-3">
            <label for="email" class="form-label">Indirizzo e-mail</label>
            <input type="email" class="form-control" id="email">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password">
        </div>
        <button type="submit" class="btn btn-altea-dark-denim d-block mx-auto">Submit</button>
    </form>
</body>
</html>