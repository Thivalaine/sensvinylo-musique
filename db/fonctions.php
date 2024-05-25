<?php
	function connexionBdd() {
		require('config.php');
		try{
			$co = new PDO("mysql:host=" . $server . ";dbname=" . $dbName, $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",));
			$co-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
		catch(PDOException $e){
			die('Erreur : ' . $e->getMessage());
		}

        return $co;
	}

	function getArticles() {
		$co = connexionBdd();
		$requete = $co->prepare("SELECT * FROM article");
		$requete->execute();
		$articles = $requete->fetchAll(PDO::FETCH_ASSOC);

		return $articles;
	}

	function getArticleById($id) {
		$co = connexionBdd();
		$requete = $co->prepare("SELECT * FROM article WHERE id = :id");
		$requete->bindParam(':id', $id, PDO::PARAM_INT);
		$requete->execute();
		$article = $requete->fetch(PDO::FETCH_ASSOC);

		return $article;
	}
?>
