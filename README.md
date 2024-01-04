Connecting to the database using object oriented programming. this is made portable and can be used in any project to make a connection with the database, and read from it or write into it.
        $host     = "insert the host name for example localhost or mysiteexample.com"; <br>;
	$username = "the default username is root unless you set it to preference";
	$password = "leave empty or set it to preference";
	$database = "Insert MySQL database name";

 also include the Class.php to call the function on pages where it is needed: when you create more Classes and functions, you can simply include them to the Classes.php do this <?php
 include("Connection.php"); ?> at the top of the pages to include it.
