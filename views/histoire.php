<?php


    $image1 = ["image"=>"CIMG0131.jpg"];
    $image2 = ["image"=>"sake.jpg"];
    $image3 = ["image"=>"gei.jpg"];
    $image4 = ["image"=>"statue.jpg"];
   
  
$images = [$image1, $image2, $image3, $image4];

$video1 = ["video"=>"https://www.youtube.com/embed/NXoUmH57y3E"];
$video2 = ["video"=>"https://www.youtube.com/embed/Whc1gwqytqc"];
$video3 = ["video"=>"https://www.youtube.com/embed/MvSOUfouKZU"];
$video4 = ["video"=>"https://www.youtube.com/embed/rq1a4pMuKiI"];
$videos = [$video1, $video2, $video3, $video4];
require "models/un.php";
require "carou.php" ;

    $bouton0 = [
        "titre"=>"avant ere kawakura(1085)",
        "contenu"=> '
//         <li><h3>Avant le IIIe siècle ap. J-C : La Préhistoire (périodes Jomon et Yayoi)</h3></li>  <p>voit apparaître les premières communautés, la métallurgie et l’agriculture.
//    C’est l’époque de la fondation mythique du Japon par l’empereur Jimmu et celle de la construction du temple d’Ise.</p><br/>

//         <li><h3>Avant 538 ap. J-C : Période des Kofun</h3></li>

//     <p>CLa protohistoire Japonaise est marquée par les Kofun, ces tombes monumentales visibles à Sakai et Nara. Une autorité commence à apparaître dans la plaine du Yamato (Nara).</p><br/>

//         <li><h3>538-710 : Période Asuka</h3></li>

//     <p>L\'Histoire du Japon s\'enrichit et prend modèle sur la civilisation chinoise. Introduction du Bouddhisme, de l’écriture, de l’architecture et de la sculpture.</p>
//     <p>Construction du premier temple japonais : le Horyuji (Nara).</p><br/>
//     <p><a href="https://www.vivrelejapon.com/a-savoir/comprendre-le-japon/la-statuaire-bouddhique"target="_blank">le statuaire bouddhique</a></p><br/>

//         <li><h3>710-794 : Période Nara</h3></li>

//     <p>Affirmation du pouvoir central des empereurs. Construction de la première capitale à Nara et de ses grands temples : Todaiji, Kasuga Taisha, etc. </p><br/>

//         <li><h3>794-1085 : Période Heian</h3></li><br/>

//     <p>Déménagement de la capitale à Heian-kyo (Kyoto). Fondation d’une monarchie à la chinoise, dominée par la grande famille des régents Fujiwara. 
//     Cette période de l’Histoire du Japon est considérée comme l’époque classique de la civilisation japonaise, le Dit du Genji est rédigé.
//      Construction du Byodoin à Uji. Développement du bouddhisme avec le moine Kûkai et fondation du temple du mont Koya.</p></ul>'];
];
    $bouton1 = [
        "titre"=>"avant ere meiji(1868)",
        "contenu"=>"<ul>
        <li><h3>1085-1336 : Période Kamakura</h3></li>

        <p>Le pouvoir de la cour impériale s’efface devant les clans de samouraïs. Lutte entre les Minamoto et les Taira durant la guerre de Gempei.
       Dictature de Taira no Kiyomori, mais victoire de Minamoto no Yoritomo et instauration du premier shogunat (gouvernement des guerriers).
        Déménagement du pouvoir à Kamakura et construction de ses temples dont le Grand Bouddha de Kamakura et le temple Tsurugaoka. Développement du bouddhisme zen par le moine Eisai.</p>
    
            <li><h3>1336-1491 : Période Muromachi</h3></li>
    
        <p>Renversement des shôgun de Kamakura par Ashikaga Takauji, qui fonde le 2e shogunat et réinstalle le pouvoir à Kyoto.
        Instauration de la féodalité japonaise, et fusion de la culture des samouraïs et de la cour, entraînant une floraison des arts. Développement de la cérémonie du thé et du théâtre Nô.
        Construction des plus célèbres temples de Kyoto (Kinkakuji, Ginkakuji, Ryoanji).</p>
        <p><a href=\"https://www.vivrelejapon.com/a-savoir/comprendre-le-japon/le-theatre-no\"target=\"_blank\">le theatre de Nô</a></p><br/>
    
            <li><h3>1491-1603 : Le Sengoku Jidai</h3></li>
    
        <p>Disparition du pouvoir central à cause de guerres civiles répétées. Apparition des seigneurs de guerre daimyo.
        À cette étape de l’Histoire du Japon, le pays est divisé par une guerre civile continuelle jusqu’à l’action des différents unificateurs : Oda Nobunaga, Toyotomi Hideyoshi et Tokugawa Ieyasu.
        Construction des grands châteaux japonais (Himeji, Kumamoto). Premier contact avec les Européens et introduction du christianisme.</p><br/>
    
            <li><h3>1603-1853 : Période Edo</h3></li>
    
        <p>Réunification du Japon sous le 3e shogunat des Tokugawa. Installation du pouvoir à Edo (Tokyo).<br/> Fermeture du pays aux étrangers et interdiction du christianisme.
        Urbanisation du Japon et développement d’une riche bourgeoisie marchande.<br/> Développement du théâtre Kabuki et de l’art des estampes. Construction du château Nijo à Kyoto et du temple d’Asakusa à Tokyo.</p>
        <p><a href=\"https://www.vivrelejapon.com/a-savoir/comprendre-le-japon/ukiyo-e-estampes-japanaises\"target=\"_blank\">Ukiyo-e, l'art de l'estampe japonaise</a></p><br/>
    
            <li><h3>1853-1868 : Le Bakumatsu</h3></li>
    
        <p>Période finale de l’époque Edo. Ouverture forcée du Japon par les Américains, entraînant le renversement des Tokugawa.<br/><br/> Début de la modernisation et de l’industrialisation du Japon. Fondation de Yokohama.</p></ul><br/>"];
    $bouton2 = [
        "titre"=>"depuis meiji",
        "contenu"=>" <ul>
        <li><h3>1868-1911 : Ere Meiji</h3></li>

        <p>Restauration du pouvoir impérial et déménagement de celui-ci à Tokyo (ex-Edo). Le Japon devient une puissance moderne. Modernisation de Tokyo avec la création des quartiers de Ginza, Marunouchi.
        Arrivée du chemin de fer et de l’électricité.<br/><br/> Conquête de la Corée et de Taïwan. Victoires militaires contre l’empire russe et la Chine.</p><br/>
        
            <li><h3>1911-1926 : Ere Taisho</h3></li>
    
        <p>Première ère de démocratisation du Japon.</p><br/>
    
            <li><h3>1926-1989 : Ere Showa</h3></li>
    
        <p>Début de la politique impérialiste et du gouvernement des militaires. Politique d’expansion vers la Chine, entraînant l'entrée du Japon <br/>dans la Seconde Guerre Mondiale et la défaite en 1945.
        Reconstruction du pays sous tutelle américaine réussie, c’est le « miracle japonais ». Construction de la tour de Tokyo et reconstruction de la ville sous sa forme actuelle.</p><br/>
    
            <li><h3>Aujourd’hui : Ere Heisei</h3></li>
    
        <p>L’histoire contemporaine du Japon est marquée par une période de crise économique et de difficultés mais aussi de rayonnement culturel du pays dans le monde. Catastrophe nucléaire de Fukushima en 2011.
       Construction de la tour Sky Tree et candidature aux Jeux Olympiques. </p><br/>
        <p>si vous voulez plus de <a href=\"https://fr.wikipedia.org/wiki/Histoire_du_Japon\">detail</a></p></ul>"
    ];
    
$boutons = [$bouton0, $bouton1, $bouton2];
require "models/deux.php";
echo $bout;
echo $text;

 ?>




