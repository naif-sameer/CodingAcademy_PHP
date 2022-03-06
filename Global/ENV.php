<?php
// PC User
echo 'The username is: ' .$_ENV["USER"] . '!';

// get Enviroument Info
getenv("REMOTE_ADDR"); 
putenv("tmp=usr"); 
getenv("tmp");
