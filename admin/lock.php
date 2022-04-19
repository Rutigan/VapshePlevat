<?php("blocks/bd.php");(!isset($_SERVER['PHP_AUTH_USER']))

{("WWW-Authenticate: Basic realm=\"Admin Page\"");("HTTP/1.0 401 Unauthorized");();
}
{(!get_magic_quotes_gpc()) {
$_SERVER['PHP_AUTH_USER'] = mysqli_escape_string($_SERVER['PHP_AUTH_USER']);
$_SERVER['PHP_AUTH_PW'] = mysqli_escape_string($_SERVER['PHP_AUTH_PW']);
}

$query = "SELECT pass FROM userlist WHERE user='".$_SERVER['PHP_AUTH_USER']."'";
$lst = @mysqli_query($query);
(!$lst)
{("WWW-Authenticate: Basic realm=\"Admin Page\"");("HTTP/1.0 401 Unauthorized");();
}
(mysqli_num_rows($lst) == 0)
{("WWW-Authenticate: Basic realm=\"Admin Page\"");("HTTP/1.0 401 Unauthorized");();
}

$pass = @mysqli_fetch_array($lst);($_SERVER['PHP_AUTH_PW']!= $pass['pass'])
{("WWW-Authenticate: Basic realm=\"Admin Page\"");
Header ("HTTP/1.0 401 Unauthorized");();
}
}
?>
