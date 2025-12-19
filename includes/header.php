<?php
/**
 * Created by PhpStorm.
 * User: Brian
 * Date: 1/31/2019
 * Time: 1:10 PM
 */
require_once('navigation.php');

$header = '<header>' . "\n";
$header .= '    <!-- collapsable menu -->' . "\n";
$header .= '    <input class="menu-btn" type="checkbox" id="menu-btn" />' . "\n";
$header .= '    <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>' . "\n";
$header .= '    <h1 class="show_in_mobile">Ace in the Hole<br>Multisport Events</h1>' . "\n";
$header .= '    <h1 class="hide_in_mobile">Ace in the Hole Multisport Events</h1>' . "\n";
$header .= $nav;
$header .= '</header>' . "\n";

echo $header;











