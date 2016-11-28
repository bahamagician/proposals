<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{

    protected $fillable = [
        'proposal_id', 'page_title'
    ];

    public function proposals()
    {
        return $this->belongsTo(Proposal::class);
    }
}
