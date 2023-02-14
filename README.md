<h1>Getting Started</h1>

<h2>Pre-Setup</h2>
<p>If you're done with this step then you can skip this pre-setup</p><br>
<p>
1. Install composer, Laravel,XAMPP, Git<br>
2. Globalize PHP (Environment Variables)<br>
3. Go to php.ini and change the ";extension=gd" to "extension=gd".<br>
4. Connect to a WIFI (internet connection is not needed).
</p>

<h2>Setup</h2>
<p>
1. git clone https://github.com/MarkRywell/ITLympics_Qr_scanner_backend.git.<br>
2. Open project in VS Code.<br>
3. Run the command "ipconfig" in terminal.<br>
4. Check the IP address of your Computer.<br>
5. Create new file ".env" and copy contents of ".env.example" and paste it to ".env".<br>
6. Run the command "composer update".<br>
7. Run the command "php artisan key:generate".<br>
8. Turn on Apache and MySQL on XAMPP and go to localhost/phpmyadmin.<br>
9. Create database with a database name of "itlympics_qr_scanner_backend".<br>
10. Run the command "php artisan migrate".<br>
11. Run the command "php artisan serve --host=<The ip address> --port=8000".<br>

</p>
