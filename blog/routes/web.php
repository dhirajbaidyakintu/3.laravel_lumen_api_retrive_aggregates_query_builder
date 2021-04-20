<?php

$router->get('/count', 'LaravelAggregatesQueryBuilder@aggregatesCount');
$router->get('/maximum', 'LaravelAggregatesQueryBuilder@aggregatesMaximum');
$router->get('/minimum', 'LaravelAggregatesQueryBuilder@aggregatesManimum');
$router->get('/avarage', 'LaravelAggregatesQueryBuilder@aggregatesAverage');
$router->get('/sum', 'LaravelAggregatesQueryBuilder@aggregatesSum');
