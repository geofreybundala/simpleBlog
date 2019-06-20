<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <title>
        MyBlog
    </title>
    <link rel = "stylesheet" type = "text/css" href = "./assets/css/style.css" />
</head>
<body>

<?php
include('includes/header.php');
?>


<div class="content">

    <div class="container" >

        <a href="addpost.php">click to add new Post</a>

        <h3>Recently Post</h3>

        <table>
            <thead>

            <tbody>



            <?php
            include ('database/db_connection.php');


            $query = "SELECT * FROM posts ORDER BY id DESC";
            $result = mysqli_query($conn, $query);

            while ($row = mysqli_fetch_assoc($result)){
                $title = $row['title'];
                $id = $row['id'];
                $image = $row['image'];
                $date = $row['creation'];


                echo "<tr>";
                echo "<td>
<img src='{$image}' style='height: 400px'><br>
                     <span style='margin-bottom: 10rem
                     '>{$title} <span style=' font-size: smaller'>{$date}</span></span><br>"?>
                <a href='more.php?post_id=<?php echo $id; ?>'>click to read More</a>






                <?php

                echo "</td>";
                echo "</tr>";
            }
            ?>

            </tbody>
        </table>






    </div>





</div>
</body>

</html>