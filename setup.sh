#!/bin/sh

url=""
echo "Searching for files that contain localhost and converting them to ${url}"
grep -Ri 'localhost' | xargs sed -i 's/localhost/${url}/g'

php DDL.php
php DML-init.php
