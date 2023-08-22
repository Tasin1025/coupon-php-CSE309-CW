<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Coupon PHP</title>
</head>
<body>
    <section class="flex flex-col justify-center items-center ">
        <h1 class="text-4xl mt-10"> Enter amount </h1>
        <input id="total_price" class="px-8 py-4 w-1/3 text-center border-solid border-2 border-black-800 rounded-lg mt-7 " type="text" name="" id="" placeholder="Total Price">
        <h1 class="text-4xl mt-7"> Coupon </h1>
        <input id="coupon_code" class="px-8 py-4 w-1/3 text-center border-solid border-2 border-black-800 rounded-lg mt-7" type="text" name="coupon_code" placeholder="Apply Promocode">
        <br>
        <input id="apply" class="px-8 py-4 w-1/4 bg-indigo-500 hover:bg-indigo-300 rounded-lg m-7 text-white font-bold" type="button" value="Apply">
        <h3 id="message" class="text-2xl font-bold text-green-500"></h3>
    </section>
<script>
    $("#apply").click(function(){
        if($("#promo_code").val()!=""){
            $.ajax({
                type: "POST",
                url: "process.php",
                data: {
                    coupon_code: $("#coupon_code").val()
                },
                success: function(dataResult){
                    var dataResult = JSON.parse(dataResult);
                    if (dataResult.statusCode == 200){
                        var after_apply =$("#total_price").val()-dataResult.value;
                        $("#total_price").val(after_apply);
                        $("#message").html("Promocode applied successfully");
                    } else if (dataResult.statusCode == 201 ){
                        $("#message").html("Invalid Promocode !");
                    }
                }
            });
        } else {
            $("#message").htnl("Promocode cannot be blank")
        }
    });
</script>
</body>
</html>