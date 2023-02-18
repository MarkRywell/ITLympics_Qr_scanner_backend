<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Code</title>
    <style>
        body {
            background-image: url('photos/landing-page-bg.png');
        }
        .container {
            margin: auto;
            min-width: 20%;
            width: 20%;
            text-align: center;
            padding-top: 10%;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0);
        }
    </style>
</head>
<body>
    <div class='container'>
        <p>{{ $qr_code }}</p>
        <h1 style="color: white; font-family:'Times New Roman', Times, serif; font-size: 50; color:#3e372f">{{ $day }}</h1>
    </div>
    
</body>
</html>