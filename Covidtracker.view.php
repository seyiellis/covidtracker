<?php 
    use \koolreport\widgets\koolphp\Table;
    use \koolreport\widgets\google\BarChart;
    use \koolreport\d3\DonutChart;
    use \koolreport\charttable\ChartTable;
     use \koolreport\chartjs\LineChart;
?>

<div class="text-center">
    <h1>Covid-Tracking Reports</h1>
    <h4>Mocked Report </h4>
</div>
<hr/>

<?php
    $time = $this->params["time"];
    if($time == 'daily'){
	    $value = "Daily Infection"; 
    }else{
	    $value = "Monthly Infection"; 
    }
    LineChart::create(array(
        "title"=>"Sale vs Cost",
       "dataStore"=>$this->dataStore('covid_tracks'),
        "columns"=>array(
            "Date",
            "$value"=>array(
                "label"=>"$value",
                "type"=>"number",

            ),

        )
    ));
?>




 <?php
    ChartTable::create(array(
        "dataSource"=>$this->dataStore("covid_tracks"),
        "themeBase" => "bs4", // Optional option to work with Bootsrap 4
        "options" => [
            "paging" => true,
	    "processing" => true,
    	],

    ));
    ?>
