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
    <title>Register FIR</title>

</head>

<body>
<h1 align="center">Register FIR</h1>
    <form class="my-5 mx-5" method="post" action="#">
        <input type="text" class="my-2 form-control" name="fircode" placeholder="Your Email as Fir's Code" required>
        <input type="text" class="my-2 form-control" name="fir_register_by" placeholder="Fir Registerd by" required>
        <input type="text" class="my-2 form-control" name="phone" placeholder="Phone" required>
        <input type="text" class="my-2 form-control" name="crime" placeholder="Crime Type" required> 
        <input type="text" class="my-2 form-control" name="victim_nm" placeholder="Victim" required>
        <input type="text" class="my-2 form-control" name="victim_address" placeholder="Victims Address" required>
        <input type="text" class="my-2 form-control" name="crime_time" placeholder="Date and Time of Crime" required>
        <input type="text" class="my-2 form-control" name="crime_place" placeholder="Place of Crime" required>
        <input type="submit" align="center" class="my-2 btn btn-primary" name="submit" value="Submit" >
    </form>
    <?php 

    if(isset($_POST['submit'])){
        
        $fircode = $_POST['fircode'];
        $fir_register_by = $_POST['fir_register_by'];
        $phone = $_POST['phone'];
        $crime = $_POST['crime'];
        $victim_nm = $_POST['victim_nm'];
        $victim_address = $_POST['victim_address'];
        $crime_time = $_POST['crime_time'];
        $crime_place = $_POST['crime_place'];
        
        $con = mysqli_connect("localhost","root","","police app") or die("Can't Connect");
        $que = "INSERT INTO `fir` (`fir_u_code`, `fir_registered_by`, `phone`, `crime`, `victim_nm`, `victim_address`, `crime_time`, `crime_place`) VALUES ('$fircode','$fir_register_by','$phone','$crime','$victim_nm','$victim_address','$crime_time','$crime_place')";
        $res = mysqli_query($con,$que) or die("Data Cannot be Inserted");
        if($res){
            echo "<div>Data Entered Successfully You Email id is Your FIR Code</div>";
        }
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