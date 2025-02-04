<?php 

if(isset($_GET)){
    if(isset($_GET['lang']) && !empty($_GET['lang'])){
        setcookie('lang', $_GET['lang'], time() + 60*60*24*30);
    }
}

include_once('lang.php');

if(isset($_GET['lang'])){
    header('Location: '.$_SERVER['PHP_SELF']);
}

?>

<!DOCTYPE html>
<html lang="<?=$lang;?>">
<head>
    <title><?=Error;?> 403 - Now Playing for Spotify</title>
    <link rel="icon" type="image/png" href="assets/images/favicon.png">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="NowPlaying for Spotify is a smooth Spotify Connect visualizer, which display the music playing on Spotify" />
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:creator" content="@busybox11" />
	<meta name="twitter:image" content="https://<?=$_SERVER['SERVER_NAME'];?>/assets/images/favicon.png" />
	<meta property="og:title" content="NowPlaying for Spotify" />
	<meta property="og:type" content="website" />
	<meta property="og:description" content="NowPlaying for Spotify is a smooth Spotify Connect visualizer, which display the music playing on Spotify" />
	<meta name="og:image" content="https://<?=$_SERVER['SERVER_NAME'];?>/assets/images/favicon.png" />
	<meta name="theme-color" content="#23a92a" />
    <link href="assets/styles/index.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="assets/styles/productsans.css?ts=<?=time ()?>" rel="stylesheet">
</head>

<body>
        <div class="content" style="margin:0 auto;text-align:center;">
            <div>
                <img src="assets/images/favicon.png" alt="Logo" width="100px" height="100px">
				<h1 id="app_title"><?=Error;?> 403</h1>
				<h2 id="app_desc"><?=IndexError403;?></h2>
            </div>
            <a href="javascript:window.history.back()" id="login_btn" class="spotify_btn"><?=IndexGoBack;?></a>
        </div>
</body>
</html>
