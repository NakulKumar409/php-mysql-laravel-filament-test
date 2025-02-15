<?php

function camelCaseToSpaces($string) {
    return preg_replace('/(?<!^)[A-Z]/', ' $0', $string);
}

echo camelCaseToSpaces("camelCaseString"); // Output: "camel Case String"
?>