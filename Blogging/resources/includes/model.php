<?php

//med våra arrayer så lägger vi till title, author, date och text. Eftersom vi delat in dom från 1 till 3 så har vi gjort att alla 3 inlägg är gjorda av olika personer, på olika datum och dom har olika titlar ocg egna texter.

//Slug är en URL string

$model = array(
  '0' => array(
    'Slug' => 'forsta-inlagget',
    'title' => 'Första inlägget',
    'author' => 'Gugge',
    'date' => '2015-01-01',
    'text'=>'Här kommer det första inlägget i sin helhet. Välkommen till Labb 3!
     Här övar vi på PHP för att bli duktiga webbserverprogrammerare. '
   ),
'1'=> array (
'Slug' => 'snart-ar-det-var',
'title' => 'Snart är det vår',
'author' => 'Gugge',
'date' => '2015-02-24',
'text'=>'Snart är det vår! Då övar vi på PHP för att bli duktiga webbserverprogrammerare. '
    ),
'2' => array (
'Slug' => 'robin-presenterar-sig',
'title' => 'Robin presenterar sig',
'author' => 'Robin',
'date' => '2015-02-25',
'text'=>'Robin är en trevlig prick som gärna övar på PHP för att som du bli en duktig webbserverprogrammerare. '
    ),

'3' => array(
'Slug' => 'senaste-inlagge',
'title' => 'Senaste inlägget',
'author' => 'Robin',
'date' => '2015-02-26',
'text'=>'Här kommer senaste inlägget i sin helhet. Här övar vi på PHP för att bli duktiga webbserverprogrammerare.
 Detta är tredje labben och andra labben i en serie labbar som tillsammans bygger ihop detta projekt.
 Ett enkelt PHP-projekt men väl strukturerat och genomtänkt konstruerat.'
    )
);




?>
