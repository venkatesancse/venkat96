function doFirst()
{
	var button = document.getElementById("button");
	button.addEventListener("click",submit,false);
function submit()
				{
					var cusname =document.getElementById("cusname").value;
					var email =document.getElementById("email").value;
					var con =document.getElementById("con").value;
					sessionStorageetItem(cusname,email,con);
					display(cusname);
				}	
function dispaly(cusname)	
{
	var ans=window.prompt("Welcome!!! Your are a wonderfull Customer ..");
	var email=sessionStorage.getItem(cusname);
	var con=sessionStorage.getItem(cusname);
	
	alert.innerHTML=" "+cusname+"<br>"+email+" <br>" +con;
}
window.addEventListener("load",doFirst,false);

}
if(document.readyState=='loading')
{
	document.addEventListener('DOMContentLoaded',ready)
}
else
{
	ready()
}
function ready()
{
	var removeCartItemButons=document.getElementByClassName('btn-danger')
	for(var i=0;i<removeCartItemButtons.length;i++)
	{
		var button=removeCartItemButtons[i]
		button.addEventListener('click',removeCartItem)
	}
	var quantityInputs =document.getElementByClassName('cart-quantity-īnput')
	for(var i=0;i<quantityInputs.length;i++)
	{
		var input=quantityInputs[i]
		input.addEventListener('change',quantityChanged)
	}
	var addToCartButtons=document.getElementByClassName('shop-item-button')
	for(var i=0;i<addToCartButtons.length;i++)
	{
		var button =addToCartButtons[i]
		button.addEventListener('click',addToCartClicked)
	}
}
function removeCartItem(event)
{
	var buttonClicked=event.target
	buttonClicked.parentElement.parentElementemove()
	updateCartTotal()
}	
	function quantityChanged(event)
	{
		var input=event.target
		if(isNaN(input.value)||input.value<=0)
		{
			input.value=1
		}
		updateCartTotal()
	}
function purchaseClicked() 
{
    alert('Thank you for your purchase')
    var cartItems = document.getElementsByClassName('cart-items')[0]
    while (cartItems.hasChildNodes()) 
    {
        cartItems.removeChild(cartItems.firstChild)
    }
    updateCartTotal()
}

function addToCartClicked(event)
{
	var button=event.target
	var shopItem=button.parentElement.parentElement
	var title=shopItem.getElementsByClassName('shop-item-title')[0].innerText
	var price=shopItem.getElementsByClassName('shop-item-price')[0].innerText
	var imagesrc=shopItem.getElementsByClassName('shop-item-image')[0].src
	addItemToCart(title,price,imagesrc)
	updateCartTotal();
}
function addItemToCart(title,price,imagesrc)
{
	var cartRow=document.createElement('div')
	cartRow.classList.add('cart-row')
	var cartItems=document.getElementByclassName('cartītems')[0]
	var cartItemNames=cartItems.getElementByClassName('cartītem-title')
	for(var i=0;i<cartItemNames.length;i++)
			{
				if(cartItemNmaes[i].innerText==title)
				{
					alert('this item is already added')
					return
				}
			}
	
	var cartRowContents =
			<div class="col-md-4 cart-item cart-column">
					<img class="cart-item-image" src="${imagesrc}" width="100" height="100"></img>
					<span class="cart-ītem-title">${title}</span>
				</div>
				<div class="col-md-4">
				<span class="cart-price cart-column">$ {price}</span>
				</div>
				<div class="cart-quantity col-md-4 cart-column">
						<input type="number" class="cart-quantity-input" value="1">
						<button class="btn btn-danger btn-lg" type="button" >Remove</button>
				</div>
	 cartRow.innerHtml=cartRowContents
	 cartItems.append(cartRow)
	 cartRow.getElementByClassName('btn-danger')[0].addEventListener('click',removeCartItem)
	 cartRow.getElementByClassName('cart-quantity-input')[0].addEventListener('change',quantityChanged)
 }
function updateCartTotal()
{
	var cartItemContainer=document.getElementByClassName('cart-ītems')[0]
	var cartRows=cartItemContainer.getElementByClassName('cart-row')
	var total=0
	for(var i=0;i<cartRows.length;i++)
	{
		var cartRow=cartRows[i]
		var priceElement=cartRow.getElementByClassName('cart-price')[0]
		var quantityElement=cartRow.getElementByClassName('cart-quantity-input')
		[0]
		var price=parseFloat(priceElement,innerText.replace('$',''))
		var quantity=quantityElement.value
		total=toatl+(price*quantity)
	}
	document.getElementByClassName('cart-total-price')[0].innerText='$'+total
}		

