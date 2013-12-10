// Start the carousel
$().ready(function(){
	$('.carousel').carousel({
	interval: 10000
	});

});

$(".alt-view a").click(function(e) {
    e.preventDefault();
    $(this).parent().siblings(".img-responsive").attr('src', $(this).attr('href'));
});

/* Height Calculator */
var calcHeight = function() {
    var tHeight = $("#top").val();
    var bHeight = $("#bottom").val();

    if (tHeight == "") tHeight = 66;

    if (isNaN(tHeight)) {
        window.alert("Please enter a valid top height for (b)");
    } else {
        var total = parseInt(tHeight) + parseInt(bHeight) + 4 + 2;
        var ftTotal = Math.floor(total / 12);
        var inTotal = total % 12;

        console.log("top: " + tHeight + "bottom: " + bHeight + "total: " + total);

        // Set result
        $('#calculator .result').html(
            "You will need more than <strong>" + total + "</strong> inches (<strong>" + ftTotal + "' " + inTotal + '</strong>")'
        );
    }
}