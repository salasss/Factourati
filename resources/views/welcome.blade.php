<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="images/logo_fact1.ico" type="image/x-icon">
        <title>Factourati</title>
        <link rel="stylesheet" href="css\main.css">
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->

    </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">

            <nav class="navbar">
                <a class="logo" href="#"><img src="/images/Logo/logo_fact1.png" ><span>FACTOURATI</span></a>
                <div class="nav-liens">
                    <ul>
                        <li><a href="index.html">Accueil</a></li>
                        <li><a href="#Information">Information</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
                <div class="nav-connection">
                    <button class="btn-connection" ><span> @if (Route::has('login'))
                        <div>
                            @auth
                                <a href="{{ url('/Compte') }}" >Compte</a>
                            @else
                                <a href="{{ route('login') }}" >SE CONNECTER</a>
                            @endauth
                        </div>
                    </div>
                   </div>
                    @endif</span></button>

                </div>

            </nav>
            <header>
                <section class="s1">
                    <div >
                        <h1>Facturez en toute <br> <span style="color: rgba(0,172,238,1);">simplicité</span> !</h1>
                        <a href='inscription'> <button class="btn-insc"><span> @if (Route::has('register'))
                            <a href="{{ route('register') }}" >commencer dès maintenant</a>
                        @endif </span></button></a>
                    </div>
                </section>
            </header>
            <section id="Information">
                <img src="images/background/contact-3.png" alt="">
                <div>
                <h3>VOTRE LOGICIEL DE FACTURATION PERFORMANT</h3>
                <br>
                <p>Nous avons créé un logiciel de facturation performant qui vous permet de générer des devis et des factures facilement, sans nécessiter une expertise poussée en facturation.</p></div>
            </section>

            <!-- contact -->
            <section id="contact">
                <div class="container">
                    <div class="titre">
                        <h6>Une questions ? Un conseile</h6>
                        <h3>Contactez-nous</h3>
                    </div>
                    <form action="https://formspree.io/f/mknaebdz" method="post">
                        <input type="text" id="firstName" placeholder="Prénom" required>
                        <input type="text" id="lastName" placeholder="Nom" required>
                        <input type="email" id="email" placeholder="Email" required>

                        <textarea name="message"required></textarea>
                        <button type="submit">Envoyer</button>

                    </form>
                </div>
            </section>

            <footer>

                <div class="footer-top">
                    <div class="footer-col">
                      <h5>A propos</h5>
                <a href="#">Services</a>
                <a href="terms.blade.php">CGU</a>
                </div>
                <div class="footer-col">
                       <h5>Ressources</h5>
                <a href="wlkm">Accueil</a>
                 <a href="#information">Information</a>
                 <a href="#contacts">Contacts</a>
                </div>
                 <div class="footer-col">
                        <h5>Aide</h5>
                 <a href="#">Aide et conseils</a>

                 </div>
                </div>
            </footer>



            <script src="js/app.js"></script>


        </div>
    </body>
</html>
