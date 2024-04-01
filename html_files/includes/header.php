<?php
// gets the page file name, this later is called to place the featured posts on the home page only
$currentFile = $_SERVER["PHP_SELF"];
$parts = Explode('/', $currentFile);
($page_file_name = ($parts[count($parts) - 1]));
?>
 <link rel="stylesheet" type="text/css" href="style.css?<?php echo time(); ?>" />
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xml:lang="en-US">
	<head>
	
		<title>filmseç.com</title>
		<meta name="Keywords" content=" " />
		<meta name="Description" content=" " />
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	
		<!-- Google Fonts Call -->
		<link href="http://fonts.googleapis.com/css?family=Brawler" rel="stylesheet" type="text/css" />
    
    	<!-- Get the Stylesheet -->
		<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    
    	<!-- Get the JS -->
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/reviewer.js"></script>
    
		<!-- The Favicon -->
		 
		
	</head>
	<body class="sidebar_right">
		<div id="wrapper">
			<div id="header">
				<div id="pagemenu" class="menu">
					<div class="container">
						 
						 
						<div class="clear"></div>
					</div>
				</div>
				<div id="logo_area">
				 <center> <h1>   filmseç.com</h1></center> 
				  
				</div>
				<div class="menu" id="category_menu">
					<div class="container">
						<div class="menu-categories-container">
							<ul id="menu-categories" class="menu">
							<li><a href="index.php" title="kayıt ol">Anasayfa</a></li>
							<li><a href="kayit_form.php" title="kayıt ol">Kayıt ol/Giriş Yap</a></li>
							<li><a href="archive.php" title="Archive">Değerlendirmeler</a></li>
								<li><a href="archive.php" title="Archive">Blog</a></li>
								<li><a href="archive.php" title="Archive">Film Seçici</a></li>
								<li>
									<a href="#">Kategoriler</a>
									<ul class="sub-menu">
										<li><a href="archive.php" title="Archive">Macera</a></li>
										<li><a href="archive.php" title="Archive">Komedi</a></li>
										<li><a href="archive.php" title="Archive">Dram</a></li>
										<li>
											<a href="archive.php" title="Archive">Aksiyon</a>
											<ul class="sub-menu">
												<li><a href="archive.php" title="Archive">+18</a></li>
											</ul>
										</li>
										<li><a href="archive.php" title="Archive">Bilim-Kurgu</a></li>
									</ul>
								</li>
							</ul>
						</div>
						<form method="get" id="searchform" action="">
							<div>
								<input type="text" class="search_input" value="Film Ara..." name="s" id="s" onfocus="if (this.value == 'To search, type and hit enter') {this.value = '';}" onblur="if (this.value == '') {this.value = 'To search, type and hit enter';}" />
								<input type="hidden" id="searchsubmit" value="Search" />
							</div>
						</form>
						<div class="clear"></div>
					</div>
				</div>
				<?php if ($page_file_name == "index.php") { ?>
				<div id="header_banner" class="featured_banner_dark">
					<div class="container">
						<div class="featured_post left">
							<div class="featured_poster_overflow">
								<div class="featured_poster_wrap">
									<a href="single.php" title="Harry Potter Contest">
										<img width="258" height="384" src="images/aksiyon.jpg" class="featured_poster wp-post-image" alt="Harry Potter Contest" />
									</a>
								</div>
							</div>
							 
							<div class="featured_title">
								<a href="single.php" title="Harry Potter Contest">Aksiyon Filmleri</a>
							</div>
						</div>
						
						

					 
						<div class="featured_post left">
							<div class="featured_poster_overflow">
								<div class="featured_poster_wrap">
									<a href="single.php" title="Harry Potter Contest">
										<img width="258" height="384" src="images/dram.jpg" class="featured_poster wp-post-image" alt="Harry Potter Contest" />
									</a>
								</div>
							</div>
						 
							<div class="featured_title">
								<a href="single.php" title="Harry Potter Contest">Dram Filmleri</a>
							</div>
						</div>

					 





						 
						
						
						<div class="featured_post left">
							<div class="featured_poster_overflow">
								<div class="featured_poster_wrap">
									<a href="single.php" title="Everything Must Go">
										<img width="258" height="382" src="images/bilimkurgu.jpg" class="featured_poster wp-post-image" alt="Everything Must Go" />
									</a>
								</div>
							</div>
							 
							<div class="featured_title">
								<a href="single.php" title="Everything Must Go">Bilim-Kurgu Filmleri</a>
							</div>
						</div>
						<div class="featured_post left featured_post_last">
							<div class="featured_poster_overflow">
								<div class="featured_poster_wrap">
									<a href="single.php" title="Captain America: The First Avenger">
										<img width="258" height="384" src="images/korku.jpg" class="featured_poster wp-post-image" alt="Captain America: The First Avenger" />
									</a>
								</div>
							</div>
							 
							<div class="featured_title">
								<a href="single.php" title="Captain America: The First Avenger">Korku Filmleri</a>
							</div>
						</div>
						<div class="clear"></div>
					</div>
				</div>
				<?php } ?>
			</div><!-- end #header -->