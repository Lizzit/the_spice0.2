<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap.css">
    <title>Contact Us Form In Php</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card">
                    <div class="card-title">
                    <h2 class="text-center">Contact Us</h2>
                    
                    <?php
                        $Msg = "";
                        if(isset($_GET['error'])){
                            $Msg = " Please fill in the blank ";
                            echo '<div class="alert alert-danger">.$Msg.</div>';
                        }
                    ?>
                    </div>
                    <div class="card-body">
                        <form action="process.php" method="post">
                            <input type="text" name="UName" placeholder="User Name" class="form-control m-2">
                            <input type="text" name="Email" placeholder="Email" class="form-control m-2">
                            <input type="text" name="Subject" placeholder="Subject" class="form-control m-2">
                            <textarea name="Msg" class="form-control" cols="30" rows="10" class="form-control m-2"></textarea>
                            <button class="btn btn-success m-2" name="btn-send">Validate</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>