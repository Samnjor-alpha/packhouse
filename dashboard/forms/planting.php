<?php $plantno =plantingno();
?>
<section>
<form  method="post" action="" class="mt-5">
    <div>



            <div class="row">

                <div class="col-4">
                    <label for="userName">Planting  Number</label>
                    <input id="userName" value="<?php
                    echo $plantno?>" name="plantno" type="text" class="form-control">
                </div>
                <div class="col-4">
                    <label for="userName">Block No</label>
                    <input id="userName" name="userName" type="text" class="form-control">
                </div>
                <div class="col-4">
                    <label for="userName">Block Size</label>
                    <input id="userName" name="userName" type="text" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <label for="farm">Crop</label>
                    <select id="farm" class="form-control   form-select shadow-none"
                            style="width: 100%; height:36px;">
                        <option disabled selected>Select</option>

                        <option>Crop 1</option>
                        <option>Crop 2    </option>


                    </select>
                </div>

                <div class="col-6">
                    <label for="userName">Seed Rate</label>
                    <input id="userName" min="1" name="userName" type="number" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="col-3">

                    <label for="dateregistred">Planting Date</label>
                    <input id="dateregistred" type="date" class="form-control mydatepicker" placeholder="mm/dd/yyyy">


                </div>
                <div class="col-3">

                    <label for="dateregistred">Expected Harvest</label>
                    <input id="dateregistred" type="date" class="form-control mydatepicker" placeholder="mm/dd/yyyy">


                </div>
                <div class="col-3">
                    <label for="userName">Weather Condition</label>
                    <input id="userName" name="userName" type="text" class="form-control">
                </div>
                <div class="col-3">
                    <label for="userName">Previous Crop</label>
                    <input id="userName" name="userName" type="text" class="form-control">
                </div>
            </div>
            <div class="col-4 mt-4">
                <a href="manageplanting.php?plantingno=<?php echo plantingno()?>" class="btn btn-success">Start New planting</a>
            </div>



    </div>
</form>

</section>
<?php
//if (isset($_POST['start']))
//{
//    header("location:);
//}
//?>