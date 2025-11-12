<!DOCTYPE html>
<html>
<head>
    <title>Music Records</title>
    <style>
        body {
            font-family: sans-serif;
            text-align: center;
            margin: 0;
            padding: 0;
            background:  #ACB6E5; 
            color: #333;
        }
        h1 {
            font-size: 3.5em;
            margin-top: 20px;
            color: #2c3e50;
        }
        p {
            font-size: 2.5em;
            color: #8e44ad;
        }
        marquee {
            font-size: 1em;
        }
        .photo-box {
            margin: 30px auto;
        }
        .photo-box img {
            width: 220px;
            height: 220px;
            margin: 15px;
            border-radius: 15px;
            border: 3px solid #2c3e50;
        }
        table {
            width: 75%;
            margin: 30px auto;
            border-collapse: collapse;
            background: #fff;
            border: 2px solid #2c3e50;
            border-radius: 10px;
            overflow: hidden;
        }
        th, td {
            border: 1px solid #2c3e50;
            padding: 15px;
            font-size: 1.1em;
            text-align: center;
        }
        th {
            background: #2c3e50;
            color: #fff;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        .math-box {
            width: 60%;
            margin: 40px auto;
            padding: 20px;
            background: #ffffffcc;
            border-radius: 12px;
        }
        .math-box h2 {
            color: #e74c3c;
        }
        .math-box p {
            font-size: 1.2em;
            color: #2c3e50;
            margin: 8px 0;
        }
    </style>
</head>
<body>

    <h1>
        <marquee> JavaScript Music Records </marquee>
    </h1>
    <p>
        Legends who defined Indian Music
    </p>

    <div class="photo-box">
        <img src="Kishore kumar.webp" alt="Kishore Kumar">
        <img src="Lata.jpeg" alt="Lata Mangeshkar">
    </div>

    <table id="recordsTable">
        <tr>
            <th>Singer</th>
            <th>Albums</th>
            <th>Label</th>
        </tr>
        <tbody id="tableBody"></tbody>
    </table>

    <div class="math-box" id="mathResults">
        <h2>Album Math Operations </h2>
    </div>

    <script>
        
        var singers = [
            { name: "Kishore Kumar", albums: 600, label: "HMV Records" },
            { name: "Lata Mangeshkar", albums: 700, label: "Saregama" }
        ];

        var tableBody = document.getElementById("tableBody");
        for (var i = 0; i < singers.length; i++) {
            var s = singers[i];
            var row = "<tr><td>" + s.name + "</td><td>" + s.albums + "</td><td>" + s.label + "</td></tr>";
            tableBody.innerHTML += row;
        }

        var kishoreAlbums = singers[0].albums;
        var lataAlbums = singers[1].albums;

        var addition = kishoreAlbums + lataAlbums;
        var subtraction = lataAlbums - kishoreAlbums;
        var multiplication = kishoreAlbums * lataAlbums;
        var division = (lataAlbums / kishoreAlbums).toFixed(2);

        var resultsDiv = document.getElementById("mathResults");
        resultsDiv.innerHTML += "<p>Addition (Total Albums): " + addition + "</p>";
        resultsDiv.innerHTML += "<p>Subtraction (Lata - Kishore): " + subtraction + "</p>";
        resultsDiv.innerHTML += "<p>Multiplication: " + multiplication + "</p>";
        resultsDiv.innerHTML += "<p>Division (Lata/Kishore): " + division + "</p>";
    </script>

</body>
</html>
