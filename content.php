<?php
include("database.php");
if(isset($_POST['submit']))
{
    if($_POST['title']=='' or $_POST['content']=='')
    {
        echo("<script>alert('FILL ALL THE FIELDS.')</script>");
        exit();
    }
    else
    {
        $title = $_POST['title'];
        $content = $_POST['content'];
        $image_name = $_FILES['image']['name'];
        $image_type = $_FILES['image']['type'];
        $image_size = $_FILES['image']['size'];

        $image_tmp = $_FILES['image']['tmp_name'];

        if($image_type=="image/jpeg" or $image_type=="image/jpg" or $image_type=="image/png")
        {
            if ($image_size <= 2000000)
            {
                $destination = "assest/images/" . $image_name;
                move_uploaded_file($image_tmp, $destination);

            }
           
        }
        else
        {
            echo("<script>alert('Invalid File Type.')</script>");
        }
        $query = "insert into content(title,content,image) value('$title','$content','$image_name')";


        if ($mysqli->query($query))
        {
            echo "<center><h1>POST HAS BEEN SUBMITTED.</h1></center>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONTENT</title>
</head>

<body>
    <form action="content.php" name="book" enctype="multipart/form-data" method="POST">
        <table align="center" border="10" width="740">
            <tr>
                <td colspan="5" align="center" bgcolor="#FF0000"><h1>WRITE YOUR CONTENT HERE</h1></td>
            </tr>
            <tr>
                <td align="right">Title</td>
                <td align="center"><input type="text" name="title"></td>
            </tr>

            <tr>
                <td align="right">Content</td>
                <td align="center"><textarea name="content"></textarea></td>
            </tr>

            <tr>
                <td align="right">Image</td>
                <td align="center"><input type="file" name="image"></td>
            </tr>
            <tr>
                <td colspan="5" align="center"><input type="submit" name="submit" value="Insert Content"></td>
            </tr>

        </table>
    </form>

</body>

</html>