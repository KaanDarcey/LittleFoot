<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Little Foot</title>
        <meta charset="utf-8" />
        <link href='./CSS/style.css' rel='stylesheet'/>
    </head>
    <body>
        <div class="home-container">
            <div class="home-header">
                <div>
                    <img class='home-header-logo' src='./IMGS/LittleFootLogo.png' alt='logo' />
                    <h3>Little Foot</h3>
                </div>
                <div>
                    <?php
                    if(!isset($_SESSION['user'])){
                        echo "<a href='login.php'><button class='home-header-btn'>Sign In</button></a>";
                    }else{
                        echo "<a href='new-post.php'>Create New Post</a>";                        
                        echo "<a href='PHP/logout.php'>Log Out</a>";
                    }
                    ?>
                    <a href="donate.php">DONATE</a>
                </div>
            </div>
            <div class="home-hero">
                <h2 class="home-hero-title">Little Foot</h2>
                <h4 class="home-hero-subTitle">The first step is hardest of all..</h4>
                <img class='home-hero-img' src='./IMGS/hero.jpeg' alt='hero image'/>
                <div class="home-hero-shade"></div>
            </div>
            <div class="home-about">
                <h2>About Little Foot</h2>
                <p>Little Foot is a non-profit startup organization founded by Kaan Darcey, Karen Cumlat, and Luca Mattia. We had a vision of a clean and sustainable earth, and we have decided to make that vision beocme a reality. Little Foot is an organiation that helps individuals find techniques and tips to reduce their carbon footprints. One individual may not change the world by themselves but every step goes a long way. We believe that Little Foot is one small step in the right direction to save our planet. Please enjoy our articles on environmental sustainability.</p>
            </div>
            <div class='home-icons'>
                <h2>The Three R's</h2>
                <div class="home-icons-columns">
                    <div class='icon-column'>
                        <img src='./IMGS/reduseIcon.png' alt='icon'/>
                        <h4>Reduce</h4>
                        <p>Reduce waste to help keep our oceans, skies, and land clean</p>
                    </div>
                    <div class='icon-column'>
                            <img src='./IMGS/reuseIcon.png' alt='icon'/>
                            <h4>Reuse</h4>
                            <p>Reuse waste to help keep our oceans, skies, and land clean</p>
                    </div>
                    <div class='icon-column'>
                            <img src='./IMGS/recycleIcon.png' alt='icon'/>
                            <h4>Recycle</h4>
                            <p>Recycle waste to help keep our oceans, skies, and land clean</p>
                    </div>
                </div>
            </div>
            <div class="home-articles">
                <h3>Articles</h3>
                
            </div>
            <div class="footer">
                <p> &copy; Copyright Little Foot</p>
            </div>
        </div>
        <script src='./JS/app.js'></script>
    </body>
</html>