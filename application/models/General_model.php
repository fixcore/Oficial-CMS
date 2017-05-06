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
class General_model extends CI_Model
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

    public function timegettimestamp()
    {
        $actual = new DateTime(); $now = $actual->getTimestamp();
        return $now;
    }

    public function encryptBattlenet($email, $password)
    {
        $sha_pass_hash_bnet = strtoupper(bin2hex(strrev(hex2bin(strtoupper(hash("sha256",strtoupper(hash("sha256", strtoupper($email)).":".strtoupper($password))))))));

        return $sha_pass_hash_bnet;
    }

    public function encryptAccount($username, $password)
    {
        if(!is_string($username)) { $username = ""; }
        if(!is_string($password)) { $password = ""; }
        $sha_pass_hash = sha1(strtoupper($username).':'.strtoupper($password));
        
        return strtoupper($sha_pass_hash);
    }

}
