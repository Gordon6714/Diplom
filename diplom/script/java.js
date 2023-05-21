$(function() {

    var url_string = window.location.href;
    var url = new URL(url_string);
    var id_seansa = url.searchParams.get("id_seansa");

    $(".place").click(function() {
        $(this).toggleClass("active");
    });
    $(".unbooked").attr("title", "Unbooked");
    $(".taken").attr("title", "Taken");



    $.ajax({
        type: "POST",
        url: "lost_place.php",
        data: { id_seansa: id_seansa },
        dataType: "json"
    }).done(function(result) {
        //console.log(result);
        var index;
        for (index = 0; index < result.length; ++index) {
            $("#" + result[index]).addClass('occupied');
        }

    });

});

$("#submit").click(function() {
    $(".place").each(function() {
        if ($(this).hasClass("active")) {
            $(this).addClass("taken");
            $(this).removeClass("unbooked");
            $(this).attr("title", "Taken");
            $(this).addClass("occupied");

            var idArray = [];
            $('.active').each(function() {
                idArray.push(this.id);
            });

            //console.log(idArray);

            var url_string = window.location.href;
            var url = new URL(url_string);
            var id_seansa = url.searchParams.get("id_seansa");

            $.ajax({
                type: "POST",
                url: "bron_place.php",
                data: { arrPlace: JSON.stringify(idArray), id_seansa: id_seansa },

            }).done(function(result) {
                console.log(result);
            });

        }
    });
});

const container = document.querySelector('.container')
const seats = document.querySelectorAll('.row .seat:not(.occupied)')
const count = document.getElementById('count')

container.addEventListener('click', function(e) {
    console.log(e.target)
    if (
        e.target.classList.contains('seat') &&
        !e.target.classList.contains('occupied')
    ) {
        console.log(e.target)
        e.target.classList.toggle('selected')
        updateSelectedCount()
    }
})

function updateSelectedCount() {
    const selectedSeats = document.querySelectorAll('.row .seat.selected')
    const selectedSeatsCount = selectedSeats.length
    count.innerText = selectedSeatsCount
}