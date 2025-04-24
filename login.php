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