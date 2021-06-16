<!DOCTYPE html>
<?php session_start();
if(!isset($_SESSION['username']))
	header('location:http://localhost/testing2/login.php');
?>
<html>
<head>
<title>MAJOR| PROJECT</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
			body
			{	
				background-image:url(bg9.jpg);
				background-size:100%;
				background-repeat: no-repeat;
				background-attachment: fixed;
			}
table {margin-left:20px;
    width:100%;
}
table, th, td {
    border: 2px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 15px;
    text-align:center;
	text-color:solid black;
}
table#t01 tr:nth-child(even) {
    background-color: #eee;
}
table#t01 tr:nth-child(odd) {
   background-56color: #fff;
}
table#t01 th {
    background-color: black;
    color: white;
}
</style>
</head>
         <body>
		 <?php include'navbar.php'?>
		<div align="center" style="background-color:gray;opacity:0.8">
				
		</div>

                    <h1 style="margin-top:100px">MALE NAMES</h1><br>
					<h2>A</h2>
					

<table>
  <tr>
    <td>ABOT</td>
    <td>ABEL</td> 
    <td>ADLER</td>
	 <td>ADMIRAL</td>
    <td>AERO</td>
    <td>ADONIS</td>
  </tr>
  <tr>
    <td>AFRO</td>
    <td>ALEN</td>
    <td>ALCOT</td>
	<td>AGATHA</td>
    <td>ASOP</td>
    <td>ALDOUS</td>
  </tr>
  <tr>
    <td>ALI</td>
    <td>ALTON</td>
    <td>ALFRED</td>
	 <td>ANDRE</td>
    <td>AMOS</td>
    <td>ADREAS</td>
  </tr>
  <tr>
    <td>ANASTASIO</td>
    <td>AMBASSADOR</td>
    <td>APACHE</td>
	 <td>APOLLO</td>
    <td>ANDREW</td>
    <td>AMES</td>
  </tr>
      <td>ARCHIE</td>
    <td>ARTURO</td> 
    <td>ACHIBALD</td>
	 <td>ARGOS</td>
    <td>ARCHER</td>
    <td>APPLRJACK</td>
  </tr>
  <tr>
    <td>ASHER</td>
    <td>ASHTON</td>
    <td>ASHFORD</td>
	<td>ASTRO</td>
    <td>ATTICUS</td>
    <td>ATLAS</td>
  </tr>
  <tr>
    <td>ATWORTH</td>
    <td>AUGUSTUS</td>
    <td>AVALANCHE</td>
	 <td>AVERY</td>
    <td>AXEL</td>
    <td>AZTEE</td>
  </tr>
  <tr>
    <td>ANGUS</td>
    <td>AMBASSADOR</td>
    <td>APACHE</td>
	 <td>APOLLO</td>
    <td>ANDREW</td>
    <td>AMES</td>
  </tr>
</table>
<br>
					<h2>B</h2>
					

<table>
  <tr>
    <td>BACON</td>
    <td>BAILEY</td> 
    <td>BAMDIT</td>
	 <td>BANJO</td>
    <td>BANE</td>
    <td>BRUNO</td>
  </tr>
  <tr>
    <td>BARCLEY</td>
    <td>BARKLEY</td>
    <td>BARNEY</td>
	<td>BAY</td>
    <td>BEAR</td>
    <td>BECKHAM</td>
  </tr>
  <tr>
    <td>BART</td>
    <td>BARTLEY</td>
    <td>BERLIN</td>
	 <td>BERKLEY</td>
    <td>BLAZE</td>
    <td>BLUE</td>
  </tr>
  <tr>
    <td>BOLT</td>
    <td>BONE</td>
    <td>BOOMER</td>
	 <td>BOBBY</td>
    <td>BLUE</td>
    <td>BOSCO</td>
  </tr>
      <td>BOSS</td>
    <td>BRADSHAW</td> 
    <td>BOYD</td>
	 <td>BRICK</td>
    <td>BRICE</td>
    <td>BRETT</td>
  </tr>
  <tr>
    <td>BRAIN</td>
    <td>BROCK</td>
    <td>BRITTEN</td>
	<td>BICK</td>
    <td>BUBA</td>
    <td>BRONX</td>
  </tr>
  <tr>
    <td>BULLY</td>
    <td>BERGER</td>
    <td>BULLET </td>
	 <td>BERGER</td>
    <td>BUZZ</td>
    <td>BYRON</td>
  </tr>

</table>
<br>
                     <h2>C</h2>
					

<table>
  <tr>
    <td>CAESER</td>
    <td>CAIN</td> 
    <td>CAL</td>
	 <td>CALHOUN</td>
    <td>CARL</td>
    <td>CARLITO</td>
  </tr>
  <tr>
    <td>CARLSON</td>
    <td>CEASER</td>
    <td>CARLYLE</td>
	<td>CHAD</td>
    <td>CHARLES</td>
    <td>CHAMP</td>
  </tr>
  <tr>
    <td>CHANNING</td>
    <td>CHANDLER</td>
    <td>CHARLIE</td>
	 <td>CHAZ</td>
    <td>CHET</td>
    <td>CHEKOV</td>
  </tr>
  <tr>
    <td>CHOPPER</td>
    <td>CHURCHILL</td>
    <td>CLANCY</td>
	 <td>CLETUS</td>
    <td>CLEVELAND</td>
    <td>CLIFF</td>
  </tr>
      <td>COBRA</td>
    <td>COBB</td> 
    <td>CHOCHISE</td>
	 <td>COLEMAN</td>
    <td>CODY</td>
    <td>COLLIN</td>
  </tr>
  <tr>
    <td>COOPER</td>
    <td>COLBERT</td>
    <td>COREY</td>
	<td>CRASH</td>
    <td>CORTEZ</td>
    <td>CZAR</td>
  </tr>
  <tr>
    <td>COURAZE</td>
    <td>COSTELLO</td>
    <td>CYRANO</td>
	 <td>CZAR</td>
    <td>CORMAC</td>
    <td>CRISTOS</td>
  </tr>

</table>
<br>
                     <h2>D</h2>
					

<table>
  <tr>
    <td>DAGGER</td>
    <td>DAMIEN</td> 
    <td>DANE</td>
	 <td>DANTE</td>
    <td>DASH</td>
    <td>DEAN</td>
  </tr>
  <tr>
    <td>DEBO</td>
    <td>DELGADO</td>
    <td>DANGER</td>
	<td>DEBO</td>
    <td>DARCY</td>
    <td>DARTH VADER</td>
  </tr>
  <tr>
    <td>DEXTER</td>
    <td>DICKENS</td>
    <td>DIGGER</td>
	 <td>DILBERT</td>
    <td>DON JUAN</td>
    <td>DIGBY</td>
  </tr>
  <tr>
    <td>DRE</td>
    <td>DUFFY</td>
    <td>CLANCY</td>
	 <td>DUKE</td>
    <td>DWAYNE</td>
    <td>DYLAN</td>
  </tr>
      <td>DYNAMITE</td>
    <td>DEVIN</td> 
    <td>DEUTSCH</td>
	 <td>DESMOND</td>
    <td>DIGBY</td>
    <td>DILLON</td>
  </tr>
 
</table>
<br>
                     <h2>E</h2>
					

<table>
  <tr>
    <td>EARNEST</td>
    <td>ECHO</td> 
    <td>EDGAR</td>
	 <td>EDWARD</td>
    <td>EINSTEIN</td>
    <td>ELLIOT</td>
  </tr>
  <tr>
    <td>ELMO</td>
    <td>EMBER</td>
    <td>EMERSON</td>
	<td>EMO</td>
    <td>ERVIN</td>
    <td>ESCOBAR</td>
  </tr>
  <tr>
    <td>EVAN</td>
    <td>EWOK</td>
    <td>EVEREST</td>
	 <td>ENRIQUE</td>
    <td>EVAN</td>
    <td>EVOR</td>
  </tr>
  
  

</table>
<br>
                <h2>F</h2>
					

<table>
  <tr>
    <td>FABIO</td>
    <td>FALCON</td> 
    <td>FANG</td>
	 <td>FARLEY</td>
    <td>FAULKNER</td>
    <td>FLASH</td>
  </tr>
  <tr>
    <td>FLETCHER</td>
    <td>FORREST</td>
    <td>FRANCOIS</td>
	<td>FRISCO</td>
    <td>FRITZ</td>
    <td>FUZZY</td>
  </tr>
  </table><br>
                 <h2>G</h2>
					

<table>
  <tr>
    <td>GABE</td>
    <td>GANON</td> 
    <td>GAVIN</td>
	 <td>GEORGE</td>
    <td>GHOST</td>
    <td>GIBSON</td>
  </tr>
  <tr>
    <td>GILBERT</td>
    <td>GODFREY</td>
    <td>GOLDWIN</td>
	<td>GONZO</td>
    <td>GORDO</td>
    <td>GUNNER</td>
  </tr>
  <tr>
    <td>GUSTAV</td>
    <td>GULLIVER</td>
    <td>GOTDO</td>
	 <td>GORDO</td>
    <td>GUS</td>
    <td>GOVENOR</td>
  </tr>
  
  

</table>
<br>
                <h2>H</h2>
					

<table>
  <tr>
    <td>HARBOR</td>
    <td>HARRY</td> 
    <td>HARVEY</td>
	 <td>HAYES</td>
    <td>HECTOR</td>
    <td>HOBBIT</td>
  </tr>
  <tr>
    <td>HUGO</td>
    <td>HULK</td>
    <td>HUCKLEBERRY</td>
	<td>HERCLUES</td>
    <td>HOOCH</td>
    <td></td>
  </tr>


</table>
<br>
                       <h2>I</h2>
					

<table>
  <tr>
    <td>IGOR</td>
    <td>INDY</td> 
    <td>IRWIN</td>
	 <td>ISAAC</td>
    <td>ISREAL</td>
    <td>IZZY</td>
  </tr>
 


</table>
<br>
                    <h2>J</h2>
					

<table>
  <tr>
    <td>JACK</td>
    <td>JACOB</td> 
    <td>JAX</td>
	 <td>JERRY LEE</td>
    <td>JESSE</td>
    <td>JESSE JAMES</td>
  </tr>
  <tr>
    <td>JOCK</td>
    <td>JONAH</td>
    <td>JOKER</td>
	<td>JUSTIN</td>
    <td>JORDAN</td>
    <td>JUAN</td>
  </tr>


</table>
<br>
           <h2>K</h2>
					

<table>
  <tr>
    <td>KAYDEN</td>
    <td>KEATON</td> 
    <td>KEATS</td>
	 <td>KILLER</td>
    <td>KING</td>
    <td>KLAUS</td>
  </tr>
 

</table>
<br>
               <h2>L</h2>
					

<table>
  <tr>
    <td>LAD</td>
    <td>LAIKA</td> 
    <td>LENNY</td>
	 <td>LEONARDO</td>
    <td>LUCAS</td>
    <td>LEVI</td>
  </tr>
  <tr>
    <td>LICIUS</td>
    <td>LANCELOT</td>
    <td>LENNY</td>
	<td>LOU</td>
    <td>LUKE</td>
    <td>LYNDON</td>
  </tr>


</table>
<br>
             <h2>M</h2>
					

<table>
  <tr>
    <td>MACK</td>
    <td>MADDEN</td> 
    <td>MAGIC</td>
	 <td>MARK</td>
    <td>MARTIN</td>
    <td>MASHMALL</td>
  </tr>
  <tr>
    <td>MATT</td>
    <td>MONET</td>
    <td>MOON</td>
	<td>MONTY</td>
    <td>MORGAN</td>
    <td>MOOSE</td>
  </tr>


</table>
<br>

 <h2>N</h2>
					

<table>
  <tr>
    <td>NACHO</td>
    <td>NEO</td> 
    <td>NICO</td>
	 <td>NINJA</td>
    <td>NORMAN</td>
    <td>NERO</td>
  </tr>
  
</table>
<br>
 <h2>O</h2>
					

<table>
  <tr>
    <td>OLD YELLER</td>
    <td>OREO</td> 
    <td>ORSON</td>
	 <td>OTIS</td>
    <td>OTTO</td>
    <td>OTIS</td>
  </tr>


</table>
<br>
 <h2>P</h2>
					

<table>
  <tr>
    <td>PABLO</td>
    <td>PACO</td> 
    <td>PARKER</td>
	 <td>PASCAL</td>
    <td>PERCY</td>
    <td>PETE</td>
  </tr>
  <tr>
    <td>PING</td>
    <td>PISTOL</td>
    <td>PUCK</td>
	<td>PYRO</td>
    <td>POOCHIE</td>
    <td>PORTER</td>
  </tr>


</table>
<br>
 <h2>Q</h2>
					

<table>
  <tr>
    <td>OUENTIN</td>
    <td>QUINSY</td> 
    <td>QUIXOTE</td>
	 <td></td>
    <td></td>
    <td></td>
  </tr>
 


</table>
<br>
 <h2>R</h2>
					

<table>
  <tr>
    <td>RADAR</td>
    <td>RAM</td> 
    <td>RANGER</td>
	 <td>RASCAL</td>
    <td>RAVEN</td>
    <td>REAGAN</td>
  </tr>
  <tr>
    <td>REX</td>
    <td>REBEL</td>
    <td>RICARDO</td>
	<td>RIGGS</td>
    <td>REDFORD</td>
    <td>ROBIN</td>
  </tr>
   <tr>
    <td>RUDDER</td>
    <td>RUFUS</td>
    <td>RUDY</td>
	<td>RUFUS</td>
    <td>RYDER</td>
    <td>RORY</td>
  </tr>



</table>
<br>
 <h2>S</h2>
					

<table>
  <tr>
    <td>SABLE</td>
    <td>SAMSON</td> 
    <td>SCOUT</td>
	 <td>SEUSS</td>
    <td>SARGE</td>
    <td>SAILOR</td>
  </tr>
  <tr>
    <td>SHADOW</td>
    <td>SHELDON</td>
    <td>SHEMUS</td>
	<td>SLINK</td>
    <td>SNOOPY</td>
    <td>STANLY</td>
  </tr>
  
</table>
<br>
 <h2>T</h2>
					

<table>
  <tr>
    <td>TAZ</td>
    <td>TANK</td> 
    <td>TEDDY</td>
	 <td>THOR</td>
    <td>RAVEN</td>
    <td>TACO</td>
  </tr>
  <tr>
    <td>TIGER</td>
    <td>TOTO</td>
    <td>TRAPPER</td>
	<td>TUCKER</td>
    <td>TROY</td>
    <td>TOBY</td>
  </tr>

</table>
<br>
<h2>U V W X Y Z</h2>
					

<table>
  <tr>
    <td>UNDERDOG</td>
    <td>VINCENT</td> 
    <td>WAGNER</td>
	 <td>WALDO</td>
    <td>WALLACE</td>
    <td>WAYNE</td>
  </tr>
  <tr>
    <td>WYATT</td>
    <td>WILLIE</td>
    <td>YODA</td>
	<td>YOSHI</td>
    <td>YUKON</td>
    <td>ZACK</td>
  </tr>

</table>
<br>
  
  
                    <h1 style="margin-top:100px">FEMALE NAMES</h1><br>
					<h2>A</h2>
					

<table>
  <tr>
    <td>ABBY</td>
    <td>ADDIE</td> 
    <td>ADDISON</td>
	 <td>ADELE</td>
    <td>AIDA</td>
    <td>AJA</td>
  </tr>
  <tr>
    <td>AKIRA</td>
    <td>AJA</td>
    <td>ALEXIA</td>
	<td>ALI</td>
    <td>ALLIE</td>
    <td>ALVA</td>
  </tr>
  <tr>
    <td>ALI</td>
    <td>ALTON</td>
    <td>ALFRED</td>
	 <td>AMBER</td>
    <td>AMANDA</td>
    <td>AMELIE</td>
  </tr>
  <tr>
    <td>ANASTASIA</td>
    <td>ANDI</td>
    <td>AMY</td>
	 <td>AMBROSIA</td>
    <td>ANDREW</td>
    <td>AMBERLY</td>
  </tr>
      <td>ANNA</td>
    <td>ANNIE</td> 
    <td>ARIA</td>
	 <td>ARIANNA</td>
    <td>ASH</td>
    <td>APPLRJACK</td>
  </tr>
  <tr>
    <td>ASHER</td>
    <td>ASHTON</td>
    <td>ASHFORD</td>
	<td>ASTRO</td>
    <td>ATTICUS</td>
    <td>ATLAS</td>
  </tr>
  <tr>
    <td>ATWORTH</td>
    <td>AUGUSTUS</td>
    <td>AVALANCHE</td>
	 <td>AVERY</td>
    <td>AXEL</td>
    <td>AZTEE</td>
  </tr>
  <tr>
    <td>ANGUS</td>
    <td>AUBREE</td>
    <td>APACHE</td>
	 <td>AUDREY</td>
    <td>AVERY</td>
    <td>AYLA</td>
  </tr>
</table>
<br>
					<h2>B</h2>
					

<table>
  <tr>
    <td>BABE</td>
    <td>BABETTE</td> 
    <td>BABY</td>
	 <td>BARBIE</td>
    <td>BEAR</td>
    <td>BAMI</td>
  </tr>
  <tr>
    <td>BEBE</td>
    <td>BABUSHKA</td>
    <td>BEAN</td>
	<td>BAY</td>
    <td>BEAR</td>
    <td>BELLA</td>
  </tr>
  <tr>
    <td>BETTY</td>
    <td>BEYONCE</td>
    <td>BLAZE</td>
	 <td>BERKLEY</td>
    <td>BLITZ</td>
    <td>BLIZZARD</td>
  </tr>
  <tr>
    <td>BOO</td>
    <td>BOONIE</td>
    <td>BLUEBERRY</td>
	 <td>BOOTS</td>
    <td>BREE</td>
    <td>BREEZY</td>

  <tr>
    <td>BROWNIE</td>
    <td>BROOKLYN</td>
    <td>BUDDY</td>
	<td>BUTTERCAP</td>
    <td>BUBA</td>
    <td>BRONX</td>
  </tr>
 
</table>
<br>
                     <h2>C</h2>
					

<table>
  <tr>
    <td>CAITLIN</td>
    <td>CALLIE</td> 
    <td>CANDY</td>
	 <td>CARLY</td>
    <td>CARMRLA</td>
    <td>CARRIE</td>
  </tr>
  <tr>
    <td>CALI</td>
    <td>CHARLIE</td>
    <td>CARLYLE</td>
	<td>CHERRY</td>
    <td>CHARLES</td>
    <td>CHAMPI</td>
  </tr>
  <tr>
    <td>CHANEL</td>
    <td>CHOCO</td>
    <td>CHRISSY</td>
	 <td>CHAZ</td>
    <td>CHET</td>
    <td>CHEKOVI</td>
  </tr>
  <tr>
    <td>CHICA</td>
    <td>CLARA</td>
    <td>CLANCY</td>
	 <td>CLETUS</td>
    <td>CLEVELAND</td>
    <td>CLIFF</td>
  </tr>
      <td>CLAIRE</td>
    <td>COBB</td> 
    <td>CHOCHISE</td>
	 <td>COLEMAN</td>
    <td>CODY</td>
    <td>COLLIN</td>
  </tr>
  <tr>
    <td>CORA</td>
    <td>COLBERT</td>
    <td>COREY</td>
	<td>CRASH</td>
    <td>CORTEZ</td>
    <td>CZAR</td>
  </tr>
  <tr>
    <td>CUDDLES</td>
    <td>COSTELLO</td>
    <td>CRYSTEL</td>
	 <td>CUTEY</td>
    <td>CUTIE</td>
    <td>CYPRIS</td>
  </tr>

</table>
<br>
                     <h2>D</h2>
					

<table>
  <tr>
    <td>DAISY</td>
    <td>DALLAS</td> 
    <td>DARCY</td>
	 <td>DARLA</td>
    <td>DARBY</td>
    <td>DARLA</td>
  </tr>
  <tr>
    <td>DIAMOND</td>
    <td>DIDO</td>
    <td>DIVA</td>
	<td>DOLLY</td>
    <td>DORA</td>
    <td>DOT</td>
  </tr>
  <tr>
    <td>DOTTIE</td>
    <td>DICKENS</td>
    <td>DOROTHY</td>
	 <td>DILBERT</td>
    <td>DON JUAN</td>
    <td>DUCHESS</td>
  </tr>
  
 
</table>
<br>
                     <h2>E</h2>
					

<table>
  <tr>
    <td>EBONY</td>
    <td>ECHO</td> 
    <td>ELSA</td>
	 <td>ELF</td>
    <td>ELLA</td>
    <td>EMMA</td>
  </tr>
  <tr>
    <td>EMERALD</td>
    <td>EVA</td>
    <td>ERIN</td>
	<td>EMO</td>
    <td>ERVY</td>
    <td>EWOK</td>
  </tr>

  

</table>
<br>
                <h2>F</h2>
					

<table>
  <tr>
    <td>FANCY</td>
    <td>FAUNA</td> 
    <td>FLO</td>
	 <td>FRADA</td>
    <td>FIFI</td>
    <td>FLASHI</td>
  </tr>
  <tr>
    <td>FRIDA</td>
    <td>FROSTIE</td>
    <td>FUZZY</td>
	<td>FRISCO</td>
    <td>FRITZ</td>
    <td>FUZZY</td>
  </tr>
  </table><br>
                 <h2>G</h2>
					

<table>
  <tr>
    <td>GABBBY</td>
    <td>GABBIE</td> 
    <td>GEORGIA</td>
	 <td>GEORGE</td>
    <td>GHOST</td>
    <td>GIA</td>
  </tr>
  <tr>
    <td>GOLDIE</td>
    <td>GRACE</td>
    <td>GRETA</td>
	<td>GRETL</td>
    <td>GWEN</td>
    <td>GUMDROP</td>
  </tr>
 
  
  

</table>
<br>
                <h2>H</h2>
					

<table>
  <tr>
    <td>HAPPY</td>
    <td>HARBOR</td> 
    <td>HAZEL</td>
	 <td>HONEY</td>
    <td>HONEYBEAR</td>
    <td>HOONEYBEE</td>
  </tr>
  


</table>
<br>
                       <h2>I</h2>
					

<table>
  <tr>
    <td>IGOR</td>
    <td>INDY</td> 
    <td>IISHIKA</td>
	 <td>ISIS</td>
    <td>IVY</td>
    <td>IZZY</td>
  </tr>
 


</table>
<br>
                    <h2>J</h2>
					

<table>
  <tr>
    <td>JACK</td>
    <td>JACOB</td> 
    <td>JAX</td>
	 <td>JERRY LEE</td>
    <td>JESSE</td>
    <td>JESSE JAMES</td>
  </tr>
  <tr>
    <td>JOCK</td>
    <td>JONAH</td>
    <td>JOKER</td>
	<td>JUSTIN</td>
    <td>JORDAN</td>
    <td>JUAN</td>
  </tr>


</table>
<br>
           <h2>K</h2>
					

<table>
  <tr>
    <td>KAYDEN</td>
    <td>KEATON</td> 
    <td>KEATS</td>
	 <td>KILLER</td>
    <td>KING</td>
    <td>KLAUS</td>
  </tr>
 

</table>
<br>
               <h2>L</h2>
					

<table>
  <tr>
    <td>LAD</td>
    <td>LAIKA</td> 
    <td>LENNY</td>
	 <td>LEONARDO</td>
    <td>LUCAS</td>
    <td>LEVI</td>
  </tr>
  <tr>
    <td>LICIUS</td>
    <td>LANCELOT</td>
    <td>LENNY</td>
	<td>LOU</td>
    <td>LUKE</td>
    <td>LYNDON</td>
  </tr>


</table>
<br>
             <h2>M</h2>
					

<table>
  <tr>
    <td>MACK</td>
    <td>MADDEN</td> 
    <td>MAGIC</td>
	 <td>MARK</td>
    <td>MARTIN</td>
    <td>MASHMALL</td>
  </tr>
  <tr>
    <td>MATT</td>
    <td>MONET</td>
    <td>MOON</td>
	<td>MONTY</td>
    <td>MORGAN</td>
    <td>MOOSE</td>
  </tr>


</table>
<br>

 <h2>N</h2>
					

<table>
  <tr>
    <td>NACHO</td>
    <td>NEO</td> 
    <td>NICO</td>
	 <td>NINJA</td>
    <td>NORMAN</td>
    <td>NERO</td>
  </tr>
  
</table>
<br>
 <h2>O</h2>
					

<table>
  <tr>
    <td>OLD YELLER</td>
    <td>OREO</td> 
    <td>ORSON</td>
	 <td>OTIS</td>
    <td>OTTO</td>
    <td>OTIS</td>
  </tr>


</table>
<br>
 <h2>P</h2>
					

<table>
  <tr>
    <td>PABLO</td>
    <td>PACO</td> 
    <td>PARKER</td>
	 <td>PASCAL</td>
    <td>PERCY</td>
    <td>PETE</td>
  </tr>
  <tr>
    <td>PING</td>
    <td>PISTOL</td>
    <td>PUCK</td>
	<td>PYRO</td>
    <td>POOCHIE</td>
    <td>PORTER</td>
  </tr>


</table>
<br>
 <h2>Q</h2>
					

<table>
  <tr>
    <td>OUENTIN</td>
    <td>QUINSY</td> 
    <td>QUIXOTE</td>
	 <td></td>
    <td></td>
    <td></td>
  </tr>
 


</table>
<br>
 <h2>R</h2>
					

<table>
  <tr>
    <td>RADAR</td>
    <td>RAM</td> 
    <td>RANGER</td>
	 <td>RASCAL</td>
    <td>RAVEN</td>
    <td>REAGAN</td>
  </tr>
  <tr>
    <td>REX</td>
    <td>REBEL</td>
    <td>RICARDO</td>
	<td>RIGGS</td>
    <td>REDFORD</td>
    <td>ROBIN</td>
  </tr>
   <tr>
    <td>RUDDER</td>
    <td>RUFUS</td>
    <td>RUDY</td>
	<td>RUFUS</td>
    <td>RYDER</td>
    <td>RORY</td>
  </tr>



</table>
<br>
 <h2>S</h2>
					

<table>
  <tr>
    <td>SABLE</td>
    <td>SAMSON</td> 
    <td>SCOUT</td>
	 <td>SEUSS</td>
    <td>SARGE</td>
    <td>SAILOR</td>
  </tr>
  <tr>
    <td>SHADOW</td>
    <td>SHELDON</td>
    <td>SHEMUS</td>
	<td>SLINK</td>
    <td>SNOOPY</td>
    <td>STANLY</td>
  </tr>
  
</table>
<br>
 <h2>T</h2>
					

<table>
  <tr>
    <td>TAZ</td>
    <td>TANK</td> 
    <td>TEDDY</td>
	 <td>THOR</td>
    <td>RAVEN</td>
    <td>TACO</td>
  </tr>
  <tr>
    <td>TIGER</td>
    <td>TOTO</td>
    <td>TRAPPER</td>
	<td>TUCKER</td>
    <td>TROY</td>
    <td>TOBY</td>
  </tr>

</table>
<br>
<h2>U V W X Y Z</h2>
					

<table>
  <tr>
    <td>UNDERDOG</td>
    <td>VINCENT</td> 
    <td>WAGNER</td>
	 <td>WALDO</td>
    <td>WALLACE</td>
    <td>WAYNE</td>
  </tr>
  <tr>
    <td>WYATT</td>
    <td>WILLIE</td>
    <td>YODA</td>
	<td>YOSHI</td>
    <td>YUKON</td>
    <td>ZACK</td>
  </tr>

</table>
<br>


</body>
</html>
