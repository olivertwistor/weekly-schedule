<?php

use olivertwistor\weekly_schedule\models\schedule;
use olivertwistor\weekly_schedule\models\week;

// Create a standard work week (Monday through Friday).
$weekdays = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'];
$week = new week($weekdays);

// Create a schedule from 8 AM to 5 PM.
$daystart = new DateTime('08:00');
$dayend = new DateTime('17:00');
$schedule = new schedule($week, $daystart, $dayend);

// Render the schedule and export it to the file system.
// ...
