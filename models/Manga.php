<?php
class Manga extends DbConnect {//creatin d'une class Manga extention de DbConnect
    private $nom;
    private $genre;
    private $annee;
    private $commentaire;
    private $id_utilisateur;
    private $id_manga;

    public function getNom() {
        return $this->nom;
    }
     public function setNom($nom) {
        $this->nom = $nom;
    }
     public function getGenre() {
        return $this->genre;
    }
     public function setGenre($genre) {
        $this->genre = $genre;
    }
    public function getAnnee() {
        return $this->annee;
    }
     public function setAnnee($annee) {
        $this->annee = $annee;
    }
     public function getCommentaire() {
        return $this->commentaire;
    }
     public function setCommentaire( $commentaire) {
        $this->commentaire = $commentaire;
    }
    public function getId_utilisateur() {
        return $this->id_utilisateur;
    }
     public function setId_utilisateur( $id_utilisateur) {
        $this->id_utilisateur = $id_utilisateur;
    }
    public function getId_manga() {
        return $this->id_manga;
    }
     public function setId_manga($id_manga) {
        $this->id_manga = $id_manga;
    }

    public function insert() {//inserer un Manga dans la base de données ett lui cree une id
    $query="INSERT INTO manga(NOM, ANNEE, GENRE, COMMENTAIRE, ID_UTILISATEUR) VALUES (:nom,:annee,:genre,:commentaire,:id_utilisateur)";
    $result=$this->pdo->prepare($query);
    $result->bindvalue(':nom',$this->nom,PDO::PARAM_STR);
    $result->bindvalue(':annee',$this->annee,PDO::PARAM_INT);
    $result->bindvalue(':genre',$this->genre,PDO::PARAM_STR);
    $result->bindvalue(':commentaire',$this->commentaire,PDO::PARAM_STR);
    $result->bindvalue(':id_utilisateur',$this->id_utilisateur,PDO::PARAM_INT);
    $result->execute();
    $this->id=$this->pdo->lastInsertId();
    return $this;  
        }
       
        public function selectAll(){//selectionne tous les Manga dans la BDD
            $query ="SELECT * FROM manga;";
            $result = $this->pdo->prepare($query);
            $result->execute();
            $tob = $result->fetchAll();
            $datas=[];
            foreach($tob as $elem) {//et transforme en tableau d'objet puis le retourne
                $manga = new Manga();
                $manga->setId_manga($elem["id_manga"]);
                $manga->setId_utilisateur($elem["id_utilisateur"]);
                $manga->setCommentaire($elem["commentaire"]);
                $manga->setNom($elem["nom"]);
                $manga->setAnnee($elem["annee"]);
                $manga->setGenre($elem["genre"]);
                
                array_push($datas, $manga);
            }
            
            return $datas;
            
        }
        public function selectByUser(){//selectionne des Manga dans la base de données par rapport a l'id de l'utilisateur
            $query = "SELECT * FROM manga WHERE id_utilisateur = :id_utilisateur;";
        $result = $this->pdo->prepare($query);
        $result->bindValue(':id_utilisateur',$this->id_utilisateur,PDO::PARAM_INT);
        $result->execute();
        $datas = $result->fetchall();
        $tab=[];
        foreach($datas as $elem) {//le transforme en tableau d'objet et le retourne
            $manga = new Manga();
            $manga->setId_manga($elem["id_manga"]);
            $manga->setId_utilisateur($elem["id_utilisateur"]);
            $manga->setCommentaire($elem["commentaire"]);
            $manga->setNom($elem["nom"]);
            $manga->setAnnee($elem["annee"]);
            $manga->setGenre($elem["genre"]);
            
            array_push($tab, $manga);
            
        }
       
        return $tab;
         
        }
        public function select(){//recupere par l'id de l'objet Manga puis complete les informations de cette objet et le retourne 
            $query = "SELECT * FROM manga WHERE id_manga = :id";
            $result = $this->pdo->prepare($query);
            $result->bindValue("id", $this->id_manga, PDO::PARAM_INT);
            $result->execute();
            $datas = $result->fetch();
            
            $this->setNom($datas['nom']);
            $this->setAnnee($datas['annee']);
            $this->setGenre($datas['genre']);
            $this->setCommentaire($datas['commentaire']);
            $this->setId_utilisateur($datas['id_utilisateur']);
            
            return $this;
        }
        public function update(){//permet de modifier chaque element d'un manga ou son id = a l'id recu
            $query = "UPDATE `manga` SET `nom`= :nom,`annee`= :annee,`genre`= :genre,`commentaire`= :commentaire,`id_utilisateur`= :id_utilisateur WHERE id_manga = :id_manga";
            $result = $this->pdo->prepare($query);
            $result->bindValue("nom", $this->nom, PDO::PARAM_STR);
            $result->bindValue("annee", $this->annee, PDO::PARAM_INT);
            $result->bindValue("genre", $this->genre, PDO::PARAM_STR);
            $result->bindValue("commentaire", $this->commentaire, PDO::PARAM_STR);
            $result->bindValue("id_utilisateur", $this->id_utilisateur, PDO::PARAM_INT);
            $result->bindValue("id_manga", $this->id_manga, PDO::PARAM_INT);
            $result->execute();
            
        }
        public function delete(){//permet de supprimer un manga ou son id = a l'id recu
            $query = "DELETE FROM manga WHERE id_manga = :id";
	        $result = $this->pdo->prepare($query);
	        $result->bindValue("id", $this->id_manga, PDO::PARAM_INT);
	        $result->execute();
        }
    }
    ?>