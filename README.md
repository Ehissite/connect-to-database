<h3>Connecting to the database using object oriented programming.</h3> 
<p>this is made portable and can be used in any project to make a connection with the database, and read from it or write into it.</p>
<p> $host     = "insert the host name for example localhost or mysiteexample.com"; </p>
<p> $username = "the default username is root unless you set it to preference"; </p>
<p> $password = "leave empty or set it to preference"; </p>
<p> $database = "Insert MySQL database name"; </p>

 <p>also include the Class.php to call the function on pages where it is needed: when you create more Classes and functions, you can simply include them to the Classes.php do this <?php
 include("Connection.php"); ?> at the top of the pages to include it.</p>
