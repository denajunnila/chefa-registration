#!/usr/bin/env bash

apt-get update
apt-get install -y apache2
debconf-set-selections <<< 'mysql-server mysql-server/root_password password 1234'
debconf-set-selections <<< 'mysql-server mysql-server/root_password_again password 1234'
apt-get update
sudo apt-get install -y mysql-server
apt-get update

if ! [ -L /var/www ]; then
  rm -rf /var/www
  ln -fs /vagrant /var/www
fi