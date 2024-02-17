<?php

namespace App\Http\Clients;

use NormanHuth\GithubApi\Client;

class GitHubClient extends Client
{
    public function __construct()
    {
        parent::__construct(config('services.github.token'));
    }
}
