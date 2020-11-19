
const showItem = () => {
    $.getJSON('http://localhost:8080/v1/shopworks/products', (data) => {
        for(e = 0; e <= data.length - 1; e++){

            for(i = 0; i <= data[e].products.length - 1; i++){
           

            if(product_id == data[e].products[i].id){
                // document.getElementById("product_name_h1").innerHTML = data[e].products[i].name;
                // document.getElementById("product_category").innerHTML = data[e].products[i].categoryName;
                // document.getElementById("product_price").innerHTML = "&euro;" + data[e].products[i].price;
                document.getElementById("product_image").src = data[e].products[i].imgUrl;
                document.getElementById("product_name").innerHTML = data[e].products[i].name;
                document.getElementById("product_price").innerHTML = data[e].products[i].price;
                document.getElementById("product_price_form").value = data[e].products[i].price;
                // document.getElementById("product_description").innerHTML = data[e].products[i].description;

            }
            
        }
    }
    })
}
showItem();