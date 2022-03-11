$(document).ready(function(){
    var requestUrl = "http://ip-api.com/json";

    $.ajax({
        url: requestUrl,
        type: 'GET',
        success: function(json)
        {
            console.log("My country is: " + json.country);
            $("#country").val(json.country);
            $("#city").val(json.city);
        },
        error: function(err)
        {
            console.log("Request failed, error= " + err);
        }
    });

    $("#contact_success_msg").hide();

    $("#confirm_msg").click(function() {
        $("#contact_form").fadeOut("slow");
        $("#contact_success_msg").show();
    })

    $("#back_contact_form").click(function() {
        $("#contact_success_msg").hide();
        $("#contact_form").show();
    })
})