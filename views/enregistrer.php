<h2>Inscrivez-vos manga prefere</h2>

      <section class="row bg-light">
          <div class="col-6">
             <form action="index.php?page=insert_manga" method="post">
                 <div>
                     <label> Année </label>
                     <input type="number" id="annee" name="annee" placeholder="2007" required minlength="4" maxlength="4">   
                 </div>
                 <div>
                     <label> titre </label>
                     <input type="text" id="nom" name="nom" placeholder="death note">
                 </div>
                 <fieldset>
                     <div>
                         <textarea name="commentaire" id="commentaire">commentaire</textarea>
                     </div>
                 de quel genre est l'oeuvre :
                     <div>
                         <select name="genre" id="genre">
                        
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
                     <input type="submit" id="valider" value="Soumettre">
                 </div>
             </form>
         </div>
     </section>
     <?php 
 

