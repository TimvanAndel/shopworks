// $.getJSON(
//     'http://localhost:8080/v1/shopworks/products', function(data) { 
//         // for (i = 0; i < data.products.count; i++) {
//             data.forEach(function(data) { console.log(data.products); });
//         // }
//     }
// );


// const showItem = () => {
//     $.getJSON('http://localhost:8080/v1/shopworks/products', (data) => {
//         console.log(data[0].products.length)
//     })
// }
// showItem();


const showItem = () => {
    $.getJSON('http://localhost:8080/v1/shopworks/products', (data) => {
        for(e = 0; e <= data.length - 1; e++){

            for(i = 0; i <= data[e].products.length - 1; i++){
            console.log(data[e].products[i].id);


            if(product_id == data[e].products[i].id){
                document.getElementById("product_name_h1").innerHTML = data[e].products[i].name;
                document.getElementById("product_category").innerHTML = data[e].products[i].categoryName;
                document.getElementById("product_price").innerHTML = "&euro;" + data[e].products[i].price;
                document.getElementById("product_image").src = data[e].products[i].imgUrl;
                document.getElementById("product_description").innerHTML = data[e].products[i].description;

            }

        }
    }
    })
}
showItem();
