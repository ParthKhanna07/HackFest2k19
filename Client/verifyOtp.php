<?php 
require_once("./functions/DB-config.php");
$error="";
if(isset($_POST['button-3'])){
    $otp = $_POST['otp'];
    
    try{
        $sql = "SELECT * FROM temp WHERE otp='.$otp.'"; 
        $result = $pdo->query($sql);
        if($result->rowCount() > 0){
            while($row = $result->fetch()){
                $id = $row['id'];
                $otp = $row['otp'];
                $volume = $row['volume'];
                $mass = $row['mass'];               
            }
            // Free result set
            unset($result);
        } else{
            echo "No records matching your query were found.";
        }
    } catch(PDOException $e){
        die("ERROR: Could not able to execute $sql. " . $e->getMessage());
    }
    // Close connection
    unset($pdo);
    
}
require_once("./includes/header.php");
?>
<div class="container my-4">
    <div class="row">
        <div class="col-12">
            <!--start card-->
            <div class="card-wrapper card-space">
                <div class="card card-bg card-big no-after">
                    <div class="card-body">
                        <div class="head-tags">
                            <a class="card-tag" href="#"><?php echo date("Y/m/d") ; ?></a>
                            <span class="data"> <?php echo $otp ; ?>Id - <?php echo $id ; ?></span>
                        </div>
                        <h5 class="card-title">PetroBytes Help Portal</h5>

                        <!-- The Form -->

                        <form action="./functions/addDetails.php" method="POST">
                            <div class="row">
                                <div class="col-6">
                                    <label for="volume" class="input-number-label">Volume</label>
                                    <span class="input-number disabled">
                                        <input type="number" id="volume" name="volume" value="<?php echo $mass ; ?>" disabled>
                                    </span></div>
                                <div class="col-6">
                                    <label for="mass" class="input-number-label">Mass</label>
                                    <span class="input-number disabled">
                                        <input type="number" id="mass" name="mass" value="<?php echo $mass ; ?>"
                                            disabled>
                                    </span></div>
                            </div><br>
                            <h5 class="card-title">You can Help Us</h5><br>
                            <div class="bootstrap-select-wrapper" id="address" name="address">
                                <label>Address</label>
                                <select title="Where did you fill in ?">
                                    <option value="PetrolPump A">PetrolPump A</option>
                                    <option value="PetrolPump B">PetrolPump B</option>
                                    <option value="PetrolPump C">PetrolPump C</option>
                                    <option value="PetrolPump D">PetrolPump D</option>
                                    <option value="PetrolPump E">PetrolPump E</option>
                                </select>
                            </div><br>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><svg class="icon icon-sm icon-primary">
                                                <use xlink:href="./svg/sprite.svg#it-pencil"></use>
                                            </svg></div>
                                    </div>
                                    <label for="input-group-3">Input Amount</label>
                                    <input type="text" class="form-control" id="inputAmount" name="inputAmount">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button" id="inputAmountBtn">Calculate
                                            Loss</button>
                                    </div>
                                </div>
                            </div>
                            <div class="alert alert-danger" role="alert" id="alert">
                                Calculate The Money Wasted
                            </div>
                            <div class="it-card-footer">
                                <span class="card-signature">Thanking You</span>
                                <input class="btn btn-outline-primary btn-sm" type="submit" valuue="Submit"
                                    id="fuelTransaction" name="fuelTransaction">
                            </div>
                        </form>
                        <script type="text/javascript">
                        document.querySelector("#inputAmountBtn").addEventListener("click", function() {
                            var inputReq = document.querySelector("#inputAmount").value;
                            var output = document.querySelector("#volume").value;
                            var error = 74 * (inputReq - output);
                            document.querySelector("#alert").innerHTML = "Rupees" + error;
                        })
                        </script>
                    </div>
                </div>
            </div>
            <!--end card-->
        </div>
    </div>
</div>
<?php require_once("./includes/footer.php");