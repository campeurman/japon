
<h2>Inscrivez-vos manga prefere</h2>


      <section class="row bg-light">
          <div class="col-6">
         
             <form action="index.php?page=<?= isset($include['datas']['manga'])?"modify_manga":"insert_manga "; ?>"  method="post">   <!-- //si $include['datas']['manga'] existe envoyer vers modify_manga sinon insert_manga -->
                 <div>
                     <label> Année </label>
                     <input type = "number" id = "annee" name = "annee" placeholder = "2007"  value = "<?= isset($include['datas']['manga'])? $include['datas']['manga']->getAnnee() : ""; ?>">  <!-- //renvoie les données annee dans cette input --> 
                 </div>
                 <div>
                     <label> titre </label>
                     <input type = "text" id = "nom" name = "nom" placeholder = "death note" value = "<?= isset($include['datas']['manga'])? $include['datas']['manga']->getNom() : ""; ?>">  <!-- //renvoie les données nom dans cette input -->
                </div>
                 <fieldset>
                     <div>
                         <textarea name = "commentaire" id = "commentaire"><?= isset($include['datas']['manga'])? $include['datas']['manga']->getCommentaire() : "commentaire"; ?></textarea> <!-- //renvoie les données commentaire dans cette textarea -->
                     </div>
                 de quel genre est l'oeuvre :
                     <div>
                         <select name = "genre" id = "genre">
                        
                                 <option value ="kodomo">kodomo</option>
                                 <option value ="shonen">shonen</option>
                                 <option value ="shojo">shojo</option>
                                 <option value ="seinen">seinen</option>
                                 <option value ="josei">josei</option>
                                 <option value ="mecha">mecha</option>
                                 <option value ="seijin">seijin</option>
                                 <option value ="hentai">hentai</option>
                               
                         </select>
                     </div>
                 </fieldset>
            
          
                 <div>
                     <?= isset($include['datas']['manga'])? "<input type='hidden' name='id_manga' value='".$include['datas']['manga']->getId_manga()."'>" : ""; ?>  <!-- //envoie l'id du manga a l'insu de l'utilisateur   -->
                     <input type="submit" id="valider" value=<?= isset($include['datas']['manga'])? "modifier" : "Soumettre"; ?> >  <!-- //la valeur de l'input change celon si $include['datas']['manga'] existe -->
                 </div>
             </form>
         </div>
     </section>  

     <?php    

$mangas = $include["datas"]["mangas"]; //recree des articles a partir du tableau datas 
$html ='<section id="cadre">';
$i=1;
foreach($mangas as $manga) {
    $html.="<article class=\"card\" id = \"rec".$i."\"><div class = \"text\"><a href='index.php?page=membre&id=". $manga->getId_manga() ."'><h2>" . $manga->getNom() . "</h2><p>dans le style ". $manga->getGenre() ." sortie en ".$manga->getAnnee() ."</p></a><p>" .$manga->getCommentaire() ."</p><div><a href='index.php?page=suppr_manga&id=".$manga->getId_manga()."'>X</a></div></div></article>";
    $i++;
}
$html.="</section>";

echo $html;

?>

