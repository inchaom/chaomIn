<br><br>
<?php include_once("header.php");?>
<div class="container">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <div class="card">
            <div class="card-body">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="input">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="" required>
                    </div>

                    <div class="form-group">
                        <label for="input">Gender</label>
                        <input type="text" class="form-control" name="gender" placeholder="" required>
                    </div>

                    <div class="form-group">
                        <label for="input">Province</label>
                        <input type="text" class="form-control" name="province" placeholder="" required>
                    </div>

                    <div class="form-group">
                        <label for="input">Email</label>
                        <input type="text" class="form-control" name="email" placeholder="" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="btn-send" class="btn-primary btn-sm float-right">send</button>
                    </div>
                </form>
            </div>

            <div class="card-footer">
                <b>
                    <?php include "getValue.php"; ?>
                </b> 
            </div>
            </div>
        
        </div>
        <div class="col-3"></div>
    </div>

</div>
<?php include_once("footer.php");?>