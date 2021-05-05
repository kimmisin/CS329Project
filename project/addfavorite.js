$(document).ready(function() {
    $("#favoriteForm").submit(function(event) {
        event.preventDefault();
        console.log('in script');
        $.ajax({
            url: "addfavorite.php",
            type: "POST",
            data: $("#favoriteForm").serialize(),
            success: function(data) {
                console.log("in success: *" + data + "*");
                if ($.trim(data) == "added") {
                    console.log("in added");
                    document.getElementById('favorite_status').innerHTML = 'Location has been added to favorites';
                }
                else if ($.trim(data) == "dontAdd") {
                    document.getElementById('favorite_status').innerHTML = 'Location is already in favorites';

                }
                else if ($.trim(data) == "notLoggedIn") {
                    location.href = 'login.php';
                }
            }
        });
    });
}); 
