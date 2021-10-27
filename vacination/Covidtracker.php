<?php
require_once "koolreport/core/autoload.php";
use \koolreport\processes\Group;
use \koolreport\processes\Sort;
use \koolreport\processes\Limit;

class Covidtracker extends \koolreport\KoolReport
{
    use \koolreport\clients\Bootstrap;

    public function settings()
    {
        return array(
            "dataSources"=>array(
                "apiarray"=>array(
                    "class"=>'\koolreport\datasources\ArrayDataSource',
                    "dataFormat"=>"associate",        
                )
            )
        );
    }

    public function setup()
    {

	    if(isset($this->params["dose"]))
	    {
	
	    $dose = $this->params["dose"];
	    $country = $this->params["country"]; 

	
    	//connectng API here 

	    $ch = curl_init();
	    curl_setopt($ch, CURLOPT_URL,"https://smsc.dataspeaksintegrated.com/api/monthly/report");
	    curl_setopt($ch, CURLOPT_POST, 1);
	    curl_setopt($ch, CURLOPT_POSTFIELDS,
            http_build_query(array('country' => "$country", 'dose' => "$dose")));


	// Receive server response ...
	   curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

	    $server_output = curl_exec($ch);
	    //Store the data in associative array 
	    $server_output = json_decode($server_output, true);
	    //
	    $this->src("apiarray")->load($server_output)->pipe($this->dataStore("covid_tracks"));

	    
	    }
    }
}
