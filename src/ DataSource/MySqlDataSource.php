<?php

namespace DataSource;

class MySqlDataSource implements DataSourceInterface
{
    private string $name = 'MySQL';

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return array
     */
    public function fetchData(): array
    {
        // Pseudo logic to fetch data from a MySQL database
        return [
            'visits' => rand(100, 1000),
            'unique_visitors' => rand(50, 500),
            'bounce_rate' => rand(10, 90),
        ];
    }
}