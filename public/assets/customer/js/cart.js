const addToCartBtn = document.querySelectorAll(".add_cart");
let cartItems = []

for (let i = 0; 1 < addToCartBtn.length; i++) {

    addToCartBtn[i].addEventListener("click", function(event){
        if(typeof(Storage) !== "undefined"){
            itemPrice = event.target.parentElement.parentElement.parentElement.nextElementSibling.children[1].textContent
            let item = {
                id: i+1,
                name: event.target.parentElement.parentElement.parentElement.nextElementSibling.children[0].textContent,
                image: event.target.parentElement.parentElement.previousElementSibling.src,
                price: itemPrice.slice(4).trim()
            } 
    
            if(JSON.parse(localStorage.getItem("cartItems")) === null){
                cartItems.push(item)
                localStorage.setItem("cartItems", JSON.stringify(cartItems))
            }else{
                const localItems = JSON.parse(localStorage.getItem("cartItems"))
                localItems.map(data => {
                    if(item.name == data.name){
                        console.log("Item has already been added to the cart")
                    }else{
                        cartItems.push(item)
                    }
                })

                localStorage.setItem("cartItems", JSON.stringify(cartItems))
            }  
        }else{
            alert("Local Storage is not working in your browser")
        }

    });
        
}