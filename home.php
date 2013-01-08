<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>

	<title>Welcome to openEHR - Homepage</title>
	<?php include 'panel/headpanelhome.php' ?>
	
</head>


<body>

<div id="MainFrame">
	
	<div id="TopPanel">
		<?php include 'panel/toppanel.php' ?>
	</div>
	
	<div id="TopMenu">
	
		<div class="nav">
			<?php include 'menu/topmenu.php' ?>
		</div>
		
	</div> 

	<div id="MainArea" style="height:690px">

		<div id="WhatFrame">
			<img src="gui/WhatFrame.png" usemap="#what"/>
			<map name="what">
			  <area shape="rect" coords="0,0,220,150" href="what_is_openehr" alt="What is openEHR" />
			</map> 
			<div id="TextFrame">
				<h1>What is<br/>openEHR?</h1>
				<p>openEHR is about enabling ICT to effectively support all aspects of healthcare.
				<br/><a href="what_is_openehr" style="line-height:200%;">Learn more</a></p>
			</div>
		</div>
		
		<div id="WhoFrame">
			<img src="gui/WhoFrame.png" usemap="#who"/>
			<map name="who">
			  <area shape="rect" coords="0,0,220,150" href="who_is_using_openehr" alt="Who is using openEHR" />
			</map> 
			<div id="TextFrame">
				<h1>Who is using<br/>openEHR?</h1>
				<p>Companies, governments, universities, research centres all around the world.
				<br/><a href="who_is_using_openehr" style="line-height:200%;">Learn more</a></p>
			</div>
		</div>

		<div id="AboutFrame">
			<img src="gui/AboutFrame.png" usemap="#about"/>
			<map name="about">
			  <area shape="rect" coords="0,0,220,150" href="about/foundation" alt="About openEHR Foundation" />
			</map> 
			<div id="TextFrame">
				<h1>About openEHR<br/>Foundation</h1>
				<p>openEHR Foundation is open for everybody to join and participate.
				<br/><a href="about/foundation"  style="line-height:200%;">Learn more</a></p>
			</div>
		</div>
			
		<div id="JoinFrame">
			<img src="gui/ProgramsFrame.png" usemap="#join"/>
			<map name="join">
			  <area shape="rect" coords="0,0,220,150" href="openehr_programs" alt="openEHR Programs" />
			</map> 
			<div id="TextFrame">
				<h1>The openEHR<br/>Programs</h1>
				<p>4 openEHR Programs: Specification, Clinical Models, Software, Localisation 
				<br/><a href="openehr_programs" style="line-height:200%;">Learn more</a></p>
			</div> 
		</div>
		
		<div id="HomeFrame2">
			<div id="TwitterFrame">
				<h2>openEHR Talk</h2>
				<div style="position: absolute; top:30px; padding-left:1px; padding-right:10px; word-wrap:break-word; ">
					<script charset="utf-8" src="http://widgets.twimg.com/j/2/widget.js"></script>
					<script>
					new TWTR.Widget({
					 version: 2,
					 type: 'search',
					 search: 'openEHR AND -openehrCKM',
					 lang: 'en',
					 interval: 30000,
					 title: '',
					 subject: '',
					 width: 190,
					 height: 100,
					 theme: {
					   shell: {
						 background: 'none',
						 color: '#3386AE'
					   },
					   tweets: {
						 background: 'none',
						 color: '#000000',
						 links: '#3386AE'
					   }
					 },
					 features: {
					   scrollbar: false,
					   loop: true,
					   live: true,
					   behavior: 'default'
					 }
					}).render().start();
					</script>
				</div>
				
				<br/><br/><br/><br/><br/><br/><br/><br/>
				<a href="news_events/clinical_model_news" style="color:#023670;"><h2>CKM Activity</h2></a>
				<div style="position: absolute; top:190px; padding-left:1px; padding-right:10px; word-wrap:break-word; ">
					<script charset="utf-8" src="http://widgets.twimg.com/j/2/widget.js"></script>
					<script>
					new TWTR.Widget({
					  version: 2,
					  type: 'search',
					  search: 'from:@clinicalmodels OR from:@openEHRCKM',
					  interval: 30000,
					  title: '',
					  subject: '',
					  width: 190,
					  height: 100,
					  theme: {
						shell: {
						  background: 'none',
						  color: '#3386AE'
						},
						tweets: {
						  background: 'none',
						  color: '#000000',
						  links: '#3386AE'
						}
					  },
					  features: {
						scrollbar: false,
						loop: true,
						live: true,
						behavior: 'default'
					  }
					}).render().start();
					</script>
				</div>
			</div>
			
			
			<div id="Twitter2Frame">
				<div id="LinksFrame">
					<a href="news_events/industry_news" style="color:#023670;"><h2>Industry News</h2></a>
					<a href="news_events/industry_news/20120516">Brazil re-affirms commitment to openEHR</a>
					<h6>16. May 2012</h6>
					<br/>
					<a href="news_events/industry_news/20111214">Clinical Information Modelling Initiative goes with Archetypes & UML profile</a>
					<h6>14. December 2011</h6>
					<br/>
					<a href="news_events/industry_news/20110106">Brazil chooses openEHR for EHR at all levels of government</a>
					<h6>6. January 2011</h6>
					<br/>
					<a href="news_events/industry_news/20090709">openEHR in &pound;1.1m Wellcome Trust Sintero project</a>
					<h6>9. July 2009</h6>
				</div>
			</div>
			

			<div id="NewsFrame">
				<div id="LinksFrame">
					<a href="news_events/announcements" style="color:#023670;"><h2>Announcements</h2></a>
					<a href="news_events/announcements/20121212">openEHR Transition Update</a>
					<h6>12. December 2012</h6>
					<br/>
					<a href="news_events/announcements/20120515">Board statement on Clinical Knowledge Manager</a>
					<h6>15. May 2012</h6>
					<br/>
					<a href="news_events/announcements/20120211">Interim board announces new openEHR Program groups</a>
					<h6>11. February 2012</h6>
					<br/>
					<a href="news_events/announcements/20111020">Update on openEHR Governance</a>
					<h6>20. October 2011</h6>
					<br/>
					<a href="news_events/announcements/20110905">openEHR Transition Announcement</a>
					<h6>5. September 2011</h6>
				</div>	
			</div>
			
			
			<div id="ReleasesFrame">
				<div id="LinksFrame">
					<a href="news_events/releases" style="color:#023670;"><h2>Releases</h2></a>
					<a href="news_events/releases/20120813">ADL - syntax highlight for Notepad++</a>
					<h6>13. August 2012</h6>
					<br/>
					<a href="news_events/releases/20120802">ADL 1.5 Workbench - beta release 8</a>
					<h6>2. August 2012</h6>
					<br/>
					<a href="news_events/releases/20110909">ADL 1.5 Workbench - beta release 4</a>
					<h6>9. September 2011</h6>
					<br/>
					<a href="news_events/releases/20110304">First open source release of openEHR.NET</a>
					<h6>4. March 2011</h6>
					<br/>
					<a href="news_events/releases/20110114">ADL 1.5 Workbench - beta release 3</a>
					<h6>14. January 2011</h6>
				</div>
			</div>	 
			
			
		</div>
	</div>

	<div id="BottomMenu">
		<?php include 'menu/bottommenu.php' ?>
	</div>

	<div id="BottomPanel">
		<?php include 'panel/bottompanel.php' ?>
	</div>

</div>

<script type="text/javascript">
var dropdown=new MENU.dropdown.init("dropdown", {id:'menu', active:'menuhover'});
</script>

</body>
</html>