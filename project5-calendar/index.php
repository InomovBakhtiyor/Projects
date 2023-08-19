<?php

declare(strict_types=1);

ini_set('display_errors', '1');
error_reporting(E_ALL);

function calendar(string $monthName, int $day): void
{
    print $monthName . "<br/>";
    print "Du Se Ch Pa Ju Sh Ya" . "<br/>";

    for($i=1; $i<=$day; $i++) {
        if($i <= 9){
            print 0 . $i . " ";
        } else {
            print $i . " ";
        }

        if($i === 7 || $i === 14 || $i === 21 || $i === 28){
            print "<br/>";
        }
    }

    print "<br/>" . "<br/>";
}

calendar("Yanvar", 31);
calendar("Fevral", 28);
calendar("Mart", 31);
calendar("Aprel", 30);
calendar("May", 31);
calendar("Iyun", 30);
calendar("Iyul", 31);
calendar("Avgust", 31);
calendar("Sentyabr", 30);
calendar("Oktyabr", 31);
calendar("Noyabr", 30);
calendar("Dekabr", 31);