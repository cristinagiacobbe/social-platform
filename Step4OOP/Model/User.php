<?php
class User
{
    /**
     * class of users (of posts)
     * @param string username
     * @param string email
     */
    public function __construct(public string $username, public string $email)
    {
        $this->username = $username;
        $this->email = $email;
    }
}

class Membership extends User
{
    /**
     * Specific class of User (child class)
     * @param string entry_date: registration date of user on the platform
     * @param string loyalty_level: how often user interacts on platform (new user/medium user/loyal user)
     * @param int received_likes: number of likes received by user
     * @param int given_likes: number of likes given by user
     */

    public function __construct(public string $username, public string $email, public string $entry_date, public string $loyalty_level, public int $received_likes, public int $given_likes)
    {
        parent::__construct($username, $email);
        $this->entry_date = $entry_date;
        $this->loyalty_level = $loyalty_level;
        $this->received_likes = $received_likes;
        $this->given_likes = $given_likes;
    }
    public function loyalty()
    {
        if ($this->given_likes < 2) {
            $this->loyalty_level = "new user";
        } elseif ($this->given_likes > 2 && $this->given_likes < 10) {
            $this->loyalty_level = "medium user";
        } else {
            $this->loyalty_level = "loyal user";
        }
        return $this->loyalty_level;
    }
}
