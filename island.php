<?php
require_once('connect/connect.php');
require_once('functions/function.php');
session_start();
if(!isset($_SESSION['maintenance']) || $_SESSION['maintenance']==0){
   			echo "<p align='center' style='color:red'><strong>Le site sera de retour le Dimanche 15/03 à 10h</strong></p>";
   		}else{
?>
<section id="island" class="one">
<div class="container">
					
	<header>
		<h2>Island</h2>
	</header>
	<div id="picture-island">
	<div style="float:left;"> <img src="images/legende_left.PNG"/></div>
		<img style="float:left; "id="picture-island-img" src="images/carte.PNG" usemap="#map"/>

		<map name="map">
		<!-- #$-:Image map file created by GIMP Image Map plug-in -->
		<!-- #$-:GIMP Image Map plug-in by Maurits Rijk -->
		<!-- #$-:Please do not edit lines starting with "#$" -->
		<!-- #$VERSION:2.3 -->
		<!-- #$AUTHOR:Benjamin  -->
		<!-- Ligne A  -->
		<area shape="rect" coords="340,240,420,300" alt="spawn" id="case" href="javascript:initDiv('village.php','main');" />

		<area shape="rect" coords="0,0,20,20" id="ia1"  nohref />
		<area shape="rect" coords="20,0,40,20" id="ia2"  nohref />
		<area shape="rect" coords="40,0,60,20" id="ia3"  nohref />
		<area shape="rect" coords="60,0,80,20" id="ia4"  nohref />
		<area shape="rect" coords="80,0,100,20" id="ia5"  nohref />
		<area shape="rect" coords="100,0,120,20" id="ia6"  nohref/>
		<area shape="rect" coords="120,0,140,20" id="ia7"  nohref />
		<area shape="rect" coords="140,0,160,20" id="ia8"  nohref />
		<area shape="rect" coords="160,0,180,20" id="ia9"  nohref />
		<area shape="rect" coords="180,0,200,20" id="ia10"  nohref />
		<area style="background-color:#000000;" shape="rect" coords="200,0,220,20" id="ia11"  href="javascript:showCase('ia11');" />
		<area shape="rect" coords="220,0,240,20" id="ia12"  href="javascript:showCase('ia12');" />
		<area shape="rect" coords="240,0,260,20" id="ia13"  href="javascript:showCase('ia13');" />
		<area shape="rect" coords="260,0,280,20" id="ia14"  href="javascript:showCase('ia14');" />
		<area shape="rect" coords="280,0,300,20" id="ia15"  href="javascript:showCase('ia15');" />
		<area shape="rect" coords="300,0,320,20" id="ia16"  href="javascript:showCase('ia16');" />
		<area shape="rect" coords="320,0,340,20" id="ia17"  href="javascript:showCase('ia17');" />
		<area shape="rect" coords="340,0,360,20" id="ia18"  href="javascript:showCase('ia18');" />
		<area shape="rect" coords="360,0,380,20" id="ia19"  href="javascript:showCase('ia19');" />
		<area shape="rect" coords="380,0,400,20" id="ia20"  href="javascript:showCase('ia20');" />
		<area shape="rect" coords="400,0,420,20" id="ia21"  href="javascript:showCase('ia21');" />
		<area shape="rect" coords="420,0,440,20" id="ia22"  href="javascript:showCase('ia22');" />
		<area shape="rect" coords="440,0,460,20" id="ia23"  href="javascript:showCase('ia23');" />
		<area shape="rect" coords="460,0,480,20" id="ia24"  href="javascript:showCase('ia24');" />
		<area shape="rect" coords="480,0,500,20" id="ia25"  href="javascript:showCase('ia25');" />
		<!-- Ligne B  -->
		<area shape="rect" coords="0,20,20,40" id="ib1" nohref />
		<area shape="rect" coords="20,20,40,40" id="ib2"  nohref />
		<area shape="rect" coords="40,20,60,40" id="ib3"  nohref />
		<area shape="rect" coords="60,20,80,40" id="ib4"  nohref />
		<area shape="rect" coords="80,20,100,40" id="ib5" nohref />
		<area shape="rect" coords="100,20,120,40" id="ib6" nohref />
		<area shape="rect" coords="120,20,140,40" id="ib7"  nohref />
		<area shape="rect" coords="140,20,160,40" id="ib8"  nohref />
		<area shape="rect" coords="160,20,180,40" id="ib9"  nohref />
		<area shape="rect" coords="180,20,200,40" id="ib10"  nohref />
		<area shape="rect" coords="200,20,220,40" id="ib11"  nohref/>
		<area shape="rect" coords="220,20,240,40" id="ib12"  href="javascript:showCase('ib12');" />
		<area shape="rect" coords="240,20,260,40" id="ib13"  href="javascript:showCase('ib13');" />
		<area shape="rect" coords="260,20,280,40" id="ib14"  href="javascript:showCase('ib14');" />
		<area shape="rect" coords="280,20,300,40" id="ib15"  href="javascript:showCase('ib15');" />
		<area shape="rect" coords="300,20,320,40" id="ib16"  href="javascript:showCase('ib16');" />
		<area shape="rect" coords="320,20,340,40" id="ib17"  href="javascript:showCase('ib17');" />
		<area shape="rect" coords="340,20,360,40" id="ib18"  href="javascript:showCase('ib18');" />
		<area shape="rect" coords="360,20,380,40" id="ib19"  href="javascript:showCase('ib19');" />
		<area shape="rect" coords="380,20,400,40" id="ib20"  href="javascript:showCase('ib20');" />
		<area shape="rect" coords="400,20,420,40" id="ib21"  href="javascript:showCase('ib21');" />
		<area shape="rect" coords="420,20,440,40" id="ib22"  href="javascript:showCase('ib22');" />
		<area shape="rect" coords="440,20,460,40" id="ib23"  href="javascript:showCase('ib23');" />
		<area shape="rect" coords="460,20,480,40" id="ib24"  href="javascript:showCase('ib24');" />
		<area shape="rect" coords="480,20,500,40" id="ib25"  href="javascript:showCase('ib25');" />
		<!-- Ligne C  -->
		<area shape="rect" coords="0,40,20,60" id="ic1"  nohref />
		<area shape="rect" coords="20,40,40,60" id="ic2"  nohref />
		<area shape="rect" coords="40,40,60,60" id="ic3"  nohref />
		<area shape="rect" coords="60,40,80,60" id="ic4"  nohref />
		<area shape="rect" coords="80,40,100,60" id="ic5"  nohref />
		<area shape="rect" coords="100,40,120,60" id="ic6"  nohref />
		<area shape="rect" coords="120,40,140,60" id="ic7"  nohref />
		<area shape="rect" coords="140,40,160,60" id="ic8"  nohref />
		<area shape="rect" coords="160,40,180,60" id="ic9"  nohref/>
		<area shape="rect" coords="180,40,200,60" id="ic10"  nohref />
		<area shape="rect" coords="200,40,220,60" id="ic11"  nohref />
		<area shape="rect" coords="220,40,240,60" id="ic12"  nohref />
		<area shape="rect" coords="240,40,260,60" id="ic13"  href="javascript:showCase('ic13');" />
		<area shape="rect" coords="260,40,280,60" id="ic14"  href="javascript:showCase('ic14');" />
		<area shape="rect" coords="280,40,300,60" id="ic15"  href="javascript:showCase('ic15');" />
		<area shape="rect" coords="300,40,320,60" id="ic16"  href="javascript:showCase('ic16');" />
		<area shape="rect" coords="320,40,340,60" id="ic17"  href="javascript:showCase('ic17');" />
		<area shape="rect" coords="340,40,360,60" id="ic18"  href="javascript:showCase('ic18');" />
		<area shape="rect" coords="360,40,380,60" id="ic19"  href="javascript:showCase('ic19');" />
		<area shape="rect" coords="380,40,400,60" id="ic20"  href="javascript:showCase('ic20');" />
		<area shape="rect" coords="400,40,420,60" id="ic21"  href="javascript:showCase('ic21');" />
		<area shape="rect" coords="420,40,440,60" id="ic22"  href="javascript:showCase('ic22');" />
		<area shape="rect" coords="440,40,460,60" id="ic23"  href="javascript:showCase('ic23');" />
		<area shape="rect" coords="460,40,480,60" id="ic24"  href="javascript:showCase('ic24');" />
		<area shape="rect" coords="480,40,500,60" id="ic25"  href="javascript:showCase('ic25');" />
		<!-- Ligne D  -->
		<area shape="rect" coords="0,60,20,80" id="id1"  nohref />
		<area shape="rect" coords="20,60,40,80" id="id2"  nohref />
		<area shape="rect" coords="40,60,60,80" id="id3"  nohref />
		<area shape="rect" coords="60,60,80,80" id="id4"  nohref />
		<area shape="rect" coords="80,60,100,80" id="id5"  nohref />
		<area shape="rect" coords="100,60,120,80" id="id6"  nohref />
		<area shape="rect" coords="120,60,140,80" id="id7"  nohref />
		<area shape="rect" coords="140,60,160,80" id="id8"  nohref />
		<area shape="rect" coords="160,60,180,80" id="id9"  nohref />
		<area shape="rect" coords="180,60,200,80" id="id10"  nohref />
		<area shape="rect" coords="200,60,220,80" id="id11"  nohref />
		<area shape="rect" coords="220,60,240,80" id="id12"  nohref />
		<area shape="rect" coords="240,60,260,80" id="id13"  nohref />
		<area shape="rect" coords="260,60,280,80" id="id14"  href="javascript:showCase('id14');" />
		<area shape="rect" coords="280,60,300,80" id="id15"  href="javascript:showCase('id15');" />
		<area shape="rect" coords="300,60,320,80" id="id16"  href="javascript:showCase('id16');" />
		<area shape="rect" coords="320,60,340,80" id="id17"  href="javascript:showCase('id17');" />
		<area shape="rect" coords="340,60,360,80" id="id18"  href="javascript:showCase('id18');" />
		<area shape="rect" coords="360,60,380,80" id="id19"  href="javascript:showCase('id19');" />
		<area shape="rect" coords="380,60,400,80" id="id20"  href="javascript:showCase('id20');" />
		<area shape="rect" coords="400,60,420,80" id="id21"  href="javascript:showCase('id21');" />
		<area shape="rect" coords="420,60,440,80" id="id22"  href="javascript:showCase('id22');" />
		<area shape="rect" coords="440,60,460,80" id="id23"  href="javascript:showCase('id23');" />
		<area shape="rect" coords="460,60,480,80" id="id24"  href="javascript:showCase('id24');" />
		<area shape="rect" coords="480,60,500,80" id="id25"  href="javascript:showCase('id25');" />
		<!-- Ligne E  -->
		<area shape="rect" coords="0,80,20,100" id="ie1"  nohref />
		<area shape="rect" coords="20,80,40,100" id="ie2"  nohref />
		<area shape="rect" coords="40,80,60,100" id="ie3"  nohref />
		<area shape="rect" coords="60,80,80,100" id="ie4"  nohref />
		<area shape="rect" coords="80,80,100,100" id="ie5"  nohref />
		<area shape="rect" coords="100,80,120,100" id="ie6"  nohref />
		<area shape="rect" coords="120,80,140,100" id="ie7"  nohref />
		<area shape="rect" coords="140,80,160,100" id="ie8"  nohref />
		<area shape="rect" coords="160,80,180,100" id="ie9"  nohref />
		<area shape="rect" coords="180,80,200,100" id="ie10"  nohref />
		<area shape="rect" coords="200,80,220,100" id="ie11"  nohref />
		<area shape="rect" coords="220,80,240,100" id="ie12"  nohref />
		<area shape="rect" coords="240,80,260,100" id="ie13"  nohref />
		<area shape="rect" coords="260,80,280,100" id="ie14"  href="javascript:showCase('ie14');" />
		<area shape="rect" coords="280,80,300,100" id="ie15"  href="javascript:showCase('ie15');" />
		<area shape="rect" coords="300,80,320,100" id="ie16"  href="javascript:showCase('ie16');" />
		<area shape="rect" coords="320,80,340,100" id="ie17"  href="javascript:showCase('ie17');" />
		<area shape="rect" coords="340,80,360,100" id="ie18"  href="javascript:showCase('ie18');" />
		<area shape="rect" coords="360,80,380,100" id="ie19"  href="javascript:showCase('ie19');" />
		<area shape="rect" coords="380,80,400,100" id="ie20"  href="javascript:showCase('ie20');" />
		<area shape="rect" coords="400,80,420,100" id="ie21"  href="javascript:showCase('ie21');" />
		<area shape="rect" coords="420,80,440,100" id="ie22"  href="javascript:showCase('ie22');" />
		<area shape="rect" coords="440,80,460,100" id="ie23"  href="javascript:showCase('ie23');" />
		<area shape="rect" coords="460,80,480,100" id="ie24"  href="javascript:showCase('ie24');" />
		<area shape="rect" coords="480,80,500,100" id="ie25"  href="javascript:showCase('ie25');" />
		<!-- Ligne F  -->
		<area shape="rect" coords="0,100,20,120" id="if1"  nohref />
		<area shape="rect" coords="20,100,40,120" id="if2"  nohref />
		<area shape="rect" coords="40,100,60,120" id="if3"  nohref />
		<area shape="rect" coords="60,100,80,120" id="if4"  nohref />
		<area shape="rect" coords="80,100,100,120" id="if5"  nohref />
		<area shape="rect" coords="100,100,120,120" id="if6"  nohref />
		<area shape="rect" coords="120,100,140,120" id="if7"  nohref />
		<area shape="rect" coords="140,100,160,120" id="if8"  nohref />
		<area shape="rect" coords="160,100,180,120" id="if9"  nohref />
		<area shape="rect" coords="180,100,200,120" id="if10"  nohref />
		<area shape="rect" coords="200,100,220,120" id="if11"  nohref />
		<area shape="rect" coords="220,100,240,120" id="if12"  nohref />
		<area shape="rect" coords="240,100,260,120" id="if13"  href="javascript:showCase('if13');" />
		<area shape="rect" coords="260,100,280,120" id="if14"  href="javascript:showCase('if14');" />
		<area shape="rect" coords="280,100,300,120" id="if15"  href="javascript:showCase('if15');" />
		<area shape="rect" coords="300,100,320,120" id="if16"  href="javascript:showCase('if16');" />
		<area shape="rect" coords="320,100,340,120" id="if17"  href="javascript:showCase('if17');" />
		<area shape="rect" coords="340,100,360,120" id="if18"  href="javascript:showCase('if18');" />
		<area shape="rect" coords="360,100,380,120" id="if19"  href="javascript:showCase('if19');" />
		<area shape="rect" coords="380,100,400,120" id="if20"  href="javascript:showCase('if20');" />
		<area shape="rect" coords="400,100,420,120" id="if21"  href="javascript:showCase('if21');" />
		<area shape="rect" coords="420,100,440,120" id="if22"  href="javascript:showCase('if22');" />
		<area shape="rect" coords="440,100,460,120" id="if23"  href="javascript:showCase('if23');" />
		<area shape="rect" coords="460,100,480,120" id="if24"  href="javascript:showCase('if24');" />
		<area shape="rect" coords="480,100,500,120" id="if25"  href="javascript:showCase('if25');" />
		<!-- Ligne G  -->
		<area shape="rect" coords="0,120,20,140" id="ig1"  nohref />
		<area shape="rect" coords="20,120,40,140" id="ig2"  nohref />
		<area shape="rect" coords="40,120,60,140" id="ig3"  nohref />
		<area shape="rect" coords="60,120,80,140" id="ig4"  nohref />
		<area shape="rect" coords="80,120,100,140" id="ig5"  nohref />
		<area shape="rect" coords="100,120,120,140" id="ig6"  href="javascript:showCase('ig6');" />
		<area shape="rect" coords="120,120,140,140" id="ig7"  href="javascript:showCase('ig7');" />
		<area shape="rect" coords="140,120,160,140" id="ig8"  href="javascript:showCase('ig8');" />
		<area shape="rect" coords="160,120,180,140" id="ig9"  href="javascript:showCase('ig9');" />
		<area shape="rect" coords="180,120,200,140" id="ig10"  href="javascript:showCase('ig10');" />
		<area shape="rect" coords="200,120,220,140" id="ig11"  href="javascript:showCase('ig11');" />
		<area shape="rect" coords="220,120,240,140" id="ig12"  href="javascript:showCase('ig12');" />
		<area shape="rect" coords="240,120,260,140" id="ig13"  href="javascript:showCase('ig13');" />
		<area shape="rect" coords="260,120,280,140" id="ig14"  href="javascript:showCase('ig14');" />
		<area shape="rect" coords="280,120,300,140" id="ig15"  href="javascript:showCase('ig15');" />
		<area shape="rect" coords="300,120,320,140" id="ig16"  href="javascript:showCase('ig16');" />
		<area shape="rect" coords="320,120,340,140" id="ig17"  href="javascript:showCase('ig17');" />
		<area shape="rect" coords="340,120,360,140" id="ig18"  href="javascript:showCase('ig18');" />
		<area shape="rect" coords="360,120,380,140" id="ig19"  href="javascript:showCase('ig19');" />
		<area shape="rect" coords="380,120,400,140" id="ig20"  href="javascript:showCase('ig20');" />
		<area shape="rect" coords="400,120,420,140" id="ig21"  href="javascript:showCase('ig21');" />
		<area shape="rect" coords="420,120,440,140" id="ig22"  href="javascript:showCase('ig22');" />
		<area shape="rect" coords="440,120,460,140" id="ig23"  href="javascript:showCase('ig23');" />
		<area shape="rect" coords="460,120,480,140" id="ig24"  href="javascript:showCase('ig24');" />
		<area shape="rect" coords="480,120,500,140" id="ig25"  href="javascript:showCase('ig25');" />
		<!-- Ligne H  -->
		<area shape="rect" coords="0,140,20,160" id="ih1"  nohref />
		<area shape="rect" coords="20,140,40,160" id="ih2"  nohref />
		<area shape="rect" coords="40,140,60,160" id="ih3"  nohref />
		<area shape="rect" coords="60,140,80,160" id="ih4"  nohref />
		<area shape="rect" coords="80,140,100,160" id="ih5"  href="javascript:showCase('ih5');" />
		<area shape="rect" coords="100,140,120,160" id="ih6"  href="javascript:showCase('ih6');" />
		<area shape="rect" coords="120,140,140,160" id="ih7"  href="javascript:showCase('ih7');" />
		<area shape="rect" coords="140,140,160,160" id="ih8"  href="javascript:showCase('ih8');" />
		<area shape="rect" coords="160,140,180,160" id="ih9"  href="javascript:showCase('ih9');" />
		<area shape="rect" coords="180,140,200,160" id="ih10"  href="javascript:showCase('ih10');" />
		<area shape="rect" coords="200,140,220,160" id="ih11"  href="javascript:showCase('ih11');" />
		<area shape="rect" coords="220,140,240,160" id="ih12"  href="javascript:showCase('ih12');" />
		<area shape="rect" coords="240,140,260,160" id="ih13"  href="javascript:showCase('ih13');" />
		<area shape="rect" coords="260,140,280,160" id="ih14"  href="javascript:showCase('ih14');" />
		<area shape="rect" coords="280,140,300,160" id="ih15"  href="javascript:showCase('ih15');" />
		<area shape="rect" coords="300,140,320,160" id="ih16"  href="javascript:showCase('ih16');" />
		<area shape="rect" coords="320,140,340,160" id="ih17"  href="javascript:showCase('ih17');" />
		<area shape="rect" coords="340,140,360,160" id="ih18"  href="javascript:showCase('ih18');" />
		<area shape="rect" coords="360,140,380,160" id="ih19"  href="javascript:showCase('ih19');" />
		<area shape="rect" coords="380,140,400,160" id="ih20"  href="javascript:showCase('ih20');" />
		<area shape="rect" coords="400,140,420,160" id="ih21"  href="javascript:showCase('ih21');" />
		<area shape="rect" coords="420,140,440,160" id="ih22"  href="javascript:showCase('ih22');" />
		<area shape="rect" coords="440,140,460,160" id="ih23"  href="javascript:showCase('ih23');" />
		<area shape="rect" coords="460,140,480,160" id="ih24"  href="javascript:showCase('ih24');" />
		<area shape="rect" coords="480,140,500,160" id="ih25"  href="javascript:showCase('ih25');" />
		<!-- Ligne I  -->
		<area shape="rect" coords="0,160,20,180" id="ii1"  nohref />
		<area shape="rect" coords="20,160,40,180" id="ii2"  nohref />
		<area shape="rect" coords="40,160,60,180" id="ii3"  nohref />
		<area shape="rect" coords="60,160,80,180" id="ii4"  href="javascript:showCase('ii4');" />
		<area shape="rect" coords="80,160,100,180" id="ii5"  href="javascript:showCase('ii5');" />
		<area shape="rect" coords="100,160,120,180" id="ii6"  href="javascript:showCase('ii6');" />
		<area shape="rect" coords="120,160,140,180" id="ii7"  href="javascript:showCase('ii7');" />
		<area shape="rect" coords="140,160,160,180" id="ii8"  href="javascript:showCase('ii8');" />
		<area shape="rect" coords="160,160,180,180" id="ii9"  href="javascript:showCase('ii9');" />
		<area shape="rect" coords="180,160,200,180" id="ii10"  href="javascript:showCase('ii10');" />
		<area shape="rect" coords="200,160,220,180" id="ii11"  href="javascript:showCase('ii11');" />
		<area shape="rect" coords="220,160,240,180" id="ii12"  href="javascript:showCase('ii12');" />
		<area shape="rect" coords="240,160,260,180" id="ii13"  href="javascript:showCase('ii13');" />
		<area shape="rect" coords="260,160,280,180" id="ii14"  href="javascript:changeCase('I14');" />
		<area shape="rect" coords="280,160,300,180" id="ii15"  href="javascript:changeCase('I15');" />
		<area shape="rect" coords="300,160,320,180" id="ii16"  href="javascript:changeCase('I16');" />
		<area shape="rect" coords="320,160,340,180" id="ii17"  href="javascript:showCase('ii17');" />
		<area shape="rect" coords="340,160,360,180" id="ii18"  href="javascript:showCase('ii18');" />
		<area shape="rect" coords="360,160,380,180" id="ii19"  href="javascript:showCase('ii19');" />
		<area shape="rect" coords="380,160,400,180" id="ii20"  href="javascript:showCase('ii20');" />
		<area shape="rect" coords="400,160,420,180" id="ii21"  href="javascript:showCase('ii21');" />
		<area shape="rect" coords="420,160,440,180" id="ii22"  href="javascript:showCase('ii22');" />
		<area shape="rect" coords="440,160,460,180" id="ii23"  href="javascript:showCase('ii23');" />
		<area shape="rect" coords="460,160,480,180" id="ii24"  href="javascript:showCase('ii24');" />
		<area shape="rect" coords="480,160,500,180" id="ii25"  href="javascript:showCase('ii25');" />
		<!-- Ligne J  -->
		<area shape="rect" coords="0,180,20,200" id="ij1"  nohref />
		<area shape="rect" coords="20,180,40,200" id="ij2"  nohref />
		<area shape="rect" coords="40,180,60,200" id="ij3"  nohref />
		<area shape="rect" coords="60,180,80,200" id="ij4"  href="javascript:showCase('ij4');" />
		<area shape="rect" coords="80,180,100,200" id="ij5"  href="javascript:showCase('ij5');" />
		<area shape="rect" coords="100,180,120,200" id="ij6"  href="javascript:showCase('ij6');" />
		<area shape="rect" coords="120,180,140,200" id="ij7"  href="javascript:showCase('ij7');" />
		<area shape="rect" coords="140,180,160,200" id="ij8"  href="javascript:showCase('ij8');" />
		<area shape="rect" coords="160,180,180,200" id="ij9"  href="javascript:showCase('ij9');" />
		<area shape="rect" coords="180,180,200,200" id="ij10"  href="javascript:showCase('ij10');" />
		<area shape="rect" coords="200,180,220,200" id="ij11"  href="javascript:showCase('ij11');" />
		<area shape="rect" coords="220,180,240,200" id="ij12"  href="javascript:showCase('ij12');" />
		<area shape="rect" coords="240,180,260,200" id="ij13"  href="javascript:showCase('ij13');" />
		<area shape="rect" coords="260,180,280,200" id="ij14"  href="javascript:changeCase('J14');" />
		<area shape="rect" coords="280,180,300,200" id="ij15"  href="javascript:changeCase('J15');" />
		<area shape="rect" coords="300,180,320,200" id="ij16"  href="javascript:changeCase('J16');" />
		<area shape="rect" coords="320,180,340,200" id="ij17"  href="javascript:showCase('ij17');" />
		<area shape="rect" coords="340,180,360,200" id="ij18"  href="javascript:showCase('ij18');" />
		<area shape="rect" coords="360,180,380,200" id="ij19"  href="javascript:showCase('ij19');" />
		<area shape="rect" coords="380,180,400,200" id="ij20"  href="javascript:showCase('ij20');" />
		<area shape="rect" coords="400,180,420,200" id="ij21"  href="javascript:showCase('ij21');" />
		<area shape="rect" coords="420,180,440,200" id="ij22"  href="javascript:showCase('ij22');" />
		<area shape="rect" coords="440,180,460,200" id="ij23"  href="javascript:showCase('ij23');" />
		<area shape="rect" coords="460,180,480,200" id="ij24"  href="javascript:showCase('ij24');" />
		<area shape="rect" coords="480,180,500,200" id="ij25"  href="javascript:changeCase('j15');" />
		<!-- Ligne K  -->
		<area shape="rect" coords="0,200,20,220" id="ik1"  nohref />
		<area shape="rect" coords="20,200,40,220" id="ik2"  nohref />
		<area shape="rect" coords="40,200,60,220" id="ik3"  nohref />
		<area shape="rect" coords="60,200,80,220" id="ik4"  href="javascript:showCase('ik4');" />
		<area shape="rect" coords="80,200,100,220" id="ik5"  href="javascript:showCase('ik5');" />
		<area shape="rect" coords="100,200,120,220" id="ik6"  href="javascript:showCase('ik6');" />
		<area shape="rect" coords="120,200,140,220" id="ik7"  href="javascript:showCase('ik7');" />
		<area shape="rect" coords="140,200,160,220" id="ik8"  href="javascript:showCase('ik8');" />
		<area shape="rect" coords="160,200,180,220" id="ik9"  href="javascript:showCase('ik9');" />
		<area shape="rect" coords="180,200,200,220" id="ik10"  href="javascript:showCase('ik10');" />
		<area shape="rect" coords="200,200,220,220" id="ik11"  href="javascript:showCase('ik11');" />
		<area shape="rect" coords="220,200,240,220" id="ik12"  href="javascript:showCase('ik12');" />
		<area shape="rect" coords="240,200,260,220" id="ik13"  href="javascript:showCase('ik13');" />
		<area shape="rect" coords="260,200,280,220" id="ik14"  href="javascript:showCase('ik14');" />
		<area shape="rect" coords="280,200,300,220" id="ik15"  href="javascript:showCase('ik15');" />
		<area shape="rect" coords="300,200,320,220" id="ik16"  href="javascript:showCase('ik16');" />
		<area shape="rect" coords="320,200,340,220" id="ik17"  href="javascript:showCase('ik17');" />
		<area shape="rect" coords="340,200,360,220" id="ik18"  href="javascript:showCase('ik18');" />
		<area shape="rect" coords="360,200,380,220" id="ik19"  href="javascript:showCase('ik19');" />
		<area shape="rect" coords="380,200,400,220" id="ik20"  href="javascript:showCase('ik20');" />
		<area shape="rect" coords="400,200,420,220" id="ik21"  href="javascript:showCase('ik21');" />
		<area shape="rect" coords="420,200,440,220" id="ik22"  href="javascript:showCase('ik22');" />
		<area shape="rect" coords="440,200,460,220" id="ik23"  href="javascript:showCase('ik23');" />
		<area shape="rect" coords="460,200,480,220" id="ik24"  href="javascript:showCase('ik24');" />
		<area shape="rect" coords="480,200,500,220" id="ik25"  href="javascript:showCase('ik25');" />
		<!-- Ligne L  -->
		<area shape="rect" coords="0,220,20,240" id="il1"  nohref />
		<area shape="rect" coords="20,220,40,240" id="il2"  nohref />
		<area shape="rect" coords="40,220,60,240" id="il3"  nohref />
		<area shape="rect" coords="60,220,80,240" id="il4"  nohref />
		<area shape="rect" coords="80,220,100,240" id="il5"  nohref />
		<area shape="rect" coords="100,220,120,240" id="il6"  href="javascript:showCase('il6');" />
		<area shape="rect" coords="120,220,140,240" id="il7"  href="javascript:showCase('il7');" />
		<area shape="rect" coords="140,220,160,240" id="il8"  href="javascript:showCase('il8');" />
		<area shape="rect" coords="160,220,180,240" id="il9"  href="javascript:showCase('il9');" />
		<area shape="rect" coords="180,220,200,240" id="il10"  href="javascript:showCase('il10');" />
		<area shape="rect" coords="200,220,220,240" id="il11"  href="javascript:showCase('il11');" />
		<area shape="rect" coords="220,220,240,240" id="il12"  href="javascript:showCase('il12');" />
		<area shape="rect" coords="240,220,260,240" id="il13"  href="javascript:showCase('il13');" />
		<area shape="rect" coords="260,220,280,240" id="il14"  href="javascript:showCase('il14');" />
		<area shape="rect" coords="280,220,300,240" id="il15"  href="javascript:showCase('il15');" />
		<area shape="rect" coords="300,220,320,240" id="il16"  href="javascript:showCase('il16');" />
		<area shape="rect" coords="320,220,340,240" id="il17"  href="javascript:showCase('il17');" />
		<area shape="rect" coords="340,220,360,240" id="il18"  href="javascript:showCase('il18');" />
		<area shape="rect" coords="360,220,380,240" id="il19"  href="javascript:showCase('il19');" />
		<area shape="rect" coords="380,220,400,240" id="il20"  href="javascript:showCase('il20');" />
		<area shape="rect" coords="400,220,420,240" id="il21"  href="javascript:showCase('il21');" />
		<area shape="rect" coords="420,220,440,240" id="il22"  href="javascript:showCase('il22');" />
		<area shape="rect" coords="440,220,460,240" id="il23"  href="javascript:showCase('il23');" />
		<area shape="rect" coords="460,220,480,240" id="il24"  href="javascript:showCase('il24');" />
		<area shape="rect" coords="480,220,500,240" id="il25"  href="javascript:showCase('il25');" />
		<!-- Ligne M  -->
		<area shape="rect" coords="0,240,20,260" id="im1"  nohref />
		<area shape="rect" coords="20,240,40,260" id="im2"  nohref />
		<area shape="rect" coords="40,240,60,260" id="im3"  nohref />
		<area shape="rect" coords="60,240,80,260" id="im4"  nohref />
		<area shape="rect" coords="80,240,100,260" id="im5"  nohref />
		<area shape="rect" coords="100,240,120,260" id="im6"  href="javascript:showCase('im6');" />
		<area shape="rect" coords="120,240,140,260" id="im7"  href="javascript:showCase('im7');" />
		<area shape="rect" coords="140,240,160,260" id="im8"  href="javascript:showCase('im8');" />
		<area shape="rect" coords="160,240,180,260" id="im9"  href="javascript:showCase('im9');" />
		<area shape="rect" coords="180,240,200,260" id="im10"  href="javascript:showCase('im10');" />
		<area shape="rect" coords="200,240,220,260" id="im11"  href="javascript:showCase('im11');" />
		<area shape="rect" coords="220,240,240,260" id="im12"  href="javascript:showCase('im12');" />
		<area shape="rect" coords="240,240,260,260" id="im13"  href="javascript:showCase('im13');" />
		<area shape="rect" coords="260,240,280,260" id="im14"  href="javascript:showCase('im14');" />
		<area shape="rect" coords="280,240,300,260" id="im15"  href="javascript:showCase('im15');" />
		<area shape="rect" coords="300,240,320,260" id="im16"  href="javascript:showCase('im16');" />
		<area shape="rect" coords="320,240,340,260" id="im17"  href="javascript:showCase('im17');" />

		<area shape="rect" coords="420,240,440,260" id="im22"  href="javascript:showCase('im22');" />
		<area shape="rect" coords="440,240,460,260" id="im23"  href="javascript:showCase('im23');" />
		<area shape="rect" coords="460,240,480,260" id="im24"  href="javascript:showCase('im24');" />
		<area shape="rect" coords="480,240,500,260" id="im25"  href="javascript:showCase('im25');" />
		<!-- Ligne N  -->
		<area shape="rect" coords="0,260,20,280" id="in1"  nohref/>
		<area shape="rect" coords="20,260,40,280" id="in2"  nohref/>
		<area shape="rect" coords="40,260,60,280" id="in3"  nohref/>
		<area shape="rect" coords="60,260,80,280" id="in4"  nohref/>
		<area shape="rect" coords="80,260,100,280" id="in5"  nohref/>
		<area shape="rect" coords="100,260,120,280" id="in6"  nohref/>
		<area shape="rect" coords="120,260,140,280" id="in7"  nohref/>
		<area shape="rect" coords="140,260,160,280" id="in8"  nohref/>
		<area shape="rect" coords="160,260,180,280" id="in9"  nohref/>
		<area shape="rect" coords="180,260,200,280" id="in10"  nohref/>
		<area shape="rect" coords="200,260,220,280" id="in11"  href="javascript:showCase('in11');" />
		<area shape="rect" coords="220,260,240,280" id="in12"  href="javascript:showCase('in12');" />
		<area shape="rect" coords="240,260,260,280" id="in13"  href="javascript:showCase('in13');" />
		<area shape="rect" coords="260,260,280,280" id="in14"  href="javascript:showCase('in14');" />
		<area shape="rect" coords="280,260,300,280" id="in15"  href="javascript:showCase('in15');" />
		<area shape="rect" coords="300,260,320,280" id="in16"  href="javascript:showCase('in16');" />
		<area shape="rect" coords="320,260,340,280" id="in17"  href="javascript:showCase('in17');" />

		<area shape="rect" coords="420,260,440,280" id="in22"  href="javascript:showCase('in22');" />
		<area shape="rect" coords="440,260,460,280" id="in23"  href="javascript:showCase('in23');" />
		<area shape="rect" coords="460,260,480,280" id="in24"  href="javascript:showCase('in24');" />
		<area shape="rect" coords="480,260,500,280" id="in25"  href="javascript:showCase('in25');" />
		<!-- Ligne O  -->
		<area shape="rect" coords="0,280,20,300" id="io1"  nohref />
		<area shape="rect" coords="20,280,40,300" id="io2"  nohref />
		<area shape="rect" coords="40,280,60,300" id="io3"  nohref />
		<area shape="rect" coords="60,280,80,300" id="io4"  nohref />
		<area shape="rect" coords="80,280,100,300" id="io5"  nohref />
		<area shape="rect" coords="100,280,120,300" id="io6"  nohref />
		<area shape="rect" coords="120,280,140,300" id="io7"  nohref />
		<area shape="rect" coords="140,280,160,300" id="io8"  nohref />
		<area shape="rect" coords="160,280,180,300" id="io9"  nohref />
		<area shape="rect" coords="180,280,200,300" id="io10"  nohref />
		<area shape="rect" coords="200,280,220,300" id="io11"  nohref />
		<area shape="rect" coords="220,280,240,300" id="io12"  href="javascript:showCase('io12');" />
		<area shape="rect" coords="240,280,260,300" id="io13"  href="javascript:showCase('io13');" />
		<area shape="rect" coords="260,280,280,300" id="io14"  href="javascript:showCase('io14');" />
		<area shape="rect" coords="280,280,300,300" id="io15"  href="javascript:showCase('io15');" />
		<area shape="rect" coords="300,280,320,300" id="io16"  href="javascript:showCase('io16');" />
		<area shape="rect" coords="320,280,340,300" id="io17"  href="javascript:showCase('io17');" />
	
		<area shape="rect" coords="420,280,440,300" id="io22"  href="javascript:showCase('io22');" />
		<area shape="rect" coords="440,280,460,300" id="io23"  href="javascript:showCase('io23');" />
		<area shape="rect" coords="460,280,480,300" id="io24"  href="javascript:showCase('io24');" />
		<area shape="rect" coords="480,280,500,300" id="io25"  href="javascript:showCase('io25');" />
		<!-- Ligne P  -->
		<area shape="rect" coords="0,300,20,320" id="ip1"  nohref />
		<area shape="rect" coords="20,300,40,320" id="ip2"  nohref />
		<area shape="rect" coords="40,300,60,320" id="ip3"  nohref />
		<area shape="rect" coords="60,300,80,320" id="ip4"  nohref />
		<area shape="rect" coords="80,300,100,320" id="ip5"  nohref />
		<area shape="rect" coords="100,300,120,320" id="ip6"  nohref />
		<area shape="rect" coords="120,300,140,320" id="ip7"  nohref />
		<area shape="rect" coords="140,300,160,320" id="ip8"  nohref />
		<area shape="rect" coords="160,300,180,320" id="ip9"  nohref />
		<area shape="rect" coords="180,300,200,320" id="ip10"  nohref />
		<area shape="rect" coords="200,300,220,320" id="ip11"  nohref />
		<area shape="rect" coords="220,300,240,320" id="ip12"  href="javascript:showCase('ip12');" />
		<area shape="rect" coords="240,300,260,320" id="ip13"  href="javascript:showCase('ip13');" />
		<area shape="rect" coords="260,300,280,320" id="ip14"  href="javascript:showCase('ip14');" />
		<area shape="rect" coords="280,300,300,320" id="ip15"  href="javascript:showCase('ip15');" />
		<area shape="rect" coords="300,300,320,320" id="ip16"  href="javascript:showCase('ip16');" />
		<area shape="rect" coords="320,300,340,320" id="ip17"  href="javascript:showCase('ip17');" />
		<area shape="rect" coords="340,300,360,320" id="ip18"  href="javascript:showCase('ip18');" />
		<area shape="rect" coords="360,300,380,320" id="ip19"  href="javascript:showCase('ip19');" />
		<area shape="rect" coords="380,300,400,320" id="ip20"  nohref />
		<area shape="rect" coords="400,300,420,320" id="ip21"  nohref />
		<area shape="rect" coords="420,300,440,320" id="ip22"  nohref />
		<area shape="rect" coords="440,300,460,320" id="ip23"  nohref />
		<area shape="rect" coords="460,300,480,320" id="ip24"  nohref />
		<area shape="rect" coords="480,300,500,320" id="ip25"  nohref />
		<!-- Ligne Q  -->
		<area shape="rect" coords="0,320,20,340" id="iq1"  nohref />
		<area shape="rect" coords="20,320,40,340" id="iq2"  nohref />
		<area shape="rect" coords="40,320,60,340" id="iq3"  nohref />
		<area shape="rect" coords="60,320,80,340" id="iq4"  nohref />
		<area shape="rect" coords="80,320,100,340" id="iq5"  nohref />
		<area shape="rect" coords="100,320,120,340" id="iq6"  nohref />
		<area shape="rect" coords="120,320,140,340" id="iq7"  nohref />
		<area shape="rect" coords="140,320,160,340" id="iq8"  nohref />
		<area shape="rect" coords="160,320,180,340" id="iq9"  nohref />
		<area shape="rect" coords="180,320,200,340" id="iq10"  nohref />
		<area shape="rect" coords="200,320,220,340" id="iq11"  nohref />
		<area shape="rect" coords="220,320,240,340" id="iq12"  href="javascript:showCase('iq12');" />
		<area shape="rect" coords="240,320,260,340" id="iq13"  href="javascript:showCase('iq13');" />
		<area shape="rect" coords="260,320,280,340" id="iq14"  href="javascript:showCase('iq14');" />
		<area shape="rect" coords="280,320,300,340" id="iq15"  href="javascript:showCase('iq15');" />
		<area shape="rect" coords="300,320,320,340" id="iq16"  href="javascript:showCase('iq16');" />
		<area shape="rect" coords="320,320,340,340" id="iq17"  nohref />
		<area shape="rect" coords="340,320,360,340" id="iq18"  nohref />
		<area shape="rect" coords="360,320,380,340" id="iq19"  nohref />
		<area shape="rect" coords="380,320,400,340" id="iq20"  nohref />
		<area shape="rect" coords="400,320,420,340" id="iq21"  nohref />
		<area shape="rect" coords="420,320,440,340" id="iq22"  nohref />
		<area shape="rect" coords="440,320,460,340" id="iq23"  nohref />
		<area shape="rect" coords="460,320,480,340" id="iq24"  nohref />
		<area shape="rect" coords="480,320,500,340" id="iq25"  nohref />
		<!-- Ligne R  -->
		<area shape="rect" coords="0,340,20,360" id="ir1"  nohref />
		<area shape="rect" coords="20,340,40,360" id="ir2"  nohref />
		<area shape="rect" coords="40,340,60,360" id="ir3"  nohref />
		<area shape="rect" coords="60,340,80,360" id="ir4"  nohref />
		<area shape="rect" coords="80,340,100,360" id="ir5"  nohref />
		<area shape="rect" coords="100,340,120,360" id="ir6"  nohref />
		<area shape="rect" coords="120,340,140,360" id="ir7"  nohref />
		<area shape="rect" coords="140,340,160,360" id="ir8"  nohref />
		<area shape="rect" coords="160,340,180,360" id="ir9"  nohref />
		<area shape="rect" coords="180,340,200,360" id="ir10"  nohref />
		<area shape="rect" coords="200,340,220,360" id="ir11"  nohref />
		<area shape="rect" coords="220,340,240,360" id="ir12"  href="javascript:showCase('ir12');" />
		<area shape="rect" coords="240,340,260,360" id="ir13"  nohref />
		<area shape="rect" coords="260,340,280,360" id="ir14"  nohref />
		<area shape="rect" coords="280,340,300,360" id="ir15"  nohref />
		<area shape="rect" coords="300,340,320,360" id="ir16"  nohref />
		<area shape="rect" coords="320,340,340,360" id="ir17"  nohref />
		<area shape="rect" coords="340,340,360,360" id="ir18"  nohref />
		<area shape="rect" coords="360,340,380,360" id="ir19"  nohref />
		<area shape="rect" coords="380,340,400,360" id="ir20"  nohref />
		<area shape="rect" coords="400,340,420,360" id="ir21"  nohref />
		<area shape="rect" coords="420,340,440,360" id="ir22"  nohref />
		<area shape="rect" coords="440,340,460,360" id="ir23"  nohref />
		<area shape="rect" coords="460,340,480,360" id="ir24"  nohref />
		<area shape="rect" coords="480,340,500,360" id="ir25"  nohref />
		<!-- Ligne S  -->
		<area shape="rect" coords="0,360,20,380" id="is1"  nohref />
		<area shape="rect" coords="20,360,40,380" id="is2"  nohref />
		<area shape="rect" coords="40,360,60,380" id="is3"  nohref />
		<area shape="rect" coords="60,360,80,380" id="is4"  nohref />
		<area shape="rect" coords="80,360,100,380" id="is5"  nohref />
		<area shape="rect" coords="100,360,120,380" id="is6"  nohref />
		<area shape="rect" coords="120,360,140,380" id="is7"  nohref />
		<area shape="rect" coords="140,360,160,380" id="is8"  nohref />
		<area shape="rect" coords="160,360,180,380" id="is9"  nohref />
		<area shape="rect" coords="180,360,200,380" id="is10"  nohref />
		<area shape="rect" coords="200,360,220,380" id="is11"  nohref />
		<area shape="rect" coords="220,360,240,380" id="is12"  nohref />
		<area shape="rect" coords="240,360,260,380" id="is13"  nohref />
		<area shape="rect" coords="260,360,280,380" id="is14"  nohref />
		<area shape="rect" coords="280,360,300,380" id="is15"  nohref />
		<area shape="rect" coords="300,360,320,380" id="is16"  nohref />
		<area shape="rect" coords="320,360,340,380" id="is17"  nohref />
		<area shape="rect" coords="340,360,360,380" id="is18"  nohref />
		<area shape="rect" coords="360,360,380,380" id="is19"  nohref />
		<area shape="rect" coords="380,360,400,380" id="is20"  nohref />
		<area shape="rect" coords="400,360,420,380" id="is21"  nohref />
		<area shape="rect" coords="420,360,440,380" id="is22"  nohref />
		<area shape="rect" coords="440,360,460,380" id="is23"  nohref />
		<area shape="rect" coords="460,360,480,380" id="is24"  nohref />
		<area shape="rect" coords="480,360,500,380" id="is25"  nohref />
		<!-- Ligne T  -->
		<!-- Ligne U  -->
		<!-- Ligne V  -->
		<!-- Ligne W  -->
		<!-- Ligne X  -->
		<!-- Ligne Y  -->
		<!-- Ligne Z  -->

		</map>
		<div style="float:left;"> <img styel="float:left;"src="images/legende_down.PNG"/></div>
		<input type="hidden" value="<?php echo $_SESSION['coord'];?>" id="currentCoord"/>
		<?php
		echo "<br>Votre position est :";
		echo $_SESSION['coord'];?>
		
	</div>

								

			
						

</div>
</section>
<?php }?>
<?php //include('chat/chat.php');?>