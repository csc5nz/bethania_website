<!DOCTYPE HTML>
<!--
	Phase Shift by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<?php
    // Read json and build project objects
    $jsonStr = file_get_contents("projects.json");
    //$jsonStr = preg_replace('/\r|\n/','\n', trim($jsonStr));
    $projectsArray = json_decode($jsonStr);
?>


<html>
	<head>
		<title>Left Sidebar - Phase Shift by TEMPLATED</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-wide.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body>

		<!-- Wrapper -->
			<div class="wrapper style1">

                
				<?php include 'menu_bar.php'; ?>
				<!-- Page -->
					<div id="page" class="container">
						<div class="row">
		
							<!-- Sidebar -->
							<div id="sidebar" class="4u">
								<section>
									<header class="major">
										<h2>Projects:</h2>
									</header>
									<ul class="default">
									<?php 
                                        foreach ($projectsArray as $project) {
                                            echo '<li><a href="#' . $project->title . '">' . $project->title . '</a></li>';
										}
                                    ?>
										
									</ul>
								</section>
							</div>
							
							<!-- Content -->
							<div id="content" class="8u skel-cell-important">
								<section>
									<header class="major">
										<h2>My Projects</h2>
										<span class="byline">A mix of interative multimedia applications</span>
									</header>
									<p>Here you can find the projects I've worked on. It is a eclectic mix of applications ranging from games to multimedia utilities. I started building the application Music4MyEyes as a passtime, as a way to learn more about programing, and to try out the Processing programing framework, but as I got more into the development, Music4MyEyes turned into a fully fledge tool. Developing each application, I learned new aspects of Processing and my programing quality improved.</p>
									<p>Below you can find writeups for each of my apps in chronological order. For each application I include a video demostration, a link to download the app, and a link to its GitHub repository.</p>
								</section>
							</div>
		
						</div>
					</div>
				<!-- /Page -->
                <br><br>
                
                <!-- Page loop -->
                <?php
               
                
                foreach ($projectsArray as $project) {
                    echo '
                        <div  id="page" class="container" >
                            <div id="Music4MyEyes" class="row">
                            
                                <!-- Content -->
                                <div id="content" class="10u skel-cell-important">
                                    <section>
                                        <header class="major">
                                            <h2 id="' . $project->title . '">' . $project->title . '</h2>
                                            <span class="byline">' . $project->subtitle . '</span>
                                        </header>
                                        <p align="middle">
                                        <iframe width="560" height="315"  src="' . $project->videoLink . '" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </p>
                                        <p>' . $project->body . '</p>
                                        
                                        <p align="right">
                                        <a href="#header">Back to the top.</a>
                                        </p>
                                        
                                    </section>
                                </div>
            
                                <!-- Sidebar -->
                                <div id="sidebar" class="2u">
                                    <section>
                                        <header class="major">
                                            <h2>Links</h2>
                                        </header>
                                        <ul class="default">
                                            <li><a href="' . $project->links[0]->address . '">' . $project->links[0]->text . '</a></li>
                                            <li><a href="' . $project->links[1]->address . '">' . $project->links[1]->text . '</a></li>
                                            <li><a href="' . $project->links[2]->address . '">' . $project->links[2]->text . '</a></li>
                                            
                                        </ul>
                                    </section>
                                </div>
                                
                            </div>
                        </div>
                    <!-- /Page loop -->
                <br><br>
            ';
            }
            ?>

	</div>

	

	<!-- Copyright -->
		<div id="copyright">
			<div class="container">
				<div class="copyright">
					<p>Design by <a href="http://templated.co">TEMPLATED</a> 
					<ul class="icons">
						<li><a href="#" class="fa fa-facebook"><span>Facebook</span></a></li>
						<li><a href="https://www.youtube.com/channel/UC5rllsScazFsEJteCECxuZw" class="fa fa-youtube"><span>YouTube</span></a></li>
						<li><a href="https://github.com/mariabethania" class="fa fa-github"><span>GitHub</span></a></li>
					</ul>
				</div>
			</div>
		</div>

	</body>
</html>
