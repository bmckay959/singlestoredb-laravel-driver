<?php

namespace SingleStore\Laravel\Tests\Hybrid;

trait OverridesGetConnection
{
    // Laravel 9
    // Can we get rid of this?
    protected function getConnection($connection = null, $table = null)
    {
        return $this->getDatabaseConnection($connection, $table);
    }
}
