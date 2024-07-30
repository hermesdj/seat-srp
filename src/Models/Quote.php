<?php
/**
 * User: Warlof Tutsimo <loic.leuilliot@gmail.com>
 * Date: 01/12/2017
 * Time: 20:42.
 */

namespace Denngarr\Seat\SeatSrp\Models;

use Illuminate\Database\Eloquent\Model;
use Seat\Eveapi\Models\Killmails\Killmail;
use Seat\Web\Models\User;

class Quote extends Model
{
    public $timestamps = true;

    protected $primaryKey = 'id';

    protected $table = 'denngarr_seat_srp_advrule';

    protected $fillable = [
        'killmail_id', 'user', 'value',
    ];

    public function killmail()
    {
        return $this->hasOne(Killmail::class, 'killmail_id', 'killmail_id');
    }

    public function user()
    {
        return $this->hasOne(User::class, 'groupID', 'group_id');
    }
}
