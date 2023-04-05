<?php
namespace Controller;

class ApiController {
    private array $dataSources;

    public function __construct(array $dataSources) {
        $this->dataSources = $dataSources;
    }

    /**
     * @param string $period
     * @return array
     */
    public function getData(string $period): array {
        $data = [];

        // Loop through each data source and fetch data
        foreach ($this->dataSources as $dataSource) {
            $data = [...$data, ...$dataSource->fetchData()];
        }

        // Filter data based on period and return
        return $this->filterData($data, $period);
    }

    private function filterData(array $data, string $period): array {
        // Add logic to filter data based on period
        return $data;
    }
}