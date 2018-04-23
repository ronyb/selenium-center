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
            <?php include 'contactUsForm.php';?>
        </div>
        <div class="col-md-6 form-container">
            <?php include 'openIssueSection.php';?>
        </div>
    </div>


<?php include 'openIssueModal.php'; ?>
<?php include 'termsModal.php'; ?>
<?php include 'bootstrapFooter.php'; ?>