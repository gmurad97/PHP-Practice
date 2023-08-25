<?php

/* //Add cookie
setcookie("user", hash("md5", "123"), time() + 3600, "/");

//cheack & show cookie
if (count($_COOKIE) > 0) {
    echo "Cookie enabled <br> user=" . $_COOKIE["user"];
} else {
    echo "Cookie disabled";
}

//delete cookie
setcookie("user", "", time() - 3600); */
