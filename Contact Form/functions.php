<?php

    // Check for header injections
    function has_header_injection($str) {
        return preg_match ( "/[\r\n]/", $str );
    }


?>
