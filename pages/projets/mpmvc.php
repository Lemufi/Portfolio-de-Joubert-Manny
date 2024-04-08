<!DOCTYPE html>
<html lang="fr" data-wf-page="5e8a723dc663ab416e6bfe24">

<head>
    <meta charset="utf-8" />
    <title>Lemufi</title>
    <meta content="width=device-width, initial-scale=1" name="viewport" />

    <link href="../../images/chat/LECHAT.png" rel="shortcut icon" type="image/x-icon" /> <!-- A Changer -->

    <link href="../../css/mac.css" rel="stylesheet" type="text/css" />
    <link href="../../css/testimonial.css" rel="stylesheet" type="text/css" />
    <link href="../../css/thumbnail.css" rel="stylesheet" type="text/css" />
    <link href="../../css/responsive.css" rel="stylesheet" type="text/css" />
    <link href="../../css/styles.css" rel="stylesheet" type="text/css" />
    <link href="../../css/cv.css" rel="stylesheet" type="text/css" />

    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous" />

    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/medium-zoom/dist/medium-zoom.min.js"></script>
    <script src="../../js/text.js" type="text/javascript"></script>
    <script src="../../js/caroussel.js" type="text/javascript"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const zoom = mediumZoom('[data-zoomable]', {
                margin: 0,
                background: '#00500'
            });

        });
    </script>

    <style>
        .medium-zoom-overlay,
        .medium-zoom-image--opened {
            z-index: 9999 !important;
            border: 4px solid black !important;
            background: rgba(0, 0, 0, 0.7) !important;
        }

        .header {
            z-index: 1;
        }
    </style>

</head>

<body>
    <div data-collapse="medium" data-animation="default" data-duration="400" data-easing="ease" data-easing2="ease"
        role="banner" class="header w-nav">
        <div class="w-embed">
            <style>
                html {
                    font-size: 62.5%;
                }

                html,
                body,
                .site-container {
                    cursor: url('../../images/Souris/souris_grise.svg'), auto;
                    cursor: -webkit-image-set(url('../../images/Souris/souris_grise.svg') 1x,
                            url('../../images/Souris/souris_grise.svg') 2x), auto;
                }

                a,
                .dropdown-toggle,
                .button {
                    cursor: url('../../images/Souris/souris_noire.svg'), auto;
                    cursor: -webkit-image-set(url('../../images/Souris/souris_noire.svg') 1x,
                            url('../../images/Souris/souris_noire.svg') 2x), auto;
                }

                /*width*/
                .site-container::-webkit-scrollbar {
                    width: 14px;
                }

                /*track*/
                .site-container::-webkit-scrollbar-track {
                    background: url("https://assets.website-files.com/5e83fdebae1ad8747ffce684/5e864de332df030389abf5bd_pattern-grey.svg");
                    ;
                    background-size: 6px;
                    border-left: 4px solid #000000;
                }

                /*thumb*/
                .site-container::-webkit-scrollbar-thumb {
                    background: #c4c4c4;
                    border: 4px solid #000000;
                    border-right: none;
                }

                /*thumb hover*/
                .site-container::-webkit-scrollbar-thumb:hover {
                    background: #ffffff;
                }

                /*thumb pressed*/
                .site-container::-webkit-scrollbar-thumb:active {
                    background: #ffffff;
                }

                .header {
                    width: calc(100% - 16px);
                }

                .site-container {
                    height: calc(100vh - 68px);
                    overflow-x: hidden;
                    overflow-y: scroll;
                    margin-top: -4px;
                    margin-bottom: -4px;
                }

                @media screen and (min-width: 768px) {
                    .header {
                        width: calc(100% - 24px);
                    }
                }

                @media screen and (min-width: 991px) {
                    .header {
                        width: calc(100% - 40px);
                    }

                    .site-container::-webkit-scrollbar {
                        width: 24px;
                    }

                }
            </style>
        </div>

        <!-- Navigation Header -->
        <a href="/" aria-current="page" class="logo-wrapper w-nav-brand w--current">
            <img src="../../images/chat/LECHAT.png" alt="Website Logo" class="logo" />
        </a>

        <nav role="navigation" class="nav-menu w-nav-menu">
            <a href="../projects.php" data-w-id="1b0214a5-408b-540b-64df-3835fd7e4438"
                class="nav-link w-nav-link">Projets</a>
            <a href="../cv.php" data-w-id="1b0214a5-408b-540b-64df-3835fd7e443a" class="nav-link w-nav-link">CV</a>
            <a href="../veilleTechno.php" data-w-id="1b0214a5-408b-540b-64df-3835fd7e443c"
                class="nav-link w-nav-link">Veille Informatique</a>
            <div data-hover="true" data-delay="0" class="w-dropdown">
                <div data-w-id="1b0214a5-408b-540b-64df-3835fd7e4441" class="dropdown-toggle w-dropdown-toggle">
                    <div>Me Retrouver</div>
                </div>
                <nav class="nav-dropdown-list w-dropdown-list">
                    <a href="https://www.linkedin.com/in/mannyjoubert/" target="_blank"
                        class="nav-dropdown-link w-dropdown-link">Sur Linkedin</a>
                    <a href="https://github.com/Lemufi" target="_blank" class="nav-dropdown-link w-dropdown-link">Sur
                        Github</a>
                    <a href="https://www.instagram.com/mannyjbr/" target="_blank"
                        class="nav-dropdown-link w-dropdown-link">Sur Instagram</a>
                </nav>
            </div>
        </nav>
        <div class="menu-button w-nav-button">
            <div class="w-icon-nav-menu"></div>
        </div>

    </div>

    <div class="site-container">

        <h1 class="titreveille">Mon Petit MVC</h1>

        <div class="containerVeille">
            <div class="modal-wrapper">
                <div class="modal-header">
                    <div class="button-circles-wrap"><a href="/" class="button-circle close w-inline-block"></a>
                        <div class="button-circle"></div>
                    </div>
                    <div class="flex-center">
                        <div>MonPetitMvc</div>
                        <div>-project.html</div>
                    </div>
                </div>
                <div class="w-embed modal-body">
                    <div class="carousel">
                        <div class="slides">
                            <div class="slide imgslide"><img src="../../images/MonPetitMvc/CreerClient.PNG" data-zoomable></div>
                            <div class="slide imgslide"><img src="../../images/MonPetitMvc/RechercheClient.PNG" data-zoomable></div>
                            <div class="slide imgslide"><img src="../../images/MonPetitMvc/SortieRechercheClient.PNG" data-zoomable></div>
                        </div>
                        <button class="prev">&#10094;</button>
                        <button class="next">&#10095;</button>
                    </div>
                </div>    
            </div>
        </div>

        <div class="projetsuivant"><a href="xpha.php"
                                        class="button w-button">Voir le projet suivant</a></div>
                                        <div class="projetsuivant"><a href="https://github.com/Lemufi/MonPetitMVC"
                                        class="button w-button">Voir sur github</a></div>

    </div>

    <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=5e87e737ee7085b9ba02c101"
        type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous">
        </script>
    <script src="https://assets.website-files.com/5e87e737ee7085b9ba02c101/js/webflow.be692164d.js"
        type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js" type="text/javascript"></script>
    <script src="../js/dropbar.js" type="text/javascript" </script>
</body >
</html >