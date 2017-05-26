<html>

<body>
<h1>This is php</h1>
<?php
$x=3.14;
var_dump($x);
//settype($x, "integer");
var_dump( $x);
var_dump((integer)$x);
echo gettype($x);
echo "The value of pi".$x;

?>
</body>

</html>


/* notes
-print has a return statement of 1
-echo can take multiple parameters
-echo is faster than print


-----php string process
-single quoute
-double quoute
-hereDoc
-nowdoc
