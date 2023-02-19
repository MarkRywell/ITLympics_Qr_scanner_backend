<h1>Getting Started</h1>

<h2>Pre-Setup</h2>
<p>If you're done with this step then you can skip this pre-setup</p><br>
<p>
1. Install composer, Laravel,XAMPP, Git, and VS Code<br>
2. Globalize PHP (Environment Variables)<br>
3. Go to php.ini and change the ";extension=gd" to "extension=gd".<br>
4. Connect to a WIFI (internet connection is not needed).
</p>

<h2>Setup</h2>
<p>
1. git clone https://github.com/MarkRywell/ITLympics_Qr_scanner_backend.git.<br>
1.1. Extract the zip file if you downloaded the ZIP File instead of git clone<br>
2. Open project in VS Code.<br>
3. Connect all devices in one wifi.<br>
4. Run the command "ipconfig" in terminal.<br>
5. Check the IP address of your Computer.<br>
6. Create new file ".env" and copy contents of ".env.example" and paste it to ".env".<br>
7. Run the command "composer update".<br>
8. Run the command "php artisan key:generate".<br>
9. Turn on Apache and MySQL on XAMPP and in the broswer, go to "localhost/phpmyadmin".<br>
10. Create database with a database name of "qr_scanner_backend".<br>
11. Run the command "php artisan migrate".<br>
12. Run the command "php artisan serve --host=<The ip address> --port=8000".<br>
13. Go to the link provided from the terminal to open the Website.<br>
</p>

<h2>App Usage</h2>
<p>
1. On the website select the Day of the Event and click Submit.<br>
2. QR Code will be generated and Use the Mobile app and Press Scan Event and scan the QR Code from the Website.<br>
3. Confirm Event Day and Press Scan Student button to scan QR Code of Student provided from the Prisms.<br>
4. Press Add Student.<br>
5. Press Scan Student again to scan another QR code.<br>
6. You need to Scan Event again in the next day.
</p>
