#!/bin/bash

rsync  --rsh=ssh -aizhL  ./apache/k2company.conf rrosen326@prod2.weather-explorer.com:/etc/apache2/sites-available/
rsync  --rsh=ssh -aizhL  ./apache/zephyrzone.conf rrosen326@prod2.weather-explorer.com:/etc/apache2/sites-available/