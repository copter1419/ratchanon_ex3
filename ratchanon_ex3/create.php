<?php

$name = "";
$email = "";
$phone = "";
$address = "";

$errorMessage = "";

if ( $_server['REQUESR_METHOD']== 'POST') {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $address = $_POST["address"];

        do{
            if ( empty($name)  || empty($email) || empty($phone) || empty($address) ){
                $errorMessag = "All the fields are required";
                break;
        }

        // add new client to database
        $name = "";
        $email = "";
        $phone = "";
        $address = "";

} while (false);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once "setHead.php" ?>
    <?php require_once "connect.php" ?>
</head>
<body>
    <div class="container my-5">
        <h2>เพิ่มสมาชิก</h2>
        <form method="post">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Name</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="name" value="<?php echo $name; ?>">
            </div>
    </div>
    <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Email</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="Email" value="<?php echo $Email; ?>">
            </div>
    </div>
    <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Phone</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="phone" value="<?php echo $phone; ?>">
            </div>
    </div>
    <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Address</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="name" value="<?php echo $address; ?>">
            </div>
    </div>

    <?php
    if ( !empty($successMessag)) {
        echo "
        <div class='row mb-3'>
            <div class='offset-sm-3 col-sm-6'>
                <div class='alert alert-success alert-dismissible fade show' role='alert'>
                    <strong>$successMessag</strong>
                <button type='button' class='btn-btn-close' data-bs-dismiss='alert' aria-label></button>
                </div>
            </div>
        </div>

        ";

    }
    ?>


    <!-- Button -->
    <div class="row mb-3">
        <div class="offset-sm-3 col-sm-3 d-grid">
            <button type="submit" class="btn btn-primary">บันทึก</button>
        </div>
        <div class="offset-sm-3 col-sm-3 d-grid">
            <a class="btn btn-outline-primary" href="/siwanon_ex3/index.php" role="button">ยกเลิก</a>
        </div>
    </div>
            </form>
</body>

</html>