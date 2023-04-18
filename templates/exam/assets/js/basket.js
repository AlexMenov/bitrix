if(window.innerWidth <= 480)
	window.onload = function(){
	var list = document.getElementsByClassName("basket_product_amount");
	for (var i = 0; i < list.length; i++) {
	    	var b1 = document.getElementsByClassName("basket_product_amount")[i];
	    	var b2 = document.getElementsByClassName("basket_product_price")[i];
	    	b1.parentNode.insertBefore(b2, b1);
	    }
}