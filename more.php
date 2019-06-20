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

        <h3></h3>

        <table>
            <thead>

            <tbody>



            <?php
            include ('database/db_connection.php');

            if(isset($_GET['post_id'])){
                $post_id = $_GET['post_id'];

                $query = "SELECT * FROM posts WHERE id =$post_id ORDER BY id DESC";
                $result = mysqli_query($conn, $query);


            }





            $result = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['id'];
                $title = $row['title'];
                $description = $row['description'];
                $image = $row['image'];
                $date = $row['date'];

                echo "<tr>";
            echo "<td>
              <img src='{$image}' style='height: 400px'></td>
                     <td><span style='margin-bottom: 10rem
                     '>{$title} <span style=' font-size: smaller'>{$date}</span></span><br>
                     <p>{$description}</p>
                     
                     ";


                echo "</tr>";

                echo "
                       </tbody>
                       </table>
                ";

//                for comment display
                $query2 = "SELECT * FROM comments WHERE post_id =$post_id ";
            $result2 = mysqli_query($conn, $query2);
            echo "<ul>";
            while ($row2 = mysqli_fetch_assoc($result2)) {
                $comment = $row2['comment'];

                echo "<li>{$comment}</li>";


            }

                echo "</ul>";





            }

            ?>





<!--            ADD COMMENT -->
        <div class="container" style="margin-top: 2rem">
            <h3>ADD NEW COMMENT</h3>
            <form action="" style="border:1px solid #ccc" method="post" enctype="multipart/form-data">
                <div class="container">


                    <textarea name="comment" cols="40" rows="5" style=" width: 100%;padding: 12px 20px; margin: 8px 0; display: inline-block;border: 1px solid #ccc;box-sizing: border-box;
"></textarea>


                    <div class="clearfix">
                        <button type="button" class="cancelbtn">Cancel</button>
                        <button type="submit" name="submit" class="signupbtn">Post</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


<?php
    if (isset($_POST['submit'])){
    $comment = $_POST['comment'];




    $query = "INSERT INTO comments (post_id,comment)
    VALUE('$post_id','$comment')";
    $result = mysqli_query($conn, $query);
    if (!$result){

    echo "fails";

    }else{
        header("Location:more.php?post_id=$post_id");


    echo "succesfully";

    }
    }else{
    echo "fails";
    }

    ?>


    <!--            END ADD CMMENT -->




    </div>





</div>
</body>

</html>