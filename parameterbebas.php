<?php
    function get_max() {
        if (func_num_args () == 0) {
            return false;
        } else {
            return max(func_get_args()); 
        }
    }

    echo get_max(10, 20); // Output: 20
    echo "<br>"; 
    echo get_max(10, 20, 30); // Output: 30
    echo "<br>"; 
    echo get_max(10, 20, 30, 40); // Output: 40
    echo "<br>"; 