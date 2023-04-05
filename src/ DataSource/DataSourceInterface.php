<?php

namespace DataSource;

interface DataSourceInterface
{
    public function fetchData(): array;
}