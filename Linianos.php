<?php
declare(strict_types=1);
final class Linianos {
    public function translate($number) {
        switch ($number) {
            case $number % 15 == 0:
                $output = "Linianos\n";
                return $output;
                break;

            case $number % 3 == 0:
                $output = "linio\n";
                return $output;
                break;

            case $number % 5 == 0:
                $output = "IT\n";
                return $output;
                break;
                
            default:
                $output = $number."\n";
                return $output;
        }
    }

    public function run() {
        for ($number = 0; $number <= 99; $number += 1) {
            $output = $this->translate($number + 1);
            print $output;
        }
    }
} ?>