<?php include("head.php"); ?>
	
<main class="page-section site-main">
	
	<section class="welcome" id="top"> 

		<inner-column>

			
				<h1>Drew Vo</h1>

				<p>The butcher,</p>
				<p>the baker,</p>
				<p>the web app maker.</p>

			<welcome-mod>

				<picture>
					
					<img src="images/drew-nike.png" alt="">
				</picture>

				<?php include("nav.php"); ?>

				<svg class="pink-circle1" width="100%" height="100%" viewBox="0 0 203 203" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;">
				    <g transform="matrix(1,0,0,1,-25057.9,-11815.3)">
				        <g transform="matrix(1.12541,0,0,2.85093,25200.6,11612.9)">
				            <g transform="matrix(1.29325,0,0,0.510511,-62.5567,43.5973)">
				                <circle cx="19.824" cy="123.16" r="69.479" style="fill:rgb(255,215,215);"/>
				            </g>
				        </g>
				    </g>
				</svg>
			</welcome-mod>
		</inner-column>
	</section>

	<section class="featured-projects" id="featured-projects">
		
		<inner-column>
			
			<featured-projects-mod class="main-section">

				<featured-projects-title>

					<h2>Featured Projects</h2>
					<h2>I made these!</h2>
				</featured-projects-title>

				<ul class="featured-projects-list">
					
					<li>
						
						<a class="project-module" href="#">
						
							<h3>Cake Design by Gregory</h3>
							<p>Personal website for sugar flower artist, Gregory</p>
						</a>
					</li>

					<li>

						<a class="project-module" href="#">
							
							<h3>Responsive Layout Garden</h3>
							<p>My design system of responsive web modules</p>
						</a>
					</li>

					<li>
						<a class="project-module" href="#">
							
							<h3>Layout Imitation Challenge</h3>
							<p>How well can I build a website's layout copy?</p>
						</a>
					</li>
				</ul>

				<?=$upArrow?>
			</featured-projects-mod>	
		</inner-column>
	</section>

	<section class="resume" id="resume">
		
		<inner-column>

			<resume-mod class="main-section">

				<resume-title>

					<h2>Resume</h2>
					<h2>I did this!</h2>
				</resume-title>

				<ul class="resume-list">
						
					<li class="company">
						
						<h3>Thumbtack</h3>
						<role>
							
							<h4>Senior Product Operations Manager</h4>
							<resume-date>Feb 2022 - Dec 2022</resume-date>	
						</role>
					</li>
						
					<li class="company">
						
						<h3>Verte</h3>
						<role>
							
							<h4>Senior Manager, Customer Success</h4>
							<resume-date>Aug 2021 - Feb 2022</resume-date>
						</role>
					</li>

					<li class="company">
						
						<h3>Flexport</h3>
						<role>
							
							<h4>Program Manager, Operational Excellence</h4>
							<resume-date>Aug 2020 - Aug 2021</resume-date>
						</role>
						<role>
							
							<h4>Global Operations Manager</h4>
							<resume-date>Sep 2019 - Aug 2020</resume-date>
						</role>
						<role>
							
							<h4>Senior Global Operations Associate</h4>
							<resume-date>Feb 2018 - Sep 2019</resume-date>
						</role>
						<role>
							
							<h4>Global Operations Associate</h4>
							<resume-date>Mar 2017 - Feb 2018</resume-date>
						</role>
					</li>

					<li class="company">
						
						<h3>Shire</h3>
						<role>
							
							<h4>Project Manager</h4>
							<resume-date>Oct 2015 - Mar 2017</resume-date>
						</role>
						<role>
							
							<h4>Operations Leadership Development Program Associate</h4>
							<resume-date>Jul 2013 - Oct 2015</resume-date>
						</role>
					</li>
				</ul>

				<?=$upArrow?>
			</resume-mod>				
		</inner-column>
	</section>

</main>