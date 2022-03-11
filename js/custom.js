$(document).ready(function(){

    $.ajax({
        url: "https://api.ipregistry.co/?key=onadwn9qy5mfowl3",
        type: 'GET',
        success: function(currentLocation)
        {
            // console.log("My country is: " + currentLocation.location);
            // console.log(currentLocation.location.country.name, currentLocation.location.city);
            getCities(currentLocation.location.country.name, currentLocation.location.city);

            $("#country").change(function(){
                getCities($("#country").val(), currentLocation.location.city);
            })
        
            $.ajax({
                url: "https://countriesnow.space/api/v0.1/countries/population",
                type: 'GET',
                success: function(json)
                {
                    $("#country").html("");
                    for (var i = 0; i < json.data.length; i++) {
                        $("#country").append('<option value="'+json.data[i].country+'">'+json.data[i].country+'</option>');
                    }
                    $("#country").val(currentLocation.location.country.name);
                },
                error: function(err)
                {
                    console.log("Request failed, error= " + err);
                }
            });

        },
        error: function(err)
        {
            console.log("Request failed, error= " + err);
        }
    });


    function getCities(country, currentCity) {
        console.log(country, currentCity);
        $.ajax({
            url: "https://countriesnow.space/api/v0.1/countries/population/cities/filter",
            type: 'POST',
            data: {
                country: country
            },
            success: function(json)
            {
                $("#city").html("");

                for (var i = 0; i < json.data.length; i++) {
                    $("#city").append('<option>'+json.data[i].city+'</option>');
                }
                $("#city").val(currentCity);
            },
            error: function(err)
            {
                console.log("Request failed, error= " + err);
            }
        });
    }
    

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