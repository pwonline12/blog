<ul>

<?php

/** @var $person Person */

foreach($personsDto as $key=> $person){
    echo "<li>".$key." ". $person->getName()."</li>";

}

 ?>

</ul>

