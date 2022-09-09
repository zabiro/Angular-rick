<?php
$property_id = get_the_permalink(get_the_ID());

//$output .= $logo ;
$contactbutton = "<a href='$property_id#asesor_info' target='_blank'><button type='button' value=''>Contacta un Asesor</button></a>";
echo $contactbutton;



