<!doctype html>
<!--
  Material Design Lite
  Copyright 2015 Google Inc. All rights reserved.

  Licensed under the Apache License, Version 2.0 (the "License");
  you may not use this file except in compliance with the License.
  You may obtain a copy of the License at

      https://www.apache.org/licenses/LICENSE-2.0

  Unless required by applicable law or agreed to in writing, software
  distributed under the License is distributed on an "AS IS" BASIS,
  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
  See the License for the specific language governing permissions and
  limitations under the License
-->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title> <?php echo file_get_contents('engine/title.txt'); ?></title>

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="images/android-desktop.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Material Design Lite">
    <link rel="apple-touch-icon-precomposed" href="images/ios-desktop.png">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#3372DF">

    <link rel="shortcut icon" href="images/favicon.png">

    <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
    <!--
    <link rel="canonical" href="http://www.example.com/">
    -->

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.cyan-light_blue.min.css">
    <link rel="stylesheet" href="styles.css">
    <style>
    #view-source {
      position: fixed;
      display: block;
      right: 0;
      bottom: 0;
      margin-right: 40px;
      margin-bottom: 40px;
      z-index: 900;
    }
    </style>
  </head>
  <body>
    <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
      <header class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-600">
        <div class="mdl-layout__header-row">
          <span class="mdl-layout-title"> <?php echo file_get_contents('../engine/title.txt'); ?></span>
          <div class="mdl-layout-spacer"></div>
          
        </div>
      </header>
      <div class="demo-drawer mdl-layout__drawer mdl-color--blue-grey-900 mdl-color-text--blue-grey-50">
        <header class="demo-drawer-header">
          
          <div class="demo-avatar-dropdown">
 <?php echo file_get_contents('../engine/title.txt'); ?>
            <div class="mdl-layout-spacer"></div>
            <button id="accbtn" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
           

          </div>
        </header>
        <nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800">
                    <a class="mdl-navigation__link" href="/"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">home</i><?php
             echo file_get_contents("../engine/homename.txt");
             ?></a>
          <a class="mdl-navigation__link" href="../homework/"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">list</i><?php
             echo file_get_contents("../engine/homeworkname.txt");
             ?></a>
          <a class="mdl-navigation__link" href="../photo/"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">photo</i><?php
             echo file_get_contents("../engine/photoname.txt");
             ?></a>
          <div class="mdl-layout-spacer"></div>
          <a class="mdl-navigation__link" href="../help/"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">help_outline</i><?php
             echo file_get_contents("../engine/helpname.txt");
             ?></a>
        </nav>
      </div>
      <main class="mdl-layout__content mdl-color--grey-100">
        <div class="mdl-grid demo-content">

        <div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
           <?php
             echo file_get_contents("../engine/photonamephoto.txt");
             ?></a>
            </div>
          
<?php
//path to directory to scan. i have included a wildcard for a subdirectory
$directory = "*";
 
//get all image files with a .jpg extension.
$images = glob("" . $directory . "*.jpg");
 
$imgs = '';
// create array
foreach($images as $image){ $imgs[] = "$image"; }
 
//shuffle array
shuffle($imgs);
 
//select first 20 images in randomized array
$imgs = array_slice($imgs, 0, 20);
 
//display images
foreach ($imgs as $img) {
    echo "<p align='center'><div class='demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid'><img style='display: block;margin-left: auto;margin-right: auto ' align='center' wight=440 height=220 src='$img' /></div></p>";
}
?>
    
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  </body>
</html>
