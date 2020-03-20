<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$conn = mysqli_connect('localhost', 'root', '', 'login');

if ($conn) {
    echo "Connected";
} else {
    echo "Not Connected";
}