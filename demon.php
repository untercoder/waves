<?php

require_once __DIR__.'/vendor/autoload.php';
require_once 'configdb.php';

use deemru\WavesKit;

$database = DatabaseConnect();


function DatabaseConnect()
{
    return new PDO('mysql:host=' . HOSTNAME . ';dbname=' . DBNAME . ';charset=' . CHARSET, LOGIN, PASS, [
        PDO::ATTR_PERSISTENT => true
    ]);
}

function WriteInDataBase($response, $database) {
   $query = "INSERT INTO `payments` (`id`, `transaction_id`, `wallet`, `amount`, `created`) VALUES (NULL, '".$response["id"]."', '".$response["sender"]."',
   '".$response["amount"]."','".date('"Y-m-d H:i:s"',$response["timestamp"])."');";
   $database->exec($query);
}

    if ($argv[1] === 'new') {
        $wk = new WavesKit( 'T' );
        $seed = $wk->randomSeed();
        if($seed !== flase){
            $wk->setSeed($seed);
            $address = $wk->getAddress();
            $fp = fopen('сonfig.txt', 'w');
            fwrite($fp, $address
                . PHP_EOL);
            fwrite($fp, $seed
                . PHP_EOL);
            fclose($fp);
        }
        else {
            echo 'Oшибка не удалось установить seed';
        }
    }

    else {
        $fp = fopen('сonfig.txt', 'r');
        $file_string_address = fgets($fp, 36);
        $flag = 0;
        while (true) {
            $response = file_get_contents("https://nodes-testnet.wavesnodes.com/transactions/address/".$file_string_address."/limit/1000");
            if($response != false) {
                $array_response = json_decode($response,true);
                if( $flag < count($array_response[0])) {
                    WriteInDataBase($array_response, $database);
                    if($flag === 0) {
                        foreach ($array_response[0] as $value) {
                            WriteInDataBase($value, $database);
                        }
                        $flag = count($array_response[0]);
                    }
                    if($flag < count($array_response[0])) {
                        WriteInDataBase($array_response[0][--$flag], $database);
                        $flag = count($array_response[0]);
                    }
                }
            }
            else {
                echo 'Не удалось подключится к API';
            }
            sleep(1);
        }


    }




