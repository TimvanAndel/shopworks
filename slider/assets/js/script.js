var product_detail_path = "http://localhost/school/project/index.php?id=";

$(document).ready(function(){
    // Activate carousel
    $("#myCarousel").carousel();
    
    // Enable carousel control
    $(".carousel-control-prev").click(function(){
        $("#myCarousel").carousel('prev');
    });
    $(".carousel-control-next").click(function(){
        $("#myCarousel").carousel('next');
    });
    
    // Enable carousel indicators
    $(".slide-one").click(function(){
        $("#myCarousel").carousel(0);
    });
    $(".slide-two").click(function(){
        $("#myCarousel").carousel(1);
    });
    $(".slide-three").click(function(){
        $("#myCarousel").carousel(2);
    });
});

const showItem = () => {
    $.getJSON('http://localhost:8080/v1/shopworks/products', (data) => {
        console.log(data);
        for(e = 0; e <= data.length - 1; e++){

            for(i = 0; i <= data[e].products.length - 1; i++){

                // if(i == data[e].products.length){
                //     e =+ 1;
                //     i = 0;
                // }

                console.log(e, i, data[e].products.length);
                // console.log(data[e].products[i].id);
                
                
                
                // window.location.href="index.php?ar=" + data[0].products.length;

                // if(data[e].products[i].id == data[0].products[0].id){
                //     document.getElementById("product_name").innerHTML = data[0].products[0].name;
                //     // document.getElementById("product_category").innerHTML = data[0].products[0].categoryName;
                //     // document.getElementById("product_price").innerHTML = "&euro;" + data[0].products[0].price;
                //     // document.getElementById("product_image").src = data[0].products[0].imgUrl;
                //     // document.getElementById("product_description").innerHTML = data[0].products[0].description;

                // } else {
                    var product_div = document.createElement('div');
                    product_div.setAttribute("id", "product_name_" + e + "_" + i);
                    product_div.setAttribute("class", "carousel-item product_div");
                

                    var product_image = document.createElement('img');
                    product_image.setAttribute("id", "product_image_" + e + "_" + i);
                    product_image.setAttribute("class", "product_image");
                    product_image.src = data[e].products[i].imgUrl;

                    var product_qr = document.createElement('img');
                    product_qr.setAttribute("id", "product_qr_" + e + "_" + i);
                    product_qr.setAttribute("class", "product_qr");
                    product_qr.src = "https://api.qrserver.com/v1/create-qr-code/?data=" + product_detail_path + data[e].products[i].id;

                    var product_name = document.createElement('h1');
                    product_name.setAttribute('id', "product_name_" + e + "_" + i)
                    product_name.setAttribute("class", "product_name");
                    product_name.innerHTML = data[e].products[i].name;

                    var product_price = document.createElement('h2');
                    product_price.setAttribute('id', "product_price_" + e + "_" + i)
                    product_price.setAttribute("class", "product_price");
                    product_price.innerHTML = "&euro;" + data[e].products[i].price;

                    document.getElementsByClassName('carousel-inner')[0].appendChild(product_div).appendChild(product_qr);
                    document.getElementById("product_name_" + e + "_" + i).appendChild(product_name);
                    document.getElementById("product_name_" + e + "_" + i).appendChild(product_image);
                    document.getElementById("product_name_" + e + "_" + i).appendChild(product_price);
                    
                    // document.getElementById("product_image_" + e + "_" + i).appendChild(product_image);

                // }
                
                
            }
            
            
        }
    })
}
showItem();
