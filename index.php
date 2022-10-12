<html>
    <head>
        <title>kartkówka</title>
        <meta charset="utf-8">
        <?php
            $db = new mysqli("51.123.43.245","admin","123456","quiz");
            $first = "SELECT name, last_name FROM students";
            $second = "SELECT content FROM questions";
        ?>
    </head>
    <body>
        <?php
            if($result=$db->query($first))
            {
                while($row = $result->fetch_array())
                {
                    echo'
                        <div> Imie: '.$row["name"].'Nazwisko: '.$row["last_name"].'<br></div>
                    '
                }
            }
            if($result=$db->query($second))
            {
                while($row = $result->fetch_array())
                {
                    echo'
                        <div> Pytanie: '.$row["content"].'<br></div>
                    '  
                }
            }
        ?>
    </body>
</html>
