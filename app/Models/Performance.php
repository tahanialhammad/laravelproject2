<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Performance extends Model
{
    use HasFactory;

    /**
     * The name of the underlying table.
     *
     * @var string
     */
    protected $table = 'performance_stats';

    /**
     * Scope the query to records created this year.
     *
     * @param  Builder $query
     * @return mixed
     */
    //from v-6
    public function scopeThisYear($query)
    {
        return $query->where('created_at', '>=', Carbon::now()->firstOfYear());
    }

    //for v-8
    public function scopeSpanningDays($query, $days) // accept qwery builder en the rang of days
    {
        //we need from old to newst and give me the recod where the date within rang
        return $query->oldest()->whereDate(
            'created_at', '>=', Carbon::now()->subDays($days)
        );
    }
}
