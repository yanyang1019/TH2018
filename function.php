<?php 

	function sources() {

		$urlSources = file_get_contents("https://newsapi.org/v2/top-headlines?country=us&apiKey=636ad6914bcb458cad7167e410907df1");
		$urlSourcesArray = json_decode($urlSources, true);

		$articles = $urlSourcesArray['articles'];

		for ($i=0; $i < count($articles); $i++) { 
			$sites = $urlSourcesArray['articles'][$i];
			echo '<div class="w3-third w3-margin-bottom articles">
			        <div class="contentOfArticles">
			            <ul>
			                <li>'.$sites['publishedAt'].'</li>
			                <li>sources: '.$sites['source']['name'].'</li>
			                <li><a href="'.$sites['url'].'">'.$sites['title'].'</a></li>
			                <li><h4>'.$sites['author'].'</h4></li>
			                <li><p>'.$sites['content'].'(bref)</p></li>
			            </ul>
			            
			        </div>
			        <div class="imageOfArticles">
			            <img src="'.$sites['urlToImage'].'" alt="test" style="height: 200px" >
			        </div>
			    </div>';
		}
	}

 ?>