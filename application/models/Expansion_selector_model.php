<?php
/*
 * -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- *
 * Copyright (C) 2015-2017 FixCore <https://www.facebook.com/fixcore1/>

,
 * This program is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the
 * Free Software Foundation; either version 2 of the License, or (at your
 * option) any later version.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or
 * FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for
 * more details.
 * You should have received a copy of the GNU General Public License along
 * with this program. If not, see <http://www.gnu.org/licenses/>.
 * -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- *
*/
class Expansion_selector_model extends CI_Model
{
    public function __construct()
    {
    parent::__construct();
        $this->website = $this->load->database('website',TRUE);
        $this->auth = $this->load->database('auth',TRUE);
        $this->characters = $this->load->database('characters',TRUE);
        $this->world = $this->load->database('world',TRUE);
        if( ! ini_get('date.timezone') ) { date_default_timezone_set('GMT'); }
    }

    public function getLoginOne($username, $password) //tbc, wotlk, cata, mop
    {
            $query = $this->auth->query("SELECT * FROM account WHERE username = '".$username."' AND sha_pass_hash = '".$password."'");
            if($query->num_rows() > 0){
                session_start();
                $_SESSION['username']= $username;
                redirect(base_url(),'refresh');
            }
            else
            echo("User don't match");
    }

    public function getLoginTwo($email, $password) //wod, legion
    {
            $query = $this->auth->query("SELECT * FROM battlenet_accounts WHERE email = '".$email."' AND sha_pass_hash = '".$password."'");
            if($query->num_rows() > 0){
                session_start();
                $_SESSION['email']= $email;
                redirect(base_url(),'refresh');
            }
            else
            echo("User don't match");
    }

    public function getSelectorForRegister($expansion)
    {
        if($expansion == 1 || $expansion == 2 || $expansion == 3 || $expansion == 4)
        {

        }
        if($expansion == 5 || $expansion == 6)
        {

        }
    }

    public function getTrueSelector($expansion)
    {
        switch($expansion)
        {
            case 1: return '1';
            case 2: return '1';
            case 3: return '1';
            case 4: return '1';
            case 5: return '2';
            case 6: return '2';
        }

        return false;
    }


}
