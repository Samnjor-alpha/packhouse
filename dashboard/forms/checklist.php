<form action="" method="post" enctype="multipart/form-data" class="row g-3 mt-1">
    <div class="row">
        <div class="col-12">
            <div class="form-group">
                <p>1. Is the farm Ready?</p>
                <div class="row">
                    <div class="col-6">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" required name="ans1" id="gridCheck1">
                            <label class="form-check-label" for="gridCheck1">
                                Yes
                            </label>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" required name="ans1" id="gridCheck1">
                            <label class="form-check-label" for="gridCheck1">
                                NO
                            </label>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="col-12">
            <div class="form-group">
                <p>2. Is the manure applied?</p>
                <div class="row">
                    <div class="col-6">
                        <div class="form-check">
                            <input class="form-check-input"  required type="radio" name="ans2" id="gridCheck1">
                            <label class="form-check-label" for="gridCheck1">
                                Yes
                            </label>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-check">
                            <input class="form-check-input" required type="radio" name="ans2" id="gridCheck1">
                            <label class="form-check-label" for="gridCheck1">
                                NO
                            </label>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <p>3. Is water resource available?</p>
                <div class="row">
                    <div class="col-6">
                        <div class="form-check">
                            <input class="form-check-input" required type="radio" name="ans3" id="gridCheck1">
                            <label class="form-check-label" for="gridCheck1">
                                Yes
                            </label>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-check">
                            <input class="form-check-input"  required type="radio" name="ans3" id="gridCheck1">
                            <label class="form-check-label" for="gridCheck1">
                                NO
                            </label>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="offset-3 col-6">
        <a href="?startplant=<?php echo $_GET['startplant'] ?>&&checklist=checked" type="submit" class="btn  btn-success">Continue</a>
    </div>
</form>