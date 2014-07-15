<?php require_once('lang.php'); ?>
<!doctype html>

<!--[if lt IE 7 ]> <html class="ie ie6 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->
<!-- the "no-js" class is for Modernizr. -->

<head>

	<meta charset="utf-8">
	
	<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Константин Голуб - фронт-енд разработчик и дизайнер</title>
	<meta name="description" content="Портфолио веб разработчика и дизайнера Константина Голуба">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

	<!-- traditional favicon -->
	<link rel="shortcut icon" href="img/favicon.ico">
	
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap-responsive.min.css">
	<!-- Main style CSS -->
	<link rel="stylesheet" href="css/main.css">
	
	<!-- here comes the javascript -->
	<!-- Grab Google CDN's jQuery. fall back to local if necessary -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<script>window.jQuery || document.write("<script src='js/jquery-1.8.2.min.js'>\x3C/script>")</script>
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<!-- Modernizr -->
	<script src="js/modernizr-2.9.min.js"></script>
	<!-- this is where we put our custom functions -->
	<script src="js/functions.js"></script>
	<script src="js/preloadImg.js"></script>
</head>
<body>
<div id="portfolio-wrap"></div>
<!-- header-->
<header id="main-header">
	<div class="container">
		<div class="row">
				<nav class="navbar navbar-inverse navbar-static-top">
					<a href="http://constantinegolub.com" class="brand my-brand" title="">
						<img src="img/logo4.png" alt="Домой, на главную!" /><strong>Constantine</strong>Golub
					</a>
					<ul class="span2 nav lang-checker">
						<li><a href="http://constantinegolub.com/en/" title="english language">En</a></li>
						<li class="lang-checked"><a href="#" title="русский язык">Ru</a></li>
					</ul>
					
					<a class="mobile-navbar btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</a>
					
					<div class="nav-collapse collapse">
						<ul class="menu-list pull-right">
							<li class="menu-item"><a href="#about" title="">Обо мне</a></li>
							<li class="menu-item"><a href="#portfolio" title="">Портфолио</a></li>
							<li class="menu-item"><a href="#contacts" title="">Контакты</a></li>
							<div class="dot-effect visible-desktop"></div>
						</ul>
					</div>
				</nav>
		</div>
	</div>
</header>
<div class="hero-unit">
	<div class="container pagination-centered">
		<h1>
			<span class="span11">Меня зовут Константин Голуб.</span>
			<span class="span11">Я занимаюсь <a class="blue-link" title="">фронт-енд разработкой</a> и <a class="orange-link" title="">дизайном</a></span>
		</h1>
	</div>
</div>
	<div id="about" class="personal-info">
		<div class="container">
			<p class="lead">Приветствую Вас на моем сайте - портфолио. Меня зовут Константин Голуб, я занимаюсь веб разработкой, особое внимание уделяю фронт-енд разработке. Мой опыт составляет более: <span class="whiter" id="years"></span> &mdash; <span class="whiter" id="days"></span> &mdash; <span class="whiter" id="hours"></span> &mdash; <span class="whiter" id="minutes"></span> &mdash; <span class="whiter" id="seconds"></span>. За этот отрезок времени я твердо укрепился в понимании того, что я не ошибся с выбором направления своей деятельности. Я получаю большое удовольствие от того, чем занимаюсь! Мне нравится работать над интересными и сложными проектами, делать сайты динамичные - "живые", используя последние веб технологии. В коде люблю порядок (правильная структура, комментирование, валидность, семантика).</p>
			<h3>Что я использую</h3>
			<span class="btn">HTML/HTML5</span>
			<span class="btn">CSS/CSS3</span>
			<span class="btn">Photoshop/Illustrator</span>
			<span class="btn">Twitter Bootstrap</span>
			<span class="btn">Wordpress/MODx</span>
			<span class="btn">Javascript/Jquery/Ajax</span>
			<span class="btn">LESS</span>
			<span class="btn">PHP</span>
			<span class="btn">MySQL</span>
			<span class="btn">Emmet</span>
		</div>
	</div>

<div class="get-in-touch">
	<div class="container">
		<div class="row">
				<div class="span8 offset2 pagination-centered">
					<h2>Есть деловое предложение? Тогда <a href="#contacts" class="btn btn-inverse contact-me" title="">свяжитесь со мной</a></h2>
				</div>
		</div>
	</div>
</div>

<div id="super-height" class="container">
	<div class="row-fluid">
		<div id="portfolio" class="span12 big-name">
			<h2>Портфолио</h2>
			<h3>Здесь вы можете ознакомиться с моими работами</h3>
			<!--<span class="arrow visible-desktop"></span>-->
		</div>
		
		<div id="portfolio-container" class="pagination-centered">
			<div class="row-fluid">			
				<div class="span3 portfolio-work">
					<h2>Проект по обустройству города</h2>
					<h4 class="muted">photoshop/css/html/js</h4>
					<div class="img-circle portfolio-img">
						<a href="vlgreen" title="Проект по обустройству города"><img src="img/works-thumbnail/21.jpg" alt="" /></a>
					</div>
				</div>
				
				<div class="span3 portfolio-work">
					<h2>Консалтинговая компания</h2>
					<h4 class="muted">design/css/html/js/MODx</h4>
					<div class="img-circle portfolio-img">
						<a href="mcllimited" title="Консалтинговая компания"><img src="img/works-thumbnail/3.jpg" alt="" /></a>
					</div>
				</div>
			
				<div class="span3 portfolio-work">
					<h2>Интернет магазин</h2>
					<h4 class="muted">css3/html5/js/jquery</h4>
					<div class="img-circle portfolio-img">
						<a href="kladis" title="Интернет магазин Пластиковой тары"><img src="img/works-thumbnail/17.jpg" alt="" /></a>
					</div>
				</div>
				
				<div class="span3 portfolio-work">
					<h2>Сайт для сети ресторанов</h2>
					<h4 class="muted">design/css/html/js/wordpress</h4>
					<div class="img-circle portfolio-img">
						<a href="foodconnect" title="Сайт для сети ресторанов"><img src="img/works-thumbnail/5.jpg" alt="" /></a>
					</div>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span3 portfolio-work">
					<h2>Интернет магазин "Пейнтбол"</h2>
					<h4 class="muted">design/css3/html5/js</h4>
					<div class="img-circle portfolio-img">
						<a href="paintball" title="Интернет магазин Пейнтбол"><img src="img/works-thumbnail/4.jpg" alt="" /></a>
					</div>
				</div>
				
				<div class="span3 portfolio-work">
					<h2>Бизнес консалтинг</h2>
					<h4 class="muted">design/css3/html5/js/wordpress</h4>
					<div class="img-circle portfolio-img">
						<a href="fbconsulting" title="Бизнес консалтинг"><img src="img/works-thumbnail/12.jpg" alt="" /></a>
					</div>
				</div>
				
				<div class="span3 portfolio-work">
					<h2>Квартиры в Ялте</h2>
					<h4 class="muted">photoshop/html/css/js</h4>
					<div class="img-circle portfolio-img">
						<a href="otpuskyalta" title="Сайт фотографа"><img src="img/works-thumbnail/18.jpg" alt="" /></a>
					</div>
				</div>
				
				<div class="span3 portfolio-work">
					<h2>Сайт детского сада</h2>
					<h4 class="muted">css/js/php/bootstrap</h4>
					<div class="img-circle portfolio-img">
						<a href="zelenaya-rosha" title="Сайт детского сада"><img src="img/works-thumbnail/10.jpg" alt="" /></a>
					</div>
				</div>			
			</div>
		</div>
	</div>
	
	
	<div class="row pagination-centered more-works">
			<h2><a id="get-works" href="portfolio-1.html">загрузить еще работы...</a></h2>
	</div>
</div>

<!-- contact form -->
<div id="contact-form">
	<div class="container container-for-close">
		<div class="row-fluid">
			<div class="span12 big-name">
				<h2>Контактная форма</h2>
				<h3>Есть интересное предложение по работе, сотрудничеству? Пишите! Я всегда открыт к интересным предложениям.</h3>
				<span class="arrow visible-desktop"></span>
			</div>
			<?php if(isset($emailSent) && $emailSent == true) { ?>
                <h2 class="text-center text-success">Спасибо! Ваше письмо отправлено. Я постараюсь не задерживаться с ответом!</h2>
            <?php } else { ?>
			<form id="send-form" class="form-horizontal" action="contact.php" method="post">
				<div class="control-group">
					<label class="control-label" for="inputName">Ваше имя</label>
					<div class="controls">
						<input type="text" name="name" class="span5 requiredField" value="<?php if (isset($_POST['name'])) echo $_POST['name']; ?>" id="inputName" placeholder="Представтесь, пожалуйста" />
						<?php if($nameError != '') { ?>
						<span class="help-inline "><?php echo $nameError;?></span>
						<?php } ?>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="inputEmail">Ваш email</label>
					<div class="controls">
						<input type="text" name="email" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>" class="span5 email requiredField" id="inputEmail" placeholder="Укажите ваш email адрес" />
						<?php if($emailError != '') { ?>
						<span class="help-inline "><?php echo $emailError;?></span>
						<?php } ?>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="inputSubject">Тема письма</label>
					<div class="controls">
						<input type="text" class="span7 subject requiredField" value="<?php if (isset($_POST['subject'])) echo $_POST['subject']; ?>" name="subject" id="inputSubject" placeholder="Тема: работа, предложения, сотрудничество..." />
						<?php if($subjectError != '') { ?>
						<span class="help-inline "><?php echo $subjectError;?></span>
						<?php } ?>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="areaText">Содержимое</label>
					<div class="controls">
						<textarea class="span7 requiredField" rows="5" name="areaText" id="areaText" placeholder="Здесь текст письма...">
							<?php if(isset($_POST['areaText'])) { if(function_exists('stripslashes')) { echo stripslashes($_POST['areaText']); } else { echo $_POST['areaText']; } } ?>
						</textarea>
						<?php if($messageError != '') { ?>
						<span class="help-inline "><?php echo $messageError;?></span>
						<?php } ?>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="anti-spam">Анти-Спам</label>
					<div class="controls">
						<input type="text" value="3O+56" disabled class="span1" />
						<input type="text" class="span2 anti-spam requiredField" name="anti-spam" value="" id="anti-spam" placeholder="сумма чисел равна..."/>
					</div>
				</div>
				<div class="control-group">
					<div class="controls">
						<input type="submit" name="submit" class="btn btn-large btn-inverse subbutton" value="Отправить письмо" />
						<input type="hidden" name="submitted" id="submitted" value="true" />
					</div>
				</div>
			</form>
			<?php } ?>
		</div>
	</div>
</div>

<footer id="main-footer">
	<div class="container">
		<div class="row">
			<div class="pull-right social">
				<a href="https://twitter.com/costagolub" target="_blank"></a>
				<a href=""></a>
				<a href=""></a>
				<a href=""></a>
			</div>
			<div class="span8">
				<ul class="menu-list footer-nav">
								<li class="menu-item"><a href="#about" title="">Обо мне</a></li>
								<li class="menu-item"><a href="#portfolio" title="">Портфолио</a></li>
								<li class="menu-item"><a href="#contacts" title="">Контакты</a></li>
				</ul>
			</div>
		</div>
		<div class="row footer-logo pagination-centered">
			<a href="http://constantinegolub.com" title="" class="brand my-brand">
				<img src="img/logo4.png" alt="Домой, на главную!" /><strong>Constantine</strong>Golub
			</a>
		</div>
		
		<div class="row pagination-centered">
			<small class="copyright">Copyright &copy; 2012 by Constantine Golub. All Rights Reserved.</small>
			<!--LiveInternet counter--><script type="text/javascript"><!--
document.write("<a href='http://www.liveinternet.ru/click' class='liveinternet' "+
"target=_blank><img src='//counter.yadro.ru/hit?t45.5;r"+
escape(document.referrer)+((typeof(screen)=="undefined")?"":
";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
";"+Math.random()+
"' alt='' title='LiveInternet' "+
"border='0' width='31' height='31'><\/a>")
//--></script><!--/LiveInternet-->

		</div>
	</div>
	<div class="stroke-bottom"></div>
</footer>
</div>
</body>
</html>