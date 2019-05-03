<?php
require("../codebase/connector/grid_connector.php");//adds the connector engine
 
//connects to the db with the name "dhtmlx_tutorial"  
$res=new PDO("mysql:dbname=dhtmlx_tutorial;host=localhost","root","root");
 
$conn = new GridConnector($res);             //initializes the connector object
$conn->render_table("contacts","contact_id","fname,lname,email");  //loads data
//the method takes: the table's name, the id field, a list of fields to load
?>