# RaspberryP-Web-Controlled-Lamp
A Raspberry Pi controlled lamp using a relay with the interface being hosted on LAN and assessed through the IP address ui. The code uses wiringPi to control the onboard GPIO. The on/off switch code is acsessed through the web interface hosted using Apache and PHP.

## Installation
1. Install wiringPi (Should be pre-installed if you are running Raspberry Pi OS or Raspbian)
2. Install apache2 (used to host the UI)
```
sudo apt-get install apache2 -y
```
3. Install PHP
```
sudo apt-get install php libapache2-mod-php -y
```
4. Cd into your install location 
```
By default it should be
cd  var/www/html
```
5. Delete the index.html file and create a new index.php file
6. Paste in the code within the index.php file above
7. Use ifconfig to check your IP Address and then you will see the UI appear on screen
### Make sure you are connected to the same network as the Raspberry Pi
