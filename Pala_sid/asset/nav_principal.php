<div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
        <a class="navbar-brand" href="index.html">Menu</a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li class="animated fadeInLeft">
                <a href="index.html">Actuellement</a>
                <?php 
                if (strpos($_SERVER['HTTP_REFERER'], 'index.html'))
                { ?>
                	<center><img src="./SVG/vague bas.svg" style="width:60px; height:60px;"></center>
                <?php
                } ?>
            <li class="animated fadeInLeft">
              <a href="compagnie.html">La compagnie</a>
                 <?php 
                if (strpos($_SERVER['HTTP_REFERER'], 'compagnie.html'))
                { ?>
             	<center><img src="./SVG/vague ht.svg" style="width:60px; height:60px;"></center> 
                <?php
                } ?>
            </li>
            <li class="animated fadeInUp">
                <a href="spectacle.html">Spectacles</a>
                <?php 
                if (strpos($_SERVER['HTTP_REFERER'], 'spectacle.html'))
                { ?>
                	<center><img src="./SVG/vague bas.svg" style="width:60px; height:60px;"></center>
                <?php
                } ?>
            </li>
            <li class="animated fadeInRight">
                <a href="projet.html">Créations en cours</a>
                <?php 
                if (strpos($_SERVER['HTTP_REFERER'], 'projet.html'))
                { ?>
                	<center><img src="./SVG/vague ht.svg" style="width:60px; height:60px;"></center>
                <?php
                } ?>
            </li>
            <li class="animated fadeInRight">
                <a href="contact.html#ancre_nav">Contacts</a>
                <?php 
                if (strpos($_SERVER['HTTP_REFERER'], 'contact.html'))
                { ?>
                	<center><img src="./SVG/vague bas.svg" style="width:60px; height:60px;"></center>
                <?php
                } ?>
            </li>
        </ul>
    </div>
    <!-- /.navbar-collapse -->
</div>
<!-- /.container -->
<a name="haut" id="haut"></a>