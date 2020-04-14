<?php
    require "include/header.php";
?>    

<body>

    <?php

        include("include/modal.php");  
        require "include/navbar.php";
    ?>
            
<<<<<<< HEAD
=======
    <?php include("include/modal.php"); ?>
    <?php include("include/modal_comeUp.php"); ?>
    <header>
        <div id="logo">
            <a href="accueil_or_connection.html"><img src="../img/logo.png" alt="logo myIMMO"></a>
        </div>
        <div id="content-header-right">
            <ul class="nav_categorie">
                <li><a href="accueil.html">News</a></li>
                <div class="dropdown">
                    <li><a href="tuto.html">Film/série</a>
                    <li>
                        <div class="dropdown-child">
                            <div class="bloc">
                                <ul>
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Aventure</a></li>
                                    <li><a href="#">Animation</a></li>
                                    <li><a href="#">Drame</a></li>
                                    <li><a href="#">Comédie</a></li>
                                    <ul>
                            </div>
                            <div class="bloc">
                                <ul>
                                    <li><a href="#">Famille</a></li>
                                    <li><a href="#">Guerre</a></li>
                                    <li><a href="#">Science-fiction</a></li>
                                    <li><a href="#">Musical</a></li>
                                    <li><a href="#">Policer</a></li>
                                </ul>
                            </div>
                            <a href="#" class="showMore">Voir Plus >></a>
                        </div>
                </div>
                <li><a href="annonces.html">Nous contacter</a></li>
                <li><input type="search" name="recherche" id="recherche" placeholder="...Search"></li>
                <div class="login">
                    <!-- Button trigger modal -->
                    <li>
                        <a href="" data-toggle="modal" data-target="#exampleModal">
                            <!-- <div>Icons made by <a href="https://www.flaticon.com/authors/srip" title="srip">srip</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div>-->
                            <img src="IMG/login.png" alt="login">
                        </a>
                    </li>
                </div>
            </ul>
            <div class="burger">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
        </div>
    </header>
>>>>>>> d9774ca2d3d298879a57d4877341505396ceb101
=======
>>>>>>> master
    <section>
    <?php include("include/accueil-navigation.php"); ?>
    </section>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="JS/burger.js"></script>
    <script src="JS/modal.js"></script>

</body>

</html>