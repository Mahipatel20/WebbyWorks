<html>
    <body>
        <?php
        // preg_match()
        echo "<h2>preg_match()</h2>";
        $str = "Visit W3Schools";
        $pattern = " /w3schools/i";
        echo preg_match($pattern, $str);

        // preg_match_all()
        echo "<h2>preg_match_all()</h2>";
        $str = "The rain in SPAIN falss mainly on the plains.";
        $pattern = " /ain/i";
        echo preg_match_all($pattern, $str);

        // preg_replace()
        echo "<h2>preg_replace()</h2>";
        $str = "Visit Microsoft!";
        $pattern = " /microsoft/i";
        echo preg_replace($pattern, "W3Schools", $str);
        ?>
    </body>
</html>