$(function() {
    console.log("ready!");
    $("#agreeToTermsCheckbox").click(checkIfToEnableOpenIssueButton);

    $("#submitQuestionModalBtn").click(function() {
        $("#submitQuestionFormBtn").click();
    });
});

function checkIfToEnableOpenIssueButton() {
    
    if ($("#agreeToTermsCheckbox").prop("checked")) {
        $("#openIssueBtn").prop('disabled', false);
    }
    else {
        $("#openIssueBtn").prop('disabled', true);
    }
}