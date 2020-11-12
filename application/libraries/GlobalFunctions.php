<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class GlobalFunctions {
/*
function construct 
*/
public function __construct()
{
    /*
    SOAP IPI authentication
    */
    $client = new SoapClient('https://dev.goprot.com/api/v2_soap/?wsdl');
    $session =  $client->login('goerp', 'Go9roterp');
    $this->data = array(
        'client' => $client,
        'session' => $session
    );
    /*
    load global Model
    */
    //$this->load->model('globalModel');
    //$this->load->model("OrdersModel");
      //$this->load->model('ion_auth_model');
}

/*
Order Info function
*/
public function orderInfo($increment_id){
    $result = $this->data['client']->salesOrderInfo($this->data['session'], $increment_id);
    
    return $result;
}

}
 
?>