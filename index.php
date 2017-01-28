<html>


<head>
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
<title><?php echo file_get_contents('engine/title.txt'); ?></title>
</head>
<body>
    <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
      <header class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-600">
        <div class="mdl-layout__header-row"><?php echo file_get_contents('engine/title.txt'); ?>
          <span class="mdl-layout-title"></span>
          <div class="mdl-layout-spacer"></div>
          
        </div>
      </header>
      <div class="demo-drawer mdl-layout__drawer mdl-color--blue-grey-900 mdl-color-text--blue-grey-50">
        <header class="demo-drawer-header">
          
          <div class="demo-avatar-dropdown">
         <?php echo file_get_contents('engine/title.txt'); ?>
            <div class="mdl-layout-spacer"></div>
            <button id="accbtn" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
            

          </div>
        </header>
        <nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800">
                    <a class="mdl-navigation__link" href="/"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">home</i><?php
             echo file_get_contents("engine/homename.txt");
             ?></a>
          <a class="mdl-navigation__link" href="homework/"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">list</i><?php
             echo file_get_contents("engine/homeworkname.txt");
             ?></a>
          <a class="mdl-navigation__link" href="photo/"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">photo</i><?php
             echo file_get_contents("engine/photoname.txt");
             ?></a>
          <div class="mdl-layout-spacer"></div>
          <a class="mdl-navigation__link" href="help/"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">help_outline</i><?php
             echo file_get_contents("engine/helpname.txt");
             ?></a>
        </nav>
      </div>
      <main class="mdl-layout__content mdl-color--grey-100">
        <div class="mdl-grid demo-content">


            </div> <div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
            <?php echo file_get_contents('engine/newshomename.txt'); ?>
            
            <div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
          
            <?php
             echo file_get_contents("engine/news.txt");
             ?>

            </div>
    </div>
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  </body>

</html>