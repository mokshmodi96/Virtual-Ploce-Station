<!doctype html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <style>
    body {
        background-color: lightblue;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 100%;
    }

    .zb {
        position: absolute;
        top: 10%;
        bottom: 30%;
        left:  20%;
        right: 30%;
        margin: auto;
    }
    </style>
    <title>Upload Medical File</title>

</head>
<?php 
// get url id 
    // $fir_id = $_GET['id'];
    $fir_id = 1;
?>

<body>
<?php 
    
    if(isset($_POST['submit'])){
    $target_dir = "";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    
    
    $fir_id;
    $reporttype = $_POST['reporttype'];
    $name = basename( $_FILES["fileToUpload"]["name"]);

    $con = mysqli_connect("localhost","root","","police app") or die("Can't Connect");
    $str = "INSERT INTO `medical`(`fir_id`, `Reporttype`, `filename`) VALUES ('$fir_id','$reporttype','$name')";
    $que = mysqli_query($con,$str) or die("not fetch");
            
    // // Check file size
    // if ($_FILES["fileToUpload"]["size"] > 50000000) {
    //   echo "Sorry, your file is too large.";
    //   $uploadOk = 0;
    // }
    
    
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
      echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo '
        <div class="alert alert-success alert-dismissible fade show" role="alert">
The file '. basename( $_FILES["fileToUpload"]["name"]). ' has been uploaded.     
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
      } else {
        echo '
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
        Sorry, there was an error uploading your file. <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
      }
    }
}
    ?>
    
    <br><br>
    <?php 
        $con = mysqli_connect("localhost","root","","police app") or die("Can't Connect");
        $sql = mysqli_query($con,"select victim_nm from fir where fir_id = $fir_id") or die("not fetch");
        $data = mysqli_fetch_array($sql);
        $nm=$data['victim_nm'];
    ?>
    <form class="mx-5" method="post" action="<?php $_PHP_SELF; ?>" enctype="multipart/form-data">
        <div class="form-group zb">
            <h3>Please Upload Medical Reports of <?php echo $nm; ?></h3>
            <input type="text" class="my-2 form-control" name="reporttype">
            <input type="file" class="my-2 form-control-file" id="fileToUpload" name="fileToUpload">
            <button type="submit" class="btn btn-primary my-2" name="submit">Submit</button>
        </div>
    </form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
</body>

</html>