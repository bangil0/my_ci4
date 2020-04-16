<?php 

function get_custom_number($input, $pad_len = 7, $prefix = null) {
    if ($pad_len <= strlen($input))
        trigger_error('<strong>$pad_len</strong> cannot be less than or equal to the length of <strong>$input</strong> to generate invoice number', E_USER_ERROR);

    if (is_string($prefix))
        return sprintf("%s%s", $prefix, str_pad($input, $pad_len, "0", STR_PAD_LEFT));

    return str_pad($input, $pad_len, "0", STR_PAD_LEFT);
}

// Returns input with 7 zeros padded on the left
echo get_custom_number(1); // Output: 0000001

// Returns input with 10 zeros padded
echo get_custom_number(1, 10); // Output: 0000000001

// Returns input with prefixed F- along with 7 zeros padded
echo get_custom_number(1, 7, "F-"); // Output: F-0000001

// Returns input with prefixed F- along with 10 zeros padded
echo get_custom_number(1, 10, "F-"); // Output: F-0000000001

?>