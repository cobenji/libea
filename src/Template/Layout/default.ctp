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
    <?= $this->Html->meta('icon') ?>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta property="og:url" content="https://libea.me/">
    <meta property="og:title" content="Le site de la Team Mouffette">
    <meta property="og:description" content="La Team Mouffette vous présente son site web de type l'internet">
    <meta property="og:image" content="https://libea.me/img/libea/libea-icon.png">
    <meta property="og:site_name" content="Libea">

    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@jo_CoBen">
    <meta name="twitter:creator" content="@jo_CoBen">

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




    <title> Team Mouffette </title>


    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('style.css') ?>

    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5F4LMMB"
                      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->


    <!--<nav class="top-bar expanded" data-topbar role="navigation">
        <ul class="title-area large-3 medium-4 columns">
            <li class="name">
                <h1><a href=""><?/*= $this->fetch('title') */?></a></h1>
            </li>
        </ul>

    </nav>-->
    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
        <p>Vous pouvez nous suivre sur ces réseaux</p>
        <div>
            <a><img src="" alt></a>
            <a><img src="" alt></a>
            <a><img src="" alt></a>
        </div>
        <div>
            <a>Libéa® 2020</a>
            <a>Mentions légales</a>
            <a>Contact</a>
        </div>
    </footer>



</body>
</html>
