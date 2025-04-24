<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        session_start();
        require_once "utils/pdo.php";
        $sql = "SELECT * FROM Aziende WHERE email = :email";
        try{
            $stmt = $pdo->prepare($sql);
            $stmt->execute(["email" => $_POST["email"]]);
            $data = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($data && password_verify($_POST["password"], $data['password'])) {
                $_SESSION["user"] = $data['email'];
                header("Location: index.php");
            }
        }catch(PDOException $e){
            die("Errore nel login");
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "utils/head.php" ?>

    <title> Accedi </title>
</head>
<body class="d-flex align-items-center justify-content-center min-vh-100">
    <form class="w-25 rounded-3 bg-altea-blue p-4 shadow-sm" method="POST" action="login.php">
        <div class="mb-3">
            <label for="email" class="form-label">Indirizzo e-mail</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <?php if ($_SERVER["REQUEST_METHOD"] == "POST"):?>
            <p class="text-danger text-center"> Indirizzo e-mail o password non validi </p>
        <?php endif; ?>
        <button type="submit" class="btn btn-altea-dark-denim d-block mx-auto">Submit</button>
    </form>
</body>
</html>