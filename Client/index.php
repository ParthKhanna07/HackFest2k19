<?php require_once("./includes/header.php"); ?>
    <div class="container my-4">
      <h1>Enter OTP</h1>
      <form action="./verifyOtp.php" method = "POST">
        <div class="form-group">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text"><svg class="icon icon-sm icon-primary">
                            <use xlink:href="./svg/sprite.svg#it-pencil"></use>
                        </svg></div>
                </div>
                <label for="input-group-3">Please Enter your OTP</label>
                <input type="text" class="form-control" id="otp" name="otp">
                <div class="input-group-append">
                    <input class="btn btn-primary" type="submit" id="button-3" value="Submit" name="button-3">
                </div>
            </form>
            </div>
        </div>
    </div>

<?php require_once("./includes/footer.php") ?>