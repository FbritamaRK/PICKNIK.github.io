<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../css/logregPage.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    
    <div class="registerPage">
        <form action="../php/login.php" method="post">

            <div class="judul">
                <h1>Login</h1>
            </div>

            <div class="logo-container">
                <img src="../images/Picknik-removebg-preview.png" alt="Logo">
            </div>

            <div class="input-box">
                <div class="input-field">
                    <input type="text" name="usr" id="Usr" placeholder="Username" >
                    <ion-icon name="person"></ion-icon>
                </div>

                <div class="input-field">
                    <input type="password" name="pwd" id="PWD" placeholder="Password">
                    <ion-icon name="lock-closed"></ion-icon>
                </div>
            </div>
            
            <p>Belum Punya Akun?</p>

            <ul>
            <a href="register.php">Sign Up</a>
            </ul>
            <button class="button">Login</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- 
    - ionicon link
    -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
</html>