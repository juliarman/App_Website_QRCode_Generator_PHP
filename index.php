<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Aplikasi QRCode</title>
    <link rel="shortcut icon" href="assets/dipanegara.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <style>
        body,
        html {
            height: 100%;
            width: 100%;
        }

        .background-halaman {
            background-image: url("assets/images/background_stmikdipanegara.jpg");
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>

<body class="background-halaman">
    <div class="container">
        <br><br><br>
        <div class="row">
            <div class="col-md-6 offset-md-3" style="background-color: white; padding: 20px;">
                <div class="panel-heading">
                    <center>
                        <h1>Program QRCode Generator</h1>
                        <p>Developer By Juliarman Umar</p>
                    </center>
                </div>
                <hr>
                <form action="tampilkan.php" method="get">
                    <input type="text" autocomplete="off" class="form-control" name="DataInformasi" style="border-radius: 0px; " placeholder="Masukkan Data..." value="">
                    <br>
                    <input type="submit" class="btn btn-md btn-primary btn-block" value="Buat QRCode">
                </form>
            </div>
        </div>
    </div>
</body>

</html>