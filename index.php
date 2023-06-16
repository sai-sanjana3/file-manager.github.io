<?php
include_once 'upload.php';
?>
<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title>File Manager</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/style.css">
    </head>
    
<div class="container">
    <div class="upfrm">
        <?php if(!empty($statusMsg)){ ?>
        <p class="status-msg"><?php echo $statusMsg; ?></p>
        <?php}?>
        <form action="" method="post" enctype="multipart/form-data">
            <label> Select Files to Upload:</label>
            <input type="file" name="files[]" multiple>
            <input type="submit" name="submit" value="UPLOAD">
</form>
</div>  

<div class="gallery">
    <div class="gcon">
        <?php
        $sql="SELECT * FROM images ORDER BY id DESC";
        $query=$db->query($sql);

        if($query->num_rows > 0){
            while($row=$query->fetch_assoc()){
                $imageURL='uploads/'.$row["file_name"];
                ?>
                <img src="</php echo $imageURL; ?>" alt=""/>
                <?php
            }
        }else{
            echo '<p> No image(s) found...</p>';
        }
        ?>
</div>
</body>
</html>    