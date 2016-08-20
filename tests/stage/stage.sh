#! /bin/bash

rm /var/www/html/index.html
service apache2 start
cp -r /pipeline/* /var/www/html/



sleep 100;
echo "Paused";
