<h3>Connecting to the database using object oriented programming.</h3> <br>;
this is made portable and can be used in any project to make a connection with the database, and read from it or write into it.<br>;
        $host     = "insert the host name for example localhost or mysiteexample.com"; <br>;
	$username = "the default username is root unless you set it to preference";<br>;
	$password = "leave empty or set it to preference";<br>;
	$database = "Insert MySQL database name";<br>;

 also include the Class.php to call the function on pages where it is needed: when you create more Classes and functions, you can simply include them to the Classes.php do this <?php
 include("Connection.php"); ?> at the top of the pages to include it.<br>;
