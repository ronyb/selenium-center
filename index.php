<?php include 'bootstrapHeader.php'; ?>

    <div class="row">
        <div class="col-md-12">
            <?php include 'topContent.php'; ?>
        </div>
    </div>

    <hr>

    <div class="row">
        <div class="col-md-12">
            <h3>Plans</h3>
            <?php include 'plansTable.php'; ?>
        </div>
    </div>

    <hr>

    <div class="row">
        <div class="col-md-6 form-container">
            <h3>Contact us</h3>
            <?php include 'contactUsForm.php';?>
        </div>
        <div class="col-md-6 form-container">
            <h3>Open new issue</h3>

            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#openIssueModal">
                Open Issue
            </button>

            <a href="#" data-toggle="modal" data-target="#termsModal" id="termsLink">Terms and conditions</a>
        </div>
    </div>


<?php include 'openIssueModal.php'; ?>
<?php include 'termsModal.php'; ?>
<?php include 'bootstrapFooter.php'; ?>