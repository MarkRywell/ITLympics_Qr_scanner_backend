
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ITLympics QR Code Attendance</title>
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
    <div id="form-input">
        <h1 style="font-family:Georgia, 'Times New Roman', Times, serif;">ITLYMPICS EVENT</h1>

        <form action="/qr" method="POST">
            @csrf
            <div class="input-field">
            <span>Event Day: </span>
            <input type="text" id="qr_data" name="qr_data" required="required"><br>
            </div>
            <button id="submit_btn">Submit</button>
        </form>

    </div>

</body>
</html>