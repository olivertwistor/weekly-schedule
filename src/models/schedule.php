<?php
namespace olivertwistor\weekly_schedule\models;

use DateTime;

/**
 * This class models the schedule itself, not the items placed in it. The
 * schedule has a reference to a week object that defines the number, order and
 * names of the weekdays; and two times when the day starts and ends, that is
 * what time span that shown in the schedule.
 *
 * @author Johan Nilsson
 * @since  0.1.0
 */
class schedule
{
    /**
     * Week object to use with this schedule. Defines number, order and names
     * of the weekdays.
     *
     * @var   week
     * @since 0.1.0
     */
    private $week;

    /**
     * Time when the day begins and the schedule starts.
     *
     * @var   DateTime
     * @since 0.1.0
     */
    private $day_start;

    /**
     * Time when the day ends and the schedule stops.
     *
     * @var   DateTime
     * @since 0.1.0
     */
    private $day_end;

    /**
     * Creates a new schedule object.
     *
     * @param week    $week       the type of week to be used for this schedule
     * @param DateTime $day_start time when the day/schedule starts, for
     *                            example `new DateTime("08:00")`
     * @param DateTime $day_end   time when the day/schedule ends for example
     *                            `new DateTime("17:00")`;
     *
     * @since 0.1.0
     */
    public function __construct(week $week,
                                DateTime $day_start,
                                DateTime $day_end)
    {
        $this->week = $week;
        $this->day_start = $day_start;
        $this->day_end = $day_end;
    }
}
