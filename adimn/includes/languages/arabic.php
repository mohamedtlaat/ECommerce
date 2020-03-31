<?php

    function lang( $phrase ) {
        static $lang = array(
            'MESSAGE' => 'Welcome in arabic',
            'ADMIN'   => 'Arabic Admin' 
        );
        return $lang[$phrase];
    }