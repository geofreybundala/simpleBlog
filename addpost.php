<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <title>
        MyBlog
    </title>
    <link rel = "stylesheet" type = "text/css" href = "assets/css/style.css" />
</head>
<body>

<?php
include('includes/header.php');
?>




<div class="content">
          <div class="container" style="margin-top: 2rem">
              <h3>ADD NEW POST</h3>
              <form action="" style="border:1px solid #ccc" method="post" enctype="multipart/form-data">
                  <div class="container">
                      <label><b>Title</b></label>
                      <input type="text" placeholder="Enter Title of your Post" name="title" id="title" required>

                      <label><b>Description</b></label>
                      <textarea name="description" cols="40" rows="5" style=" width: 100%;padding: 12px 20px; margin: 8px 0; display: inline-block;border: 1px solid #ccc;box-sizing: border-box;
"></textarea>

<!--                      <textarea name="description" cols="40" rows="5" style="width:200px; height:600px;">Enter text here...</textarea>-->

                      <label><b>File</b></label>
                      <input type="file" name="image" id="file">

                      <div class="clearfix">
                          <button type="button" class="cancelbtn">Cancel</button>
                          <button type="submit" name="submit" class="signupbtn">Add Post</button>
                      </div>
                  </div>
              </form>
          </div>
</div>



</body>

</html>

<?php
include ('database/db_connection.php');




if (isset($_POST['submit'])){
    $title = $_POST['title'];
    $description = $_POST['description'];
    $date_t = date("l d F Y");
    if (isset($_FILES['image'])){
        $dir = "assets/images/";
        $target_file = $dir.basename($_FILES['image']['name']);
        if (move_uploaded_file($_FILES['image']['tmp_name'],$target_file)){
            echo "successfully";
        }else{
            echo "not";
        }
    }


//    $target_file="sds";
    $query = "INSERT INTO posts (title, description, image, creation)
        VALUE('$title','$description', '$target_file','$date_t')";
    $result = mysqli_query($conn, $query);
    if (!$result){


    }else{
//


    }
}

?>

