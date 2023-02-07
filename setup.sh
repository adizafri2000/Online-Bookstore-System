#!/bin/sh

url=""
echo "Searching for files that contain localhost and converting them to ${url}"
grep -Ril 'localhost' . | xargs sed -i "s/localhost/${url}/g"

grep -Ril 'localhost' .
php -v
php DDL.php
php DML-init.php
