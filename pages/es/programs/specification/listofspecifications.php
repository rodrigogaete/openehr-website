﻿<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'Especificaciones';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/es/_header.php');
?>

		<div id="Content">
<!-- ------------------------------------------- Content starts here ------------------------------------------------- -->
		
			<h1><?php echo "$PageName";?></h1>
			
			<h2>Overview</h2>
			<p>The following tables define deliverables of Specification Program.</p>
			
			
			<h2>Core</h2>
			<table class="TableMain">
			<tbody>
				<tr>
					<th class="TableMainT"> Component</th>
					<th class="TableMainT"> Documentary Specification </th>
					<th class="TableMainT"> Description </th>
				</tr>
				<tr>
					<td class="TableMainC" colspan=3> <b>Requirements</b> </td>
				</tr>
				<tr>
					<td class="TableMainC"> Standards conformance </td>
					<td class="TableMainC"> ISO 18308 Conformance statement </td>
					<td class="TableMainC"> Document describing conformance of openEHR architecture to ISO TS 18308, &quot;Requirements for EHR Architectures&quot;. </td>
				</tr>
				<tr>
					<td class="TableMainC" colspan=3> <b>Architecture</b> </td>
				</tr>
				<tr>
					<td class="TableMainC"> Architecture <br class="atl-forced-newline" /> </td>
					<td class="TableMainC"> Architecture Overview <br class="atl-forced-newline" /> </td>
					<td class="TableMainC"> &quot;Read me first&quot; document for the whole architecture. provides a summary of the reference, archetype and service models, and describes global semantics. </td>
				</tr>
				<tr>
					<td class="TableMainC"> Reference Model</td>
					<td class="TableMainC"> EHR IM</td>
					<td class="TableMainC"> The information model of the openEHR EHR. </td>
				</tr>
				<tr>
					<td class="TableMainC"> &nbsp;</td>
					<td class="TableMainC"> EHR Extract IM</td>
					<td class="TableMainC"> The information model of the EHR Extract, which is a serilialisation of content from an EHR. </td>
				</tr>
				<tr>
					<td class="TableMainC"> &nbsp;</td>
					<td class="TableMainC"> Common IM </td>
					<td class="TableMainC"> Information model containing common concepts, including the archetype-enabling LOCATABLE class, party references, audits and attestations, change control, and authored resources. </td>
				</tr>
				<tr>
					<td class="TableMainC"> &nbsp;</td>
					<td class="TableMainC"> Data Structures IM </td>
					<td class="TableMainC"> Information model of data structures, incuding a powerful model of HISTORY and EVENT. </td>
				</tr>
				<tr>
					<td class="TableMainC"> &nbsp;</td>
					<td class="TableMainC"> Data Types IM </td>
					<td class="TableMainC"> Information model of data types, including quantities, date/times, plain and coded text, time specification, multimedia and URIs. </td>
				</tr>
				<tr>
					<td class="TableMainC"> &nbsp;</td>
					<td class="TableMainC"> Support IM </td>
					<td class="TableMainC"> Support model defining identifiers, assumed types, and terminology interface specification used in the rest of the specifications. </td>
				</tr>
				<tr>
					<td class="TableMainC"> Archetype Model  </td>
					<td class="TableMainC"> ADL 1.4  </td>
					<td class="TableMainC"> Abstract syntax specification for archetypes 1.4 edition of language (used in ISO 13606-2). </td>
				</tr>
				<tr>
					<td class="TableMainC"> &nbsp;</td>
					<td class="TableMainC"> AOM 1.4 </td>
					<td class="TableMainC"> Object model of archetypes corresponding to ADL 1.4. </td>
				</tr>
				<tr>
					<td class="TableMainC"> &nbsp;</td>
					<td class="TableMainC"> ADL 1.5 </td>
					<td class="TableMainC"> ADL 1.5 draft: ADL now includes dedicated section on specialisation, many  new examples, improved descriptions and corrections of errors. </td>
				</tr>
				<tr>
					<td class="TableMainC"> &nbsp;</td>
					<td class="TableMainC"> AOM 1.5 </td>
					<td class="TableMainC"> AOM 1.5 draft - the AOM description now includes uniquely identified  formally testable validity conditions (suitable for output by  compilers), revised primitive types, improved ontology section, and constraint model extended to represent differential archetypes. </td>
				</tr>
				<tr>
					<td class="TableMainC"> &nbsp;</td>
					<td class="TableMainC"> Template model </td>
					<td class="TableMainC"> Object model of templates. </td>
				</tr>
				<tr>
					<td class="TableMainC"> Service Model  </td>
					<td class="TableMainC"> EHR Service, etc  </td>
					<td class="TableMainC"> &nbsp;</td>
				</tr>
				<tr>
					<td class="TableMainC"> Terminology </td>
					<td class="TableMainC"> openEHR Vocabulary  </td>
					<td class="TableMainC"> Documentary form of the&nbsp;openEHR terminology, which is a set of vocabularies and code sets used by the reference and archetype models. </td>
				</tr>
				<tr>
					<td class="TableMainC"> Querying  </td>
					<td class="TableMainC"> Archetype Query Language, a-path  </td>
					<td class="TableMainC"> &nbsp;</td>
				</tr>
				<tr>
					<td class="TableMainC"> Guidelines and&nbsp; Decision Support </td>
					<td class="TableMainC"> Guideline Definition Language (GDL) </td>
					<td class="TableMainC"> A language for expressing computable guidelines for use with decision support components.</td>
				</tr>
				</tbody>
			</table>

			<br />
			
			
			<h2>Non-core</h2>
			<table class="TableMain">
			<tbody>
				<tr>
					<th class="TableMainT"> Component  </th>
					<th class="TableMainT"> Documentary Specification  </th>
					<th class="TableMainT"> Description  </th>
				</tr>
				<tr>
					<td class="TableMainC" colspan=3> <b>Implementation</b>  </td>
				</tr>
				<tr>
					<td class="TableMainC"> XML  </td>
					<td class="TableMainC"> XML development guide  </td>
					<td class="TableMainC"> &nbsp;</td>
				</tr>
				<tr>
					<td class="TableMainC"> &nbsp;</td>
					<td class="TableMainC"> TDS (XSD) specification </td>
					<td class="TableMainC"> &nbsp;</td>
				</tr>
				<tr>
					<td class="TableMainC"> Java </td>
					<td class="TableMainC"> Java development guide  </td>
					<td class="TableMainC"> Guide to java implementation of openEHR.</td>
				</tr>
				<tr>
					<td class="TableMainC"> &nbsp;</td>
					<td class="TableMainC"> TDO specification </td>
					<td class="TableMainC"> &nbsp;</td>
				</tr>
				<tr>
					<td class="TableMainC"> &nbsp;</td>
					<td class="TableMainC"> Lightweight JSON specification </td>
					<td class="TableMainC"> &nbsp;</td>
				</tr>
				<tr>
					<td class="TableMainC"> .Net  </td>
					<td class="TableMainC"> .Net development guide  </td>
					<td class="TableMainC"> &nbsp;</td>
				</tr>
				<tr>
					<td class="TableMainC"> &nbsp;</td>
					<td class="TableMainC"> TDO specification </td>
					<td class="TableMainC"> &nbsp;</td>
				</tr>
				<tr>
					<td class="TableMainC"> Form languages  </td>
					<td class="TableMainC"> Form generation specification  </td>
					<td class="TableMainC"> &nbsp;</td>
				</tr>
				<tr>
					<td class="TableMainC"> &nbsp;</td>
					<td class="TableMainC"> User interface specifications  </td>
					<td class="TableMainC"> &nbsp;</td>
				</tr>
				<tr>
					<td class="TableMainC" colspan=3> <b>Education</b>  </td>
				</tr>
				<tr>
					<td class="TableMainC"> Software Development </td>
					<td class="TableMainC"> TBD  </td>
					<td class="TableMainC"> &nbsp;</td>
				</tr>
				<tr>
					<td class="TableMainC" colspan=3> <b>Standards Interfaces</b>  </td>
				</tr>
				<tr>
					<td class="TableMainC"> ISO 13606  </td>
					<td class="TableMainC"> standardised mapping / converged model  </td>
					<td class="TableMainC"> &nbsp;</td>
				</tr>
				<tr>
					<td class="TableMainC"> HL7v2  </td>
					<td class="TableMainC"> Standard openEHR template library for message interfacing  </td>
					<td class="TableMainC"> &nbsp;</td>
				</tr>
				<tr>
					<td class="TableMainC"> HL7 CDA  </td>
					<td class="TableMainC"> Transformationalgorithms  </td>
					<td class="TableMainC"> &nbsp;</td>
				</tr>
				<tr>
					<td class="TableMainC"> ASTM CCR  </td>
					<td class="TableMainC"> Standard archetype / template expression.  </td>
					<td class="TableMainC"> &nbsp;</td>
				</tr>
			</tbody>
			</table>
		
<!-- ------------------------------------------- Content ends here ------------------------------------------------- -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/es/_footer.php');?>