<?php

function parseAPIResponse($json) {
    $data = json_decode($json, true);

    if (json_last_error() !== JSON_ERROR_NONE) {
      
        error_log("JSON parsing error: " . json_last_error_msg());
        return null;
    }

      if (!isset($data['required_field'])) {
        error_log("Missing required field in API response");
        return null;
    }

    return $data;
}
?>