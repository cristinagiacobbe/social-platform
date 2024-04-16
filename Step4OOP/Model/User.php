<?php
class User
{
    /**
     * class of users (of posts)
     * @param string username
     * @param string web_site
     */
    public function __construct(public string $username, public string $web_site)
    {
        $this->username = $username;
        $this->web_site = $web_site;
    }
}
