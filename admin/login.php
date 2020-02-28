<!DOCTYPE html>
<html>
    <head>
        <title>Little Foot</title>
        <meta charset="utf-8" />
        <link href='../CSS/login.css' rel='stylesheet'/>
    </head>
    <body>
        
        <div id="imageCont">
            <img src="../IMGS/LittleFootLogo.png" id="logo">
        </div>

        <div class="name">Little Foot</div>
        
        <div class="login">
            <form method="POST" action="../PHP/admin-login.php">
                <input type="text" placeholder="username" name="username">
                <input type="text" placeholder="password" name="password">
                
                    <input type="submit" name="submit" class="submit">
            </form>
        </div>
        

        <script src='./JS/login.js'></script>
    </body>
</html>