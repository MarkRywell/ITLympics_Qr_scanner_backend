
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ITLympics QR Code Attendance</title>
    <style>
        #submit_btn {
            width:20ex;
            margin-top: 20;
            margin-bottom: 20;
        }

        #qr_data {
            margin-top: 20;
            margin-bottom: 50;
        }
    </style>
</head>
<body>
    <div style="margin: auto; width: 50%; text-align: center">
        <h1>ITLympics Event</h1>
        <h2>Input Day</h2>
        <form action="/qr" method="POST">
            @csrf
            <label for="qr_data">Event: </label>
            <input type="text" id="qr_data" name="qr_data"><br>
            <button id="submit_btn">Submit</button>
        </form>

    </div>

</body>
</html>