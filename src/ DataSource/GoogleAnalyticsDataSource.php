<?php

namespace DataSource;

class GoogleAnalyticsDataSource implements DataSourceInterface
{

    /**
     * @return array
     */
    public function fetchData(): array
    {
        return ["Google Analytics" => 150];
    }
}