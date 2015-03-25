$(document).ready(function(){
	if(location.pathname == '/home/account') {
		totalPrice();
	}
	
	$(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none"
    });
	
	$( ".search-product-1" ).keyup(function() {
		//$(".search-product-1-results").css('display', 'block');
		searchProduct( $(this).val() );
	});
	
	$( ".search-product-1" ).focusout(function() {
		$(".search-product-1-results").css('display', 'none');
	});
});

function searchProduct($val) {
	$.get( "/home/newsearch?limit=5&filter=" + $val, function( data ) {
		$(".search-product-1-results").css('display', 'none');
		alert(data);
		$(".search-product-1-results").empty();
		$(".search-product-1-results").css('display', 'block');
	});
}

function update(id, price) {
	var newPrice = price * $("#input" + id).val();
	newPrice = precise_round(newPrice, 2);
	$('#' + id).html("&#8364; " + newPrice);
	$('#' + id).data('price', newPrice);
	totalPrice();
}

function totalPrice() {
	var price = 0.0;
	$('.product-price').each(function() {
		price += parseFloat($(this).data('price'));
	});
	
	price = precise_round(price, 2);
	
	$('.total-price').html('<strong>Totaal: &#8364; ' + price + '</strong>');
}

function precise_round(num, decimals) {
	var t = Math.pow(10, decimals);   
	return (Math.round((num * t) + (decimals>0?1:0)*(Math.sign(num) * (10 / Math.pow(100, decimals)))) / t).toFixed(decimals);
}