<?php

class SocialMedia
{
    public string $name;
}

class Facebook extends SocialMedia
{
    public function login(string $email, string $password)
    {
        return true;
    }
}

class FakeFacebook extends Facebook
{
    public function login(string $email, string $password)
    {
        return false;
    }
}
