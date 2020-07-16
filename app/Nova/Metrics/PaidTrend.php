<?php

namespace App\Nova\Metrics;

use App\Paid;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Metrics\Trend;

class PaidTrend extends Trend
{
    /**
     * Calculate the value of the metric.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return mixed
     */
    public function calculate(NovaRequest $request)
    {
//        return $this->countByDays($request, Model::class);
        return $this->sumByMonths($request, Paid::class, 'paid_value');
    }


    /**
     * Get the ranges available for the metric.
     *
     * @return array
     */
    public function ranges()
    {
        return [
            3 => '3 ngày',
            7 => '7 ngày',
            30 => '30 ngày',
        ];
    }

    /**
     * Determine for how many minutes the metric should be cached.
     *
     * @return  \DateTimeInterface|\DateInterval|float|int
     */
    public function cacheFor()
    {
        // return now()->addMinutes(5);
    }

    /**
     * Get the URI key for the metric.
     *
     * @return string
     */
    public function uriKey()
    {
        return 'paid-trend';
    }
    public function name()
    {
        return 'Tổng chi';
    }
}
