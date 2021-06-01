<?php
    function getData($fileName) {
        $res = [];

        if( ($handle = fopen($fileName, "r")) !== false ) {
            while( ($data = fgetcsv($handle, 500, ";")) !== false ) {
                $res[] = $data;
            }
        }

        return $res;
    }
