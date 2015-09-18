<?php $path='http://' .$_SERVER[ "SERVER_NAME"]. '/'; ?>

<?php

$title = 'QA Start Up';

$url = $_SERVER['REQUEST_URI'];

if(strstr($url, '?')){
	$url = strtok($url, '?');
}

if($_SERVER['REQUEST_METHOD'] != 'POST'){
	$_patch = explode('/', $url);
	if(sizeof($_patch) == 3 && $_patch[1] == 'index.php'){
		header($_SERVER['SERVER_PROTOCOL'] . ' 301 Moved Permanently');
		Header("Location: /".$_patch[2]);
		exit();
	}
	
	if($url == '/index.php'){
		header($_SERVER['SERVER_PROTOCOL'] . ' 301 Moved Permanently');
		Header("Location: /");
		exit();
	}
}

if (is_readable ($_SERVER ['DOCUMENT_ROOT']."/meta.csv")) {
  		$handle = fopen ($_SERVER ['DOCUMENT_ROOT']."/meta.csv", "r"); 
  		while (!feof ($handle)) { 
  			$buffer = fgets($handle, 9999); 
  			$data = explode (";", $buffer);
  			if ($data[0] == $url) {	
  				$title = $data[1];
  				$description = $data[2];
  				$keywords = $data[3];
  			}				 
  		} 
  		fclose ($handle); 		
}
// End Web-promo 
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title;?></title>
    <?php if(isset($description)){ ?>
    <meta name="description" content="<?php echo $description;?>" />
    <?php } ?>
    <?php if(isset($keywords)){ ?>
	<meta name="keywords" content="<?php echo $keywords;?>" />
	<?php } ?>
    <link rel="canonical" href="http://qastartup.com.ua<?php if(isset($url)){echo $url;}?>" />
    <link rel="publisher" href="https://plus.google.com/114545140666357265300">
	<meta name="classification" content="Учебный центр информационных технологий QA Start Up ">
	<meta name="distribution" content="Local">
	<meta name="geography" content="Kyiv, Ukraine">
	<meta name="language" content="Russian">
	<meta name="Search Engine" CONTENT="http://www.google.com.ua/">
    <link rel="shortcut icon" href="<?= $path;?>images/favicon.png?v=1.0" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="<?= $path;?>bootstrap/bootstrap.min.css?v=1.0">
    <link rel="stylesheet" type="text/css" href="<?= $path;?>bootstrap/bootstrap-social.css?v=1.0">
    <link rel="stylesheet" type="text/css" href="<?= $path;?>css/style.css?v=1.0">
    <link href="<?= $path;?>css/font-awesome.min.css?v=1.0" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js?v=1.0"></script>
    <script type="text/javascript" src="<?= $path;?>js/menu.js?v=1.0"></script>
 <?php  if (!strpos($_SERVER['PHP_SELF'], 'trainers') and !strpos($_SERVER['PHP_SELF'], 'courses') ): ?>
    <script type="text/javascript" src="<?= $path;?>js/menu-highlight.js?v=1.0"></script>
 <?php endif; ?>
    <script type="text/javascript" src="<?= $path;?>js/contacts.js?v=1.0"></script>
    <script  type="text/javascript" src="<?= $path;?>js/jquery.form.validation.js?v=1.0"></script>
    <script type="text/javascript" src="<?= $path;?>js/modal.js?v=1.0"></script>
    <script type="text/javascript" src="<?= $path;?>js/faq.js?v=1.0"></script>
    <script type="text/javascript" src="<?= $path;?>js/feedback-rating.js?v=1.0"></script>
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js?v=1.0"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js?v=1.0"></script>
        <![endif]-->
	<script type="text/javascript">
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	 	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  	})(window,document,'script','//www.google-analytics.com/analytics.js?v=1.0','ga');
	  	ga('create', 'UA-55866070-1', 'auto');
	  	ga('send', 'pageview');
	</script>
</head>
<body>
    <header>
        <div class="navbar navbar-default navbar-fixed-top">
            <div class="head-width hidden-xs">
                <div class="container">
                    <div class="row header-align">
                        <div class="col-md-4 col-sm-4 header-left">
                            <div>
                                <a class="image" href="/"><img src="<?= $path;?>images/logo.svg?v=1.0" alt="" /></a>
                            </div>
                            <p class="my-margin-auto">Учебный Центр</p>
                            <p><span>информационных технологий</span>
                            </p>
                        </div>
                        <div class="col-md-4 col-sm-5 header-center">
                            <a href="#freelesson" data-toggle="modal" class="btn btn-social-icon btn-arrow btn-lg pull-left" onclick="resetf('#freelesson-form')">
                                <i class="fa fa-arrow-right"></i>
                            </a>
                            <p>Запишитесь на бесплатное занятие</p>
                        </div>
                        <div class="col-md-3 col-sm-3 header-right">
                            <p class="phone"><i class="fa fa-phone-square"></i> 096 255 45 49</p>
                            <p><i class="fa fa-phone-square"></i> 093 615 30 90</p>
                            <a href="#callback" data-toggle="modal" class="btn btn-success no-flickr" onclick="resetf('#callback-form')">Заказать обратный звонок</a> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div id='cssmenu'>
                    <ul>
                        <li><a href="/"><span>Главная</span></a></li>
                        <li class='has-sub'><a href='<?= $path;?>about.php'><span>О нас</span></a>
                            <ul>
                                <li><a href='<?= $path;?>instructors.php'><span>Тренеры</span></a></li>
                                <li class='last'><a href='<?= $path;?>faq.php'><span>F.A.Q.</span></a></li>
                            </ul>
                        </li>
                        <li><a href='<?= $path;?>course.php'><span>Курсы</span></a></li>
                        <li><a href='<?= $path;?>price.php'><span>Цены</span></a></li>
                        <li><a href='<?= $path;?>discount.php'><span>Акции</span></a></li>
                        <li><a href='<?= $path;?>feedback.php'><span>Отзывы</span></a></li>
                        <li class='last'><a href='<?= $path;?>contacts.php'><span>Контакты</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>