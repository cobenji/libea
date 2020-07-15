<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html xmlns:og="http://ogp.me/ns#">
<head>
    <?= $this->Html->charset() ?>

    <?= $this->fetch('meta') ?>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta property="og:url" content="https://libea.me/">
    <meta property="og:title" content="Libéa - Construire la confiance.">
    <meta property="og:description" content="Une solution qui prend en charge les personnes dépendantes sexuellement et garantit un accompagnement respectueux des droits fondamentaux des personnes.">
    <meta property="og:image" content="https://libea.me/img/libea/libea-icon.png">
    <meta property="og:site_name" content="Libea">

    <meta name="description" content="Une solution qui prend en charge les personnes dépendantes sexuellement et garantit un accompagnement respectueux des droits fondamentaux des personnes.">

    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@Libea_now">
    <meta name="twitter:creator" content="@Libea_now">

    <link rel="apple-touch-icon" sizes="180x180" href="img/libea/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/libea/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/libea/favicon/favicon-16x16.png">
    <link rel="manifest" href="img/libea/favicon/site.webmanifest">



    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-5F4LMMB');</script>
    <!-- End Google Tag Manager -->




    <title>Libéa - Construire la confiance.</title>

    <?= $this->Html->css('base.css') ?>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <?= $this->Html->css('style.css') ?>


    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <script src="https://kit.fontawesome.com/949f9ba2ad.js" crossorigin="anonymous"></script>



    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5F4LMMB"
                      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->



    <header >
        <div class="icon-burger">
            <span></span>
        </div>

        <div class="header-logo">
            <a href="#">
                <img src="img/libea/libea-logo.svg" alt="Logo Libea">
            </a>

        </div>

        <div class="header-btn-info">
            <a href="#" class="btn cta-modal-contact">
                <span class="text">Contact</span>
            </a>

        </div>

        <nav>
            <ul>
                <li><a href="#landDe">Constat</a></li>
                <li><a href="#landTr">LE POURQUOI</a></li>
                <li><a href="#landQu">La solution</a></li>
            </ul>

            <a href="#" class="btn cta-modal-contact">
                <span class="text">Contact</span>
            </a>

            <div class="socialNetwork">
                <a href="https://www.linkedin.com/company/54289896" target="_blanc"><i class="fab fa-linkedin"></i></a>
                <a href="https://twitter.com/Libea_now" target="_blanc"><i class="fab fa-twitter"></i></a>
            </div>

        </nav>


    </header>

    <?= $this->Flash->render() ?>
    <div class="clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
        <div class="nemo">
            <a>Libéa® 2020</a>
            <div>
                <a href="https://libea.me/landing/rgpd">Mentions légales</a>
                <a href="">Kit de Presse</a>
            </div>
        </div>
    </footer>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.6.10/lottie.min.js"></script>
    <script src="js/script.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>




</body>
</html>
