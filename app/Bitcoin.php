<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bitcoin extends Model
{
    protected $fillable = ['last_updated', 'data'];

    public function store(Request $request)
    {
        // Validate the request...

        $btc = new Bitcoin();

        $btc->last_updated = $request->last_updated;
        $btc->data = $request;
        $btc->save();
    }
}
