<?php

class Is_logged
{

    public function  is_logged_in()
    {
        if(!isset($_SESSION['user'])|| $_SESSION['user']['logged_in']  != true ) {
            return false;
        }
        return true;
    }


}