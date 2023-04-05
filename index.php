<?php

require __DIR__ . '/vendor/autoload.php';

use Controller\ApiController;
use DataSource\GoogleAnalyticsDataSource;
use DataSource\MySqlDataSource;
use DataSource\CsvFileDataSource;

// Create data source objects
$googleAnalytics = new GoogleAnalyticsDataSource();
$mySqlDatabase = new MySqlDataSource();
$csvFile = new CsvFileDataSource('path/to/csv/file.csv');

$dataSources = [$googleAnalytics, $mySqlDatabase, $csvFile];

// Create API controller object and pass data source objects
$apiController = new ApiController($dataSources);

// Handle API request and response
$response = $apiController->fetchData("current_month");

// Output response as JSON
header('Content-Type: application/json');
echo json_encode($response);
