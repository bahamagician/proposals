<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{

    protected $fillable = [
        'user_id', 'title', 'prepared_for', 'phone', 'email', 'client_needs', 'number_of_pages', 'cms', 'analytics',
            'hosting', 'domain_name', 'social_media', 'logo', 'mailing_list', 'facebook_profile', 'e_commerce',
            'sitemap', 'total_time', 'discount_percentage', 'discount_dollar', 'additional_cost'
    ];

    public function pages()
    {
        return $this->hasMany(Page::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
