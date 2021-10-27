<?php
    use \koolreport\chartjs\DonutChart;
    $category_amount = array(
        array("category"=>"Books","sale"=>32000,"cost"=>20000,"profit"=>12000),
        array("category"=>"Accessories","sale"=>43000,"cost"=>36000,"profit"=>7000),
        array("category"=>"Phones","sale"=>54000,"cost"=>39000,"profit"=>15000),
        array("category"=>"Movies","sale"=>23000,"cost"=>18000,"profit"=>5000),
        array("category"=>"Others","sale"=>12000,"cost"=>6000,"profit"=>6000),
    );

?>

<html>
    <head>
        <title>Test formatValue of DonutChart</title>
    </head>
    <body>
        <h1>Test formatValue of DonutChart</h1>
        <?php
        DonutChart::create(array(
            "title"=>"Sale Of Category",
            "dataSource"=>$category_amount,
            "columns"=>array(
                "category",
                "cost"=>array(
                    "type"=>"number",
                    "label" => "Avarage time",
                    'formatValue'=>function($value) {
                        return $value/2;
                    }
                )
            )
        ));
        ?>
    </body>
</html>