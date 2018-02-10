<?php
/*
 * Introduction to PHP lectures supplemental code.
 * Created by Artur Karczmarczyk.
 * https://ideaspot.pl
 */

//03.12-soap.client.php
ini_set('display_errors', true);
try {
    $soap = new SoapClient('http://www.webservicex.net/globalweather.asmx?op=GetCitiesByCountry&wsdl');
    $res = $soap->__soapCall('GetCitiesByCountry', array(
        'CountryName' => 'Poland',
    ));

    var_dump($res);
} catch (SoapFault $e) {
    var_dump($e->getMessage());
    var_dump($e->getTraceAsString());
}

echo "DONE";
