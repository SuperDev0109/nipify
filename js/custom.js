$(document).ready(function(){
    var requestUrl = "https://api.ipregistry.co/?key=tryout";

    $.ajax({
        url: requestUrl,
        type: 'GET',
        success: function(json)
        {
            console.log("My country is: " + json.location);
            console.log(json.location.country.name, json.location.city);
            $("#country").val(json.location.country.name);
            $("#city").val(json.location.city);
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