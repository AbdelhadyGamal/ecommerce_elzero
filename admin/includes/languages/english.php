<?php 

function lang($phrase) {
    static $lang=array(
        
        
        //home page
        'MESSAGE' => 'Welcome',
        'ADMIN'=>'Adminstartor',
        //settings

	    //navbar
	    'Navbar'=>'Navbar',
	    'Action'=>'Action'


    );
    return $lang[$phrase];
}


?>