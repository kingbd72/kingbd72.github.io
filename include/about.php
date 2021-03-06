<?php
/*
 *  Copyright (C) 2018 Laksamadi Guko.
 *
 *  This program is free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  You should have received a copy of the GNU General Public License
 *  along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */
session_start();
// hide all error
error_reporting(0);
if (!isset($_SESSION["mikhmon"])) {
  header("Location:../admin.php?id=login");
} else {
}
?>
<style>
.iFWrapper {
	position: relative;
	padding-bottom: 56.25%; /* 16:9 */
	padding-top: 25px;
	height: 0;
}
.iFWrapper iframe {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
  height: 100%;
  border :none;
}
</style>
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3><i class="fa fa-info-circle"></i> About</h3>
      </div>
      <div class="card-body">
        <h3>MIKROTIK ROUTER HOTSPOT WIFI SYSTEM</h3>
<p>
  Enjoy Your Hotspot Billing System Software and Easy Make Voucher Card.
</p>
<p>
  <ul>
    <li>
      Author : Mosharrof, Sarisa, Bera, Pabna.
    </li>
    <li>
      Licence : <a href="#">GPLv2</a>
    </li>
    <li>
      API Class : <a href="#">routeros-api</a>
    </li>
    <li>
      Website : <a href="https://kingbd365.blogspot.com/">kingbd365</a>
    </li>
    <li>
      Facebook : <a href="https://www.facebook.com/mosharrof.sarisa">mosharrof.sarisa</a>
    </li>
  </ul>
</p>
<p>
  Need & Conntact KINGBD.
</p>
<div>
    <i>Copyright &copy; <i> 2020 KINGBD</i></i>
</div>
</div>
</div>
</div>
<div class="col-12">
<div class="card">
  <div class="card-header">
  <h3><i class="fa fa-info-circle"></i> Changelog</h3>
  </div>
  <div class="card-body">
  <div class="iFWrapper">
    <iframe src="#" ></iframe>
  </div>
  </div>
</div>
</div>
</div>
