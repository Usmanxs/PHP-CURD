<?php

$link = mysqli_connect("localhost","root","","sem");

mysqli_query($link,"DROP DATABASE sem;");

echo "Database deleted";