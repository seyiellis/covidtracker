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
    $dose = $this->params["dose"];

    if($dose == 'firstDose'){
	    $value = 'First Dose'; 
    }else{
	    $value = "Second Dose"; 
    }

  BarChart::create(array(
        "dataStore"=>$this->dataStore('covid_tracks'),
        "width"=>"100%",
        "height"=>"500px",
        "columns"=>array(
            "Date"=>array(
                "label"=>"Month"
            ),
            "$value"=>array(
                "type"=>"number",
                "label"=>"$value",
                "prefix"=>"",
            )
        ),
        "options"=>array(
            "title"=>"Covd19 Tracker Chart "
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
