<?php

//Give Active Navigation the class="highligt"
function navigation($highlight) {
    $start = '';
    $kontakt = '';
    $blogg = '';
//if($highlight == 'start') gör att Start "knappen" tar dig till start och den är highlighted så du ska se den tyddligare, samma gäller med KOntakt och Blogg.
    if($highlight == 'Start') {
        $start = 'class="highlight"';
    }
    elseif($highlight == 'Kontakt') {
        $kontakt = 'class="highlight"';
    }
    elseif($highlight == 'Blogg') {
        $blogg = 'class="highlight"';
    }

    echo '
        <nav>
            <ul>
                <li><a ' . $start . ' href="index.php">Start</a></li>
			    <li><a ' . $blogg . ' href="index.php?page=blogg">Blogg</a></li>
			    <li><a ' . $kontakt . ' href="index.php?page=kontakt">Kontakt</a></li>
		    </ul>
	    </nav>';
}

//Function for Copyright
function echoYear(){
    $year = date('Y');

    if ($year == 2017) {
        echo 'copyright 2017';
    }
    else {
        echo 'copyright 2017-' . $year;
    }
}

?>
