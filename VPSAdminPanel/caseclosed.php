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
        background-color: darkkhaki;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 100%;
    }

    div {
        position: absolute;
        top: 10%;
        bottom: 30%;
        left: 40%;
        right: 40%;
        margin: auto;
    }
    </style>
    <title>Close the Case</title>

</head>

<body>

    <form class="my-5 mx-5" method="post" action="#">
        <input type="text" class="my-2 form-control" name="fircode" placeholder="Your Email as Fir's Code" required>
        <input type="submit" class="my-2 btn btn-primary" name="submit" value="Close the Case">
    </form>
    <?php 

    if(isset($_POST['submit'])){
        
        $fircode = $_POST['fircode'];
        $con = mysqli_connect("localhost","root","","police app") or die("Can't Connect");
        $que = "UPDATE `fir` SET `active`=0 WHERE `fir_u_code`='$fircode'";
        $res = mysqli_query($con,$que);
        echo mysqli_error($con);
    }
    ?>
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