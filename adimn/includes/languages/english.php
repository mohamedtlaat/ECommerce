<?php

    function lang( $phrase ) {
        static $lang = array(
            // Navbar Links
            'HOME_ADMIN'    => 'Admin',
            'CATEGORIES'    => 'Sections',
            'ITEMS'         => 'Items',
            'MEMBERS'       => 'Members',
            'STATISTICS'    => 'Statistics',
            'LOGS'          => 'Logs',
            '' => '',
            '' => '',
        );
        return $lang[$phrase];
    }