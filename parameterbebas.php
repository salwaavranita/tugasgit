<?php
    function get_max() {
        if (func_num_args () == 0) {
            return false;
        } else {
            return max(func_get_args()); 
        }
    }

   
