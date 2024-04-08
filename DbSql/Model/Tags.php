<?php
class tags
{
    public function __construct(public $id_user, public $username, public $web_site)
    {
        $this->id_user = $id_user;
        $this->username = $username;
        $this->web_site = $web_site;
    }
}
