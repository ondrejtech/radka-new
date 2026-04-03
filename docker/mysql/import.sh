#!/bin/bash
# Import edsystem.sql with foreign key checks disabled to avoid constraint errors
set -e

echo "[import] Importing edsystem.sql (foreign key checks disabled)..."

{
    echo "SET FOREIGN_KEY_CHECKS=0;"
    cat /tmp/edsystem.sql
    echo "SET FOREIGN_KEY_CHECKS=1;"
} | mysql -u root -p"${MYSQL_ROOT_PASSWORD}" "${MYSQL_DATABASE}"

echo "[import] Import complete."
