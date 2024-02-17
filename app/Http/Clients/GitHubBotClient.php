<?php

namespace App\Http\Clients;

use NormanHuth\GithubApi\Client;

class GitHubBotClient extends Client
{
    public function __construct()
    {
        parent::__construct(config('services.github.bot_token'));
    }
}
