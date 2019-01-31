<!DOCTYPE html>
<html lang="de">
<head>
	<meta charset="utf-8">
	<title>User Generator</title>
	<meta name="author" content="Stefan 'Stefko' Kohler">
	<meta name="copyright" content="(c) 2018 by Lobsterlounge Digital Media Design - https://lobsterlounge.de" />
	<meta name="description" content="EuGen - User Generator für Contao Mitglieder des INACON WBT-Portals">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta name="robots" content="noindex,nofollow">
	<meta http-equiv="expires" content="43200">
	<!-- https://iconogen.com -->
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
	<link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/apple-touch-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon-180x180.png">
	<link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
	<link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96">
	<link rel="icon" type="image/png" href="/android-chrome-192x192.png" sizes="192x192">
	<meta name="msapplication-square70x70logo" content="/smalltile.png" />
	<meta name="msapplication-square150x150logo" content="/mediumtile.png" />
	<meta name="msapplication-wide310x150logo" content="/widetile.png" />
	<meta name="msapplication-square310x310logo" content="/largetile.png" />
	<script>document.addEventListener("touchstart",function(){},!0)</script>
	<script language="JavaScript"></script>
	<link href="https://fonts.googleapis.com/css?family=Roboto:300|Roboto+Mono:100,300" rel="stylesheet">
	<style type="text/css">
		
		*:focus { /* verhindert den blauen Schatten */
			outline: 0;
			box-shadow:none;
		}
		
		body {
			min-height:100vh;
			font-family: 'Roboto', sans-serif;
			letter-spacing: 0.1em;
			background-color: #11a9e2;
			font-weight: lighter;
			background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#0d86b3), to(#11a9e2));
		}
		
		h1 {
			margin:10px 0 40px 20px;
			text-shadow: 0 1px 0 #ccc, 0 2px 0 #c9c9c9, 0 3px 0 #bbb, 0 4px 0 #b9b9b9, 0 5px 0 #aaa, 0 6px 1px rgba(0, 0, 0, .1), 0 0 5px rgba(0, 0, 0, .1), 0 1px 3px rgba(0, 0, 0, .3), 0 3px 5px rgba(0, 0, 0, .2), 0 5px 10px rgba(0, 0, 0, .25), 0 10px 10px rgba(0, 0, 0, .2), 0 20px 20px rgba(0, 0, 0, .15);
			font: bold 80px/1 "Helvetica Neue", Helvetica, Arial, sans-serif;
			color: #fff;
		}
		
		form {
			max-width:450px;
			margin: 0 23px;
			color:#11a9e2;
			padding: 0px 25px 25px;
			background: #fff;
			box-shadow:
				0px 0px 0px 5px rgba( 255,255,255,0.4 ),
				10px 10px 10px rgba(0, 0, 0, .15);
			-moz-border-radius: 3px;
			-webkit-border-radius: 3px;
			border-radius: 3px;
			display: table;
			position: static;
		}
		
		form fieldset {
			border:none;
			margin:0;
			padding:0;
		}
		
		form fieldset.data {
			margin-top:20px;
		}
		
		form .field {
			width:100%;
		}
		
		form label {
			display:block;
			width:100%;
			float:right;
			text-shadow: 1px 1px 1px #bbb;
		}
		
		form label input {
			float:right;
    		color:#11a9e2;
			background: #f5f5f5;
    		font-size: 0.8rem;
    		-moz-border-radius: 3px;
    		-webkit-border-radius: 3px;
    		border-radius: 3px;
    		border: none;
    		padding: 13px 10px;
    		width: 200px;
    		margin-bottom: 20px;
    		box-shadow: inset 0px 2px 3px rgba( 0,0,0,0.1 );
    		clear: both;
		}

		input:focus {
    		background: #fff;
    		box-shadow: 0px 0px 0px 3px rgb(110, 183, 210), inset 0px 2px 3px rgba( 0,0,0,0.2 ), 0px 5px 5px rgba( 0,0,0,0.15 );
    		outline: none;   
		}

		form #usercount {
			width:90px;
		}
		
		input, select, textarea {
			margin-left:1rem;
  			padding: .5rem 1rem; 
  			font-size: 1rem; 
  			border: solid 1px #eee;
  			background: #fff; 
  			box-sizing: border-box;
		}
		
		sup {
			color:rgb(0, 180, 230);
			padding-left:3px;
		}
		
		table {
			margin:0 20px;
			border-collapse: collapse;
			font-family: 'Roboto Mono', monospace;
			letter-spacing: 0;
			box-shadow: 10px 10px 10px rgba(0, 0, 0, .15);
		}
		
		td {
			border:1px solid #eee;
			padding:10px 20px;
			font-weight: 100;
			color:#fff;
			text-align: center;
			background: #00b7ea;
		}
	
		thead td {
			text-align: left;
			font-weight: 300;
			font-size: 18px;
			background: #00b7ea; /* Old browsers */ /* FF3.6+ */ /* Chrome,Safari4+ */ /* Chrome10+,Safari5.1+ */ /* Opera 11.10+ */ /* IE10+ */
			background: -webkit-linear-gradient(#00b7ea 0%, #009ec3 100%);
			background: -o-linear-gradient(#00b7ea 0%, #009ec3 100%);
			background: linear-gradient(#00b7ea 0%, #009ec3 100%);
			background: -webkit-linear-gradient(#00b7ea 0%, #009ec3 100%);
			background: -o-linear-gradient(#00b7ea 0%, #009ec3 100%);
			background: linear-gradient(#00b7ea 0%, #009ec3 100%); /* W3C */
		}
		
		tbody td {
			text-align: center;
		}

		button {
  			display: block;
  			height: 50px;
  			width: 200px;
			cursor:pointer;
  			/*TYPE*/
  			color: #fff;
  			font: 17px/50px Helvetica, Verdana, sans-serif;
  			text-decoration: none;
  			text-align: center;
  			text-transform: uppercase;
			box-shadow: 10px 10px 10px rgba(0, 0, 0, .15);
  			/*GRADIENT*/  
  			background: #00b7ea; /* Old browsers */ /* FF3.6+ */ /* Chrome,Safari4+ */ /* Chrome10+,Safari5.1+ */ /* Opera 11.10+ */ /* IE10+ */
			background: -webkit-linear-gradient(#00b7ea 0%, #009ec3 100%);
			background: -o-linear-gradient(#00b7ea 0%, #009ec3 100%);
			background: linear-gradient(#00b7ea 0%, #009ec3 100%);
			background: -webkit-linear-gradient(#00b7ea 0%, #009ec3 100%);
			background: -o-linear-gradient(#00b7ea 0%, #009ec3 100%);
			background: linear-gradient(#00b7ea 0%, #009ec3 100%); /* W3C */
				-webkit-transition: all 0.5s ease;
    		transition: all 0.5s ease;
		}
		
		button.small {
  			height: 30px;
  			width: 150px;
  			/*TYPE*/
  			font: 13px/30px Helvetica, Verdana, sans-serif;
		}
		
		button:hover {
  			/*TYPE*/
  			color: white;
			box-shadow: 5px 5px 5px rgba(0, 0, 0, .15);
  			/*GRADIENT*/  
  			background: #00b7ea; /* Old browsers */ /* FF3.6+ */ /* Chrome,Safari4+ */ /* Chrome10+,Safari5.1+ */ /* Opera 11.10+ */ /* IE10+ */
			background: -webkit-linear-gradient(#009ec3 0%, #00b7ea 100%);
			background: -o-linear-gradient(#009ec3 0%, #00b7ea 100%);
			background: linear-gradient(#009ec3 0%, #00b7ea 100%);
			background: -webkit-linear-gradient(#009ec3 0%, #00b7ea 100%);
			background: -o-linear-gradient(#009ec3 0%, #00b7ea 100%);
			background: linear-gradient(#009ec3 0%, #00b7ea 100%); /* W3C */
				-webkit-transition: all 0.5s ease;
    		transition: all 0.5s ease;
		}
		
		fieldset button {
			margin:10px 0;
			box-shadow: 5px 5px 5px rgba(0, 0, 0, .15);
		}
		
		fieldset button:hover {
			box-shadow: 2px 2px 2px rgba(0, 0, 0, .15);
		}
		
		.accordion {
    		cursor: pointer;
		}

		.active, .accordion:hover {
    		background-color: #ccc;
		}

		.accordion:before {
		    content: '\002B';
		    font-weight: bold;
			padding-right:5px;
		}
		
		.active:before {
		    content: "\2212";
		}
		
		.panel {
		    max-height: 0;
		    overflow: hidden;
		    transition: max-height 0.2s ease-out;
		}
		
		
		
		@media (min-width:100px) and (max-width:767px) {
			
			h1 {
				font: bold 60px/1 "Helvetica Neue", Helvetica, Arial, sans-serif;
			}
			
			form #usercount,
			form #userprefix,
			form #pwlength{
				width:90%;
			}
			
			form label,
			form label input {
				float:none;
				display:block
			}
			
			form label input {
				margin-top:10px;
			}
			
			table {
				width:85vw;
				margin-right:20px;
			}
			
			td {
				font-weight: 300;
			}
			
			td.responsive {
				display:none;
			}
		}
			
	</style>
</head>
<body>

<h1>User Generator</h1>


<?php // prüfen ob die Variablen definiert sind (sonst PHP-Fehler beim ersten Seiten-Aufruf)
	if (isset ( $_POST['usercount'] )) { $usercount = $_POST['usercount']; }
		else { $usercount = ""; }
	if (isset ( $_POST['userprefix'] )) { $userprefix = $_POST['userprefix']; }
		else { $userprefix =""; }
	if (isset ( $_POST['pwlength'] )) { $pwlength = $_POST['pwlength']; }
		else { $pwlength ="8"; } // 8 ist der Contao Standard und wird vorgegeben
	if (isset ( $_POST['groups'] )) { $groups = $_POST['groups']; }
		else { $groups ="1"; } // 1 ist die Standardgruppe
	if (isset ( $_POST['login'] )) { $login = $_POST['login']; }
		else { $login ="1"; } // 1 ist der Standard -> Login erlaubt
	if (isset ( $_POST['counterstart'] )) { $counterstart = $_POST['counterstart']; }
		else { $counterstart =0; } // 1 ist der Standard
?>

<form action="<?php $_SERVER["SCRIPT_NAME"]; ?>" method="post">
	<fieldset class="data">
		<div class="field">
			<label for="usercount" title="zwischen 1 und 999">Anzahl der gewünschten User<sup>*</sup>:
				<input id="usercount" name="usercount" type="number" min="1" max="999" value="<?php echo $usercount; ?>" required>
			</label>
		</div>
		<div class="field">
			<label for="userprefix" title="Underscore (_) wird automatisch angehängt">Userprefix<sup>*</sup>:
				<input id="userprefix" name="userprefix" value="<?php echo $userprefix; ?>" required>
			</label>
		</div>
    	<div class="field">
			<label for="pwlength" title="zwischen 6 und 32 Zeichen, Standardwert ist 8">Passwortlänge<sup>*</sup>:
				<input id="pwlength" name="pwlength" type="number" min="6" max="32" value="<?php echo $pwlength; ?>">
			</label>
		</div>
		<button class="accordion small" type="button">Erweitert</button>
		<div class="panel field">
			<label for="groups" title="Wo soll der Zähler starten?">Counter Start<sup>*</sup>:
				<input id="counterstart" name="counterstart" value="<?php echo $counterstart; ?>">
			</label>
			<label for="groups" title="Gruppenzugehörigkeit, Kommagetrennt">Gruppe(n)<sup>*</sup>:
				<input id="groups" name="groups" value="<?php echo $groups; ?>">
			</label>
			<label for="login" title="User Login erlauben (1) oder nicht (0)">Login<sup>*</sup>:
				<input id="login" name="login" type="number" min="0" max="1" value="<?php echo $login; ?>">
			</label>
		</div>
	</fieldset>
	<fieldset class="buttons">
		<button type="submit"><i class="fab fa-whmcs"></i> generieren</button>
	</fieldset>
</form>

<p>&nbsp;</p>		

<!-- Tabelle + CSV-Export Button nur anzeigen, wenn User generiert sind -->
<?php 
	if ($usercount != "") {
?>
<table>
	<thead>
		<tr><td class="user">username</td>
			<td class="passwd">password</td>
			<td class="email responsive">email</td>
			<td class="groups responsive">groups</td>
			<td class="login responsive">login</td>
		</tr>
	</thead>
	<tbody>
		<?php
			function zufallsstring($laenge) {
			//Mögliche Zeichen für den String
   				$zeichen = '0123456789';
   				$zeichen .= 'abcdefghijklmnopqrstuvwxyz';
   				$zeichen .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
   				$zeichen .= '+#-$%?&_';
			//String wird generiert
				$str = '';
	   			$anz = strlen($zeichen);
	   			for ($i=0; $i<$laenge; $i++) {
				$str .= $zeichen[rand(0,$anz-1)];
	   			}
	   			return $str;
			}
		
			for($i=1; $i<=$usercount; $i++){ // Anzahl der zu generierenden User			
				// Mit führenden Nullen ausgeben: http://www.tutorials.de/php/177127-ganzzahlen-mit-fuehrende-nullen-ausgeben.html
				//echo zufallsstring(8) ."<br>\n";
				echo "<tr>"
						."<td class=\"user\">".$userprefix."_".sprintf ("%03d", $i+$counterstart)."</td>"								// Username
						."<td class=\"psswd\">".zufallsstring($pwlength)."</td>"														// Passwortlänge festlegen
						."<td class=\"email responsive\">".$userprefix."_".sprintf ("%03d", $i+$counterstart)."@example.com"."</td>"	// Email Adresse
						."<td class=\"groups responsive\">$groups</td>"																	// Gruppe
						."<td class=\"login responsive\">$login</td>"																	// Login erlauben (1)
					."</tr>";
			}
		?>
	</tbody>
</table>

<button id="export" data-export="export" style="margin:30px 0 150px 20px;"><i class="fas fa-cloud-download-alt"></i> csv-Export</button>

<?php // Stopp Tabelle + CSV-Export Button nur anzeigen, wenn User generiert sind -->
	}
?>


<!-- JS für den CSV Export -->
<!-- https://blog.kulturbanause.de/2016/09/html-tabelle-mit-javascript-jquery-als-csv-exportieren/ -->
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script>	
$.prototype.kb_table_csv = function() {

var kb_tidy_content = function(text){
    text = text.replace(/"/g, '');
    return ''+text+'';
};

$(this).each(function(){
	var table = $(this);
	var caption = $(this).find('caption').text();
	var title = [];
	var rows = [];
	$(this).find('tr').each(function(){
		var data = [];
		$(this).find('th').each(function(){
               var text = kb_tidy_content($(this).text());
			title.push(text);
			});
		$(this).find('td').each(function(){
               var text = kb_tidy_content($(this).text());
			data.push(text);
			});
		data = data.join(";");
		rows.push(data);
		});
	title = title.join(";");
	rows = rows.join(";\n");
	var csv = title + rows;
	var uri = 'data:text/csv;charset=utf-8,' + encodeURIComponent(csv);
	var download_link = document.createElement('a');
	download_link.href = uri;
	var ts = new Date().getTime();
	if(caption==""){
		download_link.download = ts+".csv";
	} else {
		download_link.download = caption+"-"+ts+".csv";
	}
	document.body.appendChild(download_link);
	download_link.click();
	document.body.removeChild(download_link);
	});
};

$("#export").click(function(){
  $("table").kb_table_csv();
});
</script>

<!-- JS für das Accordion -->
<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>
<link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
</body>
</html>
