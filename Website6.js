<!DOCTYPE html>
<html>
<head>
    <title>Music Records Demo</title>
    <style>
        body {
            font-family: sans-serif;
            background: #f0f0f0;
            text-align: center;
            padding: 20px;
        }
        h1 {
            color: #2c3e50;
        }
        table {
            margin: 20px auto;
            border-collapse: collapse;
            width: 60%;
            background: white;
        }
        th, td {
            border: 1px solid #333;
            padding: 10px;
        }
        th {
            background: #2c3e50;
            color: white;
        }
        .output {
            margin-top: 20px;
            background: #fff;
            padding: 15px;
            border-radius: 10px;
            display: inline-block;
            text-align: left;
        }
    </style>
</head>
<body>

    <h1> Music Records Demo </h1>
    <p>Loop Controls, Decision Controls & Functions</p>

    <table>
        <tr>
            <th>Singer</th>
            <th>Albums</th>
            <th>Label</th>
        </tr>
        <tbody id="tableBody"></tbody>
    </table>

    <div class="output" id="outputBox">
        <h2>Results:</h2>
    </div>

    <script>
        var singers = [
            { name: "Arijit Singh", albums: 400, label: "T-Series" },
            { name: "Shreya Ghoshal", albums: 400, label: "Sony Music" },
            { name: "Sonu Nigam", albums: 300, label: "Universal Music" }
        ];

        var tableBody = document.getElementById("tableBody");

        // LOOP CONTROL
        for (var i = 0; i < singers.length; i++) {
            var s = singers[i];
            var row = "<tr><td>" + s.name + "</td><td>" + s.albums + "</td><td>" + s.label + "</td></tr>";
            tableBody.innerHTML += row;
        }

        var output = document.getElementById("outputBox");

        // FUNCTION
        function checkLegend(singer) {
            // DECISION CONTROL
            if (singer.albums > 350) {
                return singer.name + " is a Legend with " + singer.albums + " albums";
            } else {
                return singer.name + " has " + singer.albums + " albums";
            }
        }

        for (var singer of singers) {
            output.innerHTML += "<p>" + checkLegend(singer) + "</p>";
        }

        output.innerHTML += "<h3>Finding first singer with more than 350 albums</h3>";
        for (var i = 0; i < singers.length; i++) {
            if (singers[i].albums > 350) {
                output.innerHTML += "<p>Found: " + singers[i].name + "</p>";
                break; 
            }
        }

    </script>

</body>
</html>
