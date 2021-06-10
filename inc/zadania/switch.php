<?php

switch($_GET['w']) {
    case "0x01-Zadanie-01": include("./inc/zadania/0x01-Zadanie-01.htm"); break;
    case "0x02-Zadanie-02": include ("./inc/zadania/0x02-Zadanie-02.htm"); break;
    case "0x03-Zadanie-03": include ("./inc/zadania/0x03-Zadanie-03.htm"); break;
	 case "0x04-CrackMe-01": include("./inc/zadania/0x04-CrackMe-01.htm"); break;    

    default: include("./inc/zadania.htm"); break;
}

?>
