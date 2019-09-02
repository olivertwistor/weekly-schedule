<?php
namespace olivertwistor\weekly_schedule\models;

/**
 * This class models a week with a number of weekdays. Neither the number of
 * days, their order or their names are fixed, but are defined in this class.
 * This to ensure the ability to create schedules for other systems than 7-day
 * weeks.
 *
 * @author Johan Nilsson
 * @since  0.1.0
 */
class week
{
    /**
     * Array of the names of weekdays to use in the schedule. The order is
     * important.
     *
     * @var   array
     * @since 0.1.0
     */
    private $weekdays;

    /**
     * Creates a new week object with a given array of weekday names.
     *
     * @param array $weekdays names of weekdays to use; the order is important
     *
     * @since 0.1.0
     */
    public function __construct(array $weekdays)
    {
        $this->weekdays = $weekdays;
    }
}
