
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
        <h1 style="font-family:Georgia, 'Times New Roman', Times, serif; color: white; font-size: 2vw">ITLYMPICS EVENT</h1>

        <form action="/qr" method="POST">
            @csrf
            <div class="input-field">
            <input type="text" id="qr_data" name="qr_data" required="required">
            <span style="font-family:Arial, Helvetica, sans-serif; font-weight: bold;">EVENT DAY</span>
            </div>
            <button id="submit_btn">Submit</button>
        </form>

    </div>

</body>
</html>