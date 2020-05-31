<nav>
    <ul>
      <?php
    if(isset($_SESSION["pseudo"])) {
        $dir="<li class=\"menu-acceuil\"><a href=\"index.php?page=membre\">acceuil</a>";
        echo $dir;
    }else{
      $dir="<li class=\"menu-acceuil\"><a href=\"index.php?page=home\">acceuil</a>";
      echo $dir;
    }   ?>
          <ul class="submenu">
           
          </ul>
        </li>
        <li class="menu-culture"><a>culture</a>
          <ul class="submenu">
            <li><a href="index.php?page=religion">religion</a></li>
            <li><a href="index.php?page=histoire">histoire</a></li>
            <li><a href="index.php?page=economie">economie</a></li>
            <li><a href="index.php?page=politique">politique</a></li>
          </ul>
       </li>
       <li class="menu-art"><a>art</a>
          <ul class="submenu">
            <li><a href="index.php?page=cinema">cinema</a></li>
            <li><a href="index.php?page=manga">manga</a></li>
            <?php if(isset($_SESSION["pseudo"])) : ?>
              <li><a href="index.php?page=mangaka">mangaka</a></li>
            <?php endif ?>
            <li><a href="index.php?page=artraditionelle">traditionnel</a></li>
            <li><a href="index.php?page=musique">musique</a></li>
          </ul>
       </li>
       <li class="menu-cuisine"><a>cuisine</a>
          <ul class="submenu">
            <li><a href="index.php?page=entree">entree</a></li>
            <li><a href="index.php?page=riz">a base de riz</a></li>
            <li><a href="index.php?page=fondue">fondue/nouille</a></li>
            <li><a href="index.php?page=viande">viande</a></li>
            <li><a href="index.php?page=poisson">poisson</a></li>
          </ul>
       </li>
       <li class="menu-sport"><a>sport</a>
          <ul class="submenu">
            <li><a href="index.php?page=sptraditionelle">traditionnel</a></li>
            <li><a href="index.php?page=scolaire">scolaire</a></li>
            <li><a href="index.php?page=actuel">actuel</a></li>
          </ul>
       </li>
       <li class="menu-jeuxvideo"><a>jeux-video</a>
          <ul class="submenu">
            <li><a href="index.php?page=leurs_debuts">leurs_debuts</a></li>
            <li><a href="index.php?page=leurs_democratisations">leurs_democratisations</a></li>
            <li><a href="index.php?page=les_actuelles">les_actuelles</a></li>
          </ul>
       </li>
       <li class="menu-panorama"><a>panorama</a>
          <ul class="submenu">
            <li><a href="index.php?page=photo">photo</a></li>
            <li><a href="index.php?page=video">video</a></li>
          </ul>
       </li>
       <li class="menu-liens"><a>liens util</a>
          <ul class="submenu">
            <li><a href="https://www.opodo.fr/" target = "_blank">avion</a></li>
            <li><a href="https://www.lonelyplanet.fr/destinations/asie/japon#" target = "_blank">lonely planet</a></li>
            <li><a href="https://www.boursorama.com/bourse/devises/convertisseur-devises/yen-euro" target = "_blank">yen</a></li>
            <li><a href="https://fr.wikivoyage.org/wiki/Japon" target = "_blank">info</a></li>
            <li><a href="http://www.ojapon.com/" target = "_blank">correspondance</a></li>
            <li><a href="http://www.clickjapan.org/Coutumes_et_fetes_japonaises/coutumes_fetes_index.htm" target = "_blank">fete et coutume</a></li>
            <li><a href="index.php?page=formulaire">formulaire</a></li>
            <?php if(isset($_SESSION["pseudo"])) : ?>
            <li><a href="index.php?page=deconnect">deconnexion</a></li>
            <?php endif ?>
          </ul>
       </li>
     </ul>
   </nav>