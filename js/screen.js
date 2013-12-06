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