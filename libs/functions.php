<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 5/2/2017
 * Time: 12:42 AM
 */

function format_date($date){
    return date('F j, Y, g:i a',strtotime($date));
}