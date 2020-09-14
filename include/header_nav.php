<header>
    <nav id="header_nav">
        <div id="logo">
            <a href="index.php">
                <h1>Movie<span class="second_title_logo">Dvice</span></h1>
            </a>
        </div>
        <div id="content-header-right">
            <ul class="nav_categorie">
                <li><a href="news.php">News</a></li>
                <div class="dropdown">
                    <li><a href="global_critique.php">Film/série</a></li>
                    <div class="dropdown-child">
                        <div class="bloc">
                            <ul>
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Aventure</a></li>
                                <li><a href="#">Animation</a></li>
                                <li><a href="#">Drame</a></li>
                                <li><a href="#">Comédie</a></li>
                            </ul>
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
                        <a href="global_critique.php" class="showMore">Voir Plus >></a>
                    </div>
                </div>
                <li><a href="contact.php">Nous contacter</a></li>
                <li class="search_content"><a class="lien" href="media_inside.php?video_id=">
                <img src="IMG/search.png" alt="Recherche"></a>
                <input type="text" name="search" id="suggest" placeholder="...Search" list="test" autocomplete="off" >
                <div id="test">

                </div>
</li>
                <div class="login">
                    <li>
                        <?php
                        if (!empty($_SESSION) && $_SESSION['user']->user_droit >= 0) {
                        ?>
                            <a href="" data-toggle="modal" data-target="#decoModal">
                                <!-- <div>Icons made by <a href="https://www.flaticon.com/authors/srip" title="srip">srip</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div>-->
                                <img src="IMG/login.png" alt="login">
                            </a>
                        <?php
                        }
                        if (isset($_POST['deco'])) {
                            session_destroy();
                            header("Location: index.php?deco=ok");
                        ?>
                            <a href="" data-toggle="modal" data-target="#exampleModal">
                                <!-- <div>Icons made by <a href="https://www.flaticon.com/authors/srip" title="srip">srip</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div>-->
                                <img src="IMG/login.png" alt="login">
                            </a>
                            <?php
                            exit;
                            ?>

                        <?php
                        }
                        if (empty($_SESSION['user']) || (isset($_POST['deco']))) {
                        ?>
                            <a href="" data-toggle="modal" data-target="#exampleModal">
                                <!-- <div>Icons made by <a href="https://www.flaticon.com/authors/srip" title="srip">srip</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div>-->
                                <img src="IMG/login.png" alt="login">
                            </a>
                        <?php
                        }
                        ?>
                    </li>
                </div>
            </ul>
            <div class="burger">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
        </div>
    </nav>
</header>