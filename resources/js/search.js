$(document).ready(function() {
    $('#search').keyup(function() {
        $.ajax({
            type: "POST",
            url: "/search",
            data: {
                'search_text' : $(this).val(),
            },
            success: function (data) {
                console.log(data);
                $('#persons-data').html(data);
            }
        });
    });
});