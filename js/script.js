$(function() {
    console.log("ready!" );

    $("#agreeToTermsCheckbox").click(checkIfToEnableOpenIssueButton);
    $("#contactUsForm input").keyup(checkIfToEnableOpenIssueButton);
});

function checkIfToEnableOpenIssueButton() {
    
    var allMandatoryContactDetailsProvided = isAllMandatoryContactDetailsProvided();

    if ($("#agreeToTermsCheckbox").prop("checked") && allMandatoryContactDetailsProvided) {
        $("#openIssueBtn").prop('disabled', false);
    }
    else {
        $("#openIssueBtn").prop('disabled', true);
    }
}

function isAllMandatoryContactDetailsProvided() {

    var allMandatoryContactDetailsProvided = true;

    $("#contactUsForm input").each(function() {
        
        if ($(this).prop("required")) {
            if ($(this).val() == "") {
                allMandatoryContactDetailsProvided = false;
            }
        }
    });

    return allMandatoryContactDetailsProvided;
}

/*
$('#myModal').on('shown.bs.modal', function () {
    $('#myInput').trigger('focus')
})
*/