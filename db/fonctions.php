<?php
	function connexionBdd() {
		require('config.php');
		$maxRetries = 5; // Nombre maximum de tentatives de reconnexion
		$retryDelay = 2; // Délai entre chaque tentative en secondes
		$currentAttempt = 0;
	
		while ($currentAttempt < $maxRetries) {
			try {
				$co = new PDO(
					"mysql:host=" . $server . ";dbname=" . $dbName,
					$user,
					$pass,
					array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
				);
				$co->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				return $co;
			} catch (PDOException $e) {
				$currentAttempt++;
				if ($currentAttempt >= $maxRetries) {
					die('Erreur : ' . $e->getMessage());
				}
				sleep($retryDelay); // Attendre avant de réessayer
			}
		}
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

	function getItemsInCollection() {
		$co = connexionBdd();
		$requete = $co->prepare("SELECT * FROM collection");
		$requete->execute();
		$items = $requete->fetchAll(PDO::FETCH_ASSOC);

		return $items;
	}
?>
