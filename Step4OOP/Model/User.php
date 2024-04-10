<?php
class User
{
    public function __construct(public $username, public $web_site)
    {
        $this->username = $username;
        $this->web_site = $web_site;
    }
}
