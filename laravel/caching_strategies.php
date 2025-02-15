<?php

$data = Cache::remember('large_dataset', 3600, function () {
    return DB::table('large_table')->get();
});
?>