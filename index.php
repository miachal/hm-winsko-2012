<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl">
<head>
    <title>-=[ hackme</title>
	<meta http-equiv="content-language" content="pl">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" type="text/css" href="css.css" />
</head>
<body>
    <div id="title">
        <h1>-=[ hackme</h1>
    </div>

    <div id="container">
        <div id="sidebar">
            <h2>[ Menu ]</h2>
            <a class="menu" href="?o=regulamin">Regulamin</a>
            <a class="menu" href="?o=zadania">Zadania</a> 
            <a class="menu" href="?o=ranking">Ranking</a>
            <a class="menu" href="?o=kontakt">Kontakt</a>
        
        </div>
  
        <div id="main">

            <?php
            switch($_GET['o']) {
                case "zadania": 
                    include_once("inc/zadania/switch.php"); 
                break;
                case "regulamin": include("inc/regulamin.htm"); break;
                case "ranking": include("inc/ranking.htm"); break;
                case "kontakt": include("inc/kontakt.htm"); break;
                default: include("inc/zadania.htm"); break;
            }
            
            ?>
            
            <p class="credits"><strong>&copy; 2012 winsko.net</strong> | 
                Design by <a href="http://andreasviklund.com/">Andreas Viklund</a></p>
            
        </div>
        
        <div id="footer"></div>

    </div>
</body>
</html>
