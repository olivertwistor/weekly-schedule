<?php
namespace olivertwistor\weekly_schedule\controllers;

use olivertwistor\weekly_schedule\models\schedule;

class html_exporter
{
    private $schedule;

    public function __construct(schedule $schedule)
    {
        $this->schedule = $schedule;
    }

    public function render(string $view_template, string $output_file) : void
    {
        // Run the schedule through the view template.

    }
}
