<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Lab 9</title>
    </head>
    <body>
        <?php
        $connection = new PDO('mysql:host=mysql;dbname=demo;charset=utf8', 'root', 'root');
        $query      = $connection->query("SELECT TABLE_NAME FROM information_schema.TABLES WHERE TABLE_SCHEMA = 'demo'");
        $tables     = $query->fetchAll(PDO::FETCH_COLUMN);

        if (empty($tables)) {
            echo '<p class="center">Brak tabel w bazie danych <code>demo</code></p>';
        } else {
            echo '<p class="center">Baza danych <code>demo</code> zawiera następujące tabele:</p>';
            echo '<ul class="center">';
            foreach ($tables as $table) {
                echo "<li>{$table}</li>";
            }
            echo '</ul>';
        }
        ?>
    </body>
</html>
