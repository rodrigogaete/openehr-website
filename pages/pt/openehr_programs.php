﻿<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'openEHR Programas';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/pt/_header_top.php');
?>

	<div id="MainArea" style="margin-left:60px; margin-top:35px; margin-bottom:100px; width:900px;">
		
		<div id="Content">
<!-- - - - - - - - - - - - - - - - - - - - - - - Content starts here - - - - - - - - - - - - - - - - - - - - - - - - - -->

			<h1><?php echo "$PageName";?></h1>
			
			<p>The main work of the openEHR Foundation is performed by four 'programs' which respectively focus on specifications, clinical modelling, software, and localisation. The first three of these programs correspond to the primary types of output of the openEHR community. Work on all of the programs is performed by community members. A lightweight system of governance, influenced by the governance systems of Apache Foundation and the International Health Terminology Standards Development Organisation (IHTSDO), has been defined to enable defensible decision-making.</p>
			
			<img src="/files/programs/SpecificationFrame.png" alt="Specification program image" usemap="#specification" style="float:left;"/>
			<map name="specification">
			  <area shape="rect" coords="0,0,250,150" href="/pt/programs/specification" alt="Specification Program" />
			</map> 
			
			<h2>Specification Program</h2>
			<p>The Specifications Program defines the formal models and languages defining openEHR data, openEHR content models (archetypes and templates) and openEHR services and APIs. These specifications are published and used in their own right and also underpin the Clinical Modelling Program (for which they provide the language of archetypes) and the Software Program (for which they provide schemas and interface definitions for software).</p>
			<p style="margin-bottom:40px;"><a href="/pt/programs/specification" style="line-height:200%;">Learn more</a></p>
			
			
			<img src="/files/programs/ModelsFrame.png" alt="Clinical models program image" usemap="#models" style="float:left;"/>
			<map name="models">
			  <area shape="rect" coords="0,0,250,150" href="/pt/programs/clinicalmodels" alt="Clinical Models Program" />
			</map> 
			
			<h2>Clinical Models Program</h2>
			<p>The work of the Clinical Modelling Program is performed largely by clinical professionals and health informatics experts working on the Clinical Knowledge Manager (CKM), building archetypes which act as international standards for re-usable content. These archetypes can be used by national and local programs, and are the basis for building templates, from which software artefacts are generated by tooling.</p>
			<p style="margin-bottom:40px;"><a href="/pt/programs/clinicalmodels" style="line-height:200%;">Learn more</a></p>
			
			
			<img src="/files/programs/SoftwareFrame.png" alt="Software program image" usemap="#software" style="float:left;"/>
			<map name="software">
			  <area shape="rect" coords="0,0,250,150" href="/pt/programs/software" alt="Software Program" />
			</map> 
			
			<h2>Software Program</h2>
			<p>The Software Program is responsible for the development of open source reference implementations of both tooling and information system components. Such components can be freely used by openEHR implementers to build their own tooling and systems, and are available under the industry-friendly Apache 2 licence. The software program performs another very important job: ensuring the implementability of all specifications.</p>
			<p style="margin-bottom:40px;"><a href="/pt/programs/software" style="line-height:200%;">Learn more</a></p>
				
				
			<img src="/files/programs/LocalisationFrame.png" alt="Localisation program image" usemap="#localisation" style="float:left;"/>
			<map name="localisation">
			  <area shape="rect" coords="0,0,250,150" href="/pt/programs/localisation" alt="Localisation Program" />
			</map> 
			
			<h2>Localisation Program</h2>
			<p>Bringing the technical outputs of the other programs to the real world is the job of the Localisation Program, which works in a distributed fashion around the world, generally in collaboration with local, regional and national standards groups, as well as industry and academic groups. The Localisation Program aims to make the outputs of openEHR available and usable in local languages and within diverse healthcare cultures and funding environments.</p>
			<p style="margin-bottom:40px;"><a href="/pt/programs/localisation" style="line-height:200%;">Learn more</a></p>
			
<!-- - - - - - - - - - - - - - - - - - - - - - - Content ends here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		</div>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/pt/_footer.php');?>