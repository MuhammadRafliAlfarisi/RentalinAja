<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Form</title>
    <link rel="stylesheet" href="book.css">
</head>

<body>

    <form id="bookform">
        <h2 style="font-family: montserrat">Booking Form</h2>
        <img src="matic3.png" alt="">
        <div id="name">
            <label for="FName">Full Name</label><br>
            <input type="text" name="FName" placeholder="your name" required>
        </div><br>
        <div>
            <label for="">Phone Number</label><br>
            <input type="number" placeholder="085614287785"required>
        </div><br>
        <div>
            <label for="">Email</label><br>
            <input type="email" placeholder="test@gmail.com"required>
        </div><br>
        
        <div>
            <label for="">Pilih Tanggal</label><br>
            <input type="datetime-local" placeholder=""required>
        </div><br>
        <div>
            Durasi :
            <select name="durasi">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            </select>
            hari <br><br>
        </div>
        <div>
            <label for="">Foto KTP</label>
            <input type="file" placeholder=""required>
        </div><br>
        <div>
            <label for="">Foto selfie diri</label>
            <input type="file" placeholder=""required>
        </div><br>
        <div><input type="submit"></div>
    </form>

</body>

</html>