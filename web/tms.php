<?php
	class Contact {
    function Contact($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
    }
}

try
{
/* Initialize webservice with your WSDL */
$client = new SoapClient("http://172.24.176.73/IPSWebService.asmx?wsdl");

/* Fill your Contact Object */
$contact = new Contact(100, "John");

/* Set your parameters for the request */
$params = array(
        "app_key" => 'B69924278C54BC45F5A2BA5889EBBA5',
        "app_secret" => "9D1864FF3A4AA28EFFECF3051461CF",
        "data" => '[{"type":"1","time":"2012-09-19 19:12:05","lng":"20.4567","lat":"10.12345","name":"杨乃武","tel": "13812345678","cardno": "123456789012345678","gpsno": "12345678","wlbcode":"010200010000","ocode": "1000306360","tmscode":"YDZKWL10092000005"},{"type":"2","time":"2012-09-19 19:12:05","lng":"20.4567","lat":"10.12345","name":"李四","tel": "13812345678","cardno": "YDZKWL10092000005","gpsno": "12345678","wlbcode":"010200010000","ocode": "1000306361","tmscode":"YDZKWL10092000006"},]',
);
	$data['op']='IPSTMSINTERFACE';


/* Invoke webservice method with your parameters, in this case: Function1 */
$response = $client->__soapCall("IPSTMSINTERFACE", array($params));
echo "<pre>";

print_r($response);
/* Print webservice response */

} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}
?>