<?php

Class Bundle {
    static function create_bundle (string $json_config_path) : array {
        $failed_files = [];

        return [ "failed_files" => $failed_files];
    }
}