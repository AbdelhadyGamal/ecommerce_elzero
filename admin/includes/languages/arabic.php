<?php 

function lang($phrase) {
    static $lang=array(
        'MESSAGE' => '�����',
        'ADMIN'=>'���� ������'
        
    );
    return $lang[$phrase];
}


?>