<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- ===== Boxicons CSS ===== -->
        <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="./css/styles.css">

        <title>Responsive bottom navigation</title>
    </head>
    <body>
       
        <!--=============== HEADER ===============-->
        <header class="header" id="header">
            <nav class="nav container">
                <a href="#" class="nav__logo">Logo</a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="Accueil" class="nav__link texte active-link">
                                <i class='bx bx-home-alt nav__icon'></i>
                                <span class="nav__name">Accueil</span>
                            </a>
                        </li>

                       
                        
                        <li class="nav__item">
                            <a href="#Histoire" class="nav__link">
                                <i class='bx bx-user nav__icon'></i>
                                <span class="nav__name">Histoire</span>
                            </a>
                        </li>

                        <li class="nav__item">
                            <a href="#Rites-Clans" class="nav__link">
                                <i class='bx bx-book-alt nav__icon'></i>
                                <span class="nav__name">Rites-Clans</span>
                            </a>
                        </li>

                        <li class="nav__item">
                            <a href="#Activités" class="nav__link">
                                <i class='bx bx-briefcase-alt nav__icon'></i>
                                <span class="nav__name">Activités</span>
                            </a>
                        </li>

                        <li class="nav__item">
                            <a href="#Lexique" class="nav__link">
                                <i class='bx bx-message-square-detail nav__icon'></i>
                                <span class="nav__name">Lexique</span>
                            </a>
                        </li>
                    </ul>
                </div>


                <div class="darkLight-searchBox">
                    <div class="dark-light">
                        <i class='bx bx-moon moon'></i>
                        <i class='bx bx-sun sun'></i>
                    </div>
    
                   
    
                      
                    </div>
                </div>
            </nav>
        </header>

        <main>
            <!--=============== HOME ===============-->
            <section class="container section section__height" id="Accueil">
                <h2 class="section__title">Accueil</h2>
            </section>

            <!--=============== ABOUT ===============-->
            <section class="container section section__height" id="Histoire">
                <h2 class="section__title">Histoire</h2>
            </section>

            <!--=============== SKILLS ===============-->
            <section class="container section section__height" id="Rites-Clans">
                <h2 class="section__title">Rites-Clans</h2>
            </section>

            <!--=============== PORTFOLIO ===============-->
            <section class="container section section__height" id="Activités">
                <h2 class="section__title">Activités</h2>
            </section>

            <!--=============== CONTACTME ===============-->
            <section class="container section section__height" id="Lexique">
                <h2 class="section__title">Lexique</h2>
            </section>
        </main>
        

        <!--=============== MAIN JS ===============-->
        <script src="./js/main.js"></script>
    </body>
</html>