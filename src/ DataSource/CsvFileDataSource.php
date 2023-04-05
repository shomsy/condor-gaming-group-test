<?php

namespace DataSource;

class CsvFileDataSource implements DataSourceInterface
{
    private string $file;

    public function __construct(string $file)
    {
        $this->file = $file;
    }

    /**
     * @return array
     */
    public function fetchData(): array
    {
        $data = [];

        if (($handle = fopen($this->file, "r")) !== false) {
            while (($row = fgetcsv($handle, 1000, ",")) !== false) {
                $data[$row[0]] = $row[1];
            }
            fclose($handle);
        }

        return $data;
    }
}
