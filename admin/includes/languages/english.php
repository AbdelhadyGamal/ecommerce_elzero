<?php 

function lang($phrase) {
    static $lang=array(
        
        
        //home page
        'MESSAGE' => 'Welcome',
        'ADMIN'=>'Adminstartor'
        //settings
    );
    return $lang[$phrase];
}


?>