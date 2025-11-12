<!DOCTYPE html>
<html>
<head>
    <title>Music Records (PHP)</title>
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

    <h1> Music Records (PHP)</h1>
    <p>Variables, Operators, Decision & Loop Controls</p>

    <!-- Variables -->
    <?php
    $title = "Top Singers and Their Records";  
    $albumCount = 3;                           
    $isLegendary = true;                      
    $rating = 4.5;                             

    $singers = [
        ["name" => "Arijit Singh", "albums" => 250, "label" => "T-Series"],
        ["name" => "Shreya Ghoshal", "albums" => 400, "label" => "Sony Music"],
        ["name" => "Sonu Nigam", "albums" => 300, "label" => "Universal Music"]
    ];
    ?>

    <h2><?php echo $title; ?></h2>

    <!-- Table -->
    <table>
        <tr>
            <th>Singer</th>
            <th>Albums</th>
            <th>Label</th>
        </tr>
        <?php
        foreach ($singers as $singer) {
            echo "<tr>
                    <td>{$singer['name']}</td>
                    <td>{$singer['albums']}</td>
                    <td>{$singer['label']}</td>
                  </tr>";
        }
        ?>
    </table>

    <div class="output">
        <h2>Results:</h2>
        <?php
        function checkLegend($singer) {
            if ($singer['albums'] > 350) {
                return $singer['name'] . " is a Legend with " . $singer['albums'] . " albums!";
            } else {
                return $singer['name'] . " has " . $singer['albums'] . " albums.";
            }
        }

        foreach ($singers as $s) {
            echo "<p>" . checkLegend($s) . "</p>";
        }

        $totalAlbums = 0;
        for ($i = 0; $i < count($singers); $i++) {
            $totalAlbums += $singers[$i]['albums']; 
        }
        echo "<h3>Total Albums (using += operator): $totalAlbums</h3>";

        echo "<h3>First Singer with more than 350 albums:</h3>";
        foreach ($singers as $s) {
            if ($s['albums'] > 350) {
                echo "<p>Found: " . $s['name'] . "</p>";
                break;
            }
        }

        echo "<h3>Boolean Example:</h3>";
        if ($isLegendary && $rating > 4.0) {
            echo "<p>This list contains legendary singers with great ratings!</p>";
        } else {
            echo "<p>Needs improvement...</p>";
        }
        ?>
    </div>

</body>
</html>
