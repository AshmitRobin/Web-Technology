<!DOCTYPE html>
<html>
<head>
    <title>Music Records (PHP - GET & POST)</title>
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
            width: 70%;
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
        form {
            margin: 15px auto;
            background: #fff;
            padding: 15px;
            border-radius: 10px;
            width: 50%;
        }
        input, button {
            padding: 8px;
            margin: 5px;
        }
    </style>
</head>
<body>

    <h1> Music Records (PHP - GET & POST Methods)</h1>

    <?php
    // Initial Data
    $singers = [
        ["name" => "Arijit Singh", "albums" => 250, "label" => "T-Series"],
        ["name" => "Shreya Ghoshal", "albums" => 400, "label" => "Sony Music"],
        ["name" => "Sonu Nigam", "albums" => 300, "label" => "Universal Music"]
    ];

    // Handle POST form (Add new singer)
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $newName = $_POST['name'] ?? '';
        $newAlbums = $_POST['albums'] ?? 0;
        $newLabel = $_POST['label'] ?? '';

        if (!empty($newName) && !empty($newLabel)) {
            $singers[] = ["name" => $newName, "albums" => (int)$newAlbums, "label" => $newLabel];
            echo "<p style='color:green;'><b>New Singer Added via POST!</b></p>";
        }
    }
    ?>

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

    <!-- GET Method Form -->
    <form method="GET">
        <h3>Search Singer (GET Method)</h3>
        <input type="text" name="search" placeholder="Enter singer name">
        <button type="submit">Search</button>
    </form>

    <?php
    if (isset($_GET['search'])) {
        $searchName = strtolower($_GET['search']);
        $found = false;
        foreach ($singers as $s) {
            if (strtolower($s['name']) == $searchName) {
                echo "<p style='color:blue;'><b>Found:</b> {$s['name']} ({$s['albums']} albums, Label: {$s['label']})</p>";
                $found = true;
                break;
            }
        }
        if (!$found) {
            echo "<p style='color:red;'>Singer not found!</p>";
        }
    }
    ?>

    <!-- POST Method Form -->
    <form method="POST">
        <h3>Add New Singer (POST Method)</h3>
        <input type="text" name="name" placeholder="Singer Name" required>
        <input type="number" name="albums" placeholder="Albums Count" required>
        <input type="text" name="label" placeholder="Music Label" required>
        <button type="submit">Add Singer</button>
    </form>

</body>
</html>
