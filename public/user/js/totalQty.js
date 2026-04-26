



function increase(btn) {
    let input = btn.parentElement.querySelector('.qty');
    input.value = parseInt(input.value) + 1 ;
}

function decrease(btn) {
    let input = btn.parentElement.querySelector('.qty');
    if(parseInt(input.value) > 1){
        input.value = parseInt(input.value) - 1 ;
    }

}


$(document).ready(function(){
    //plus btn click

    $('.btn-plus').click(function () {
        $parentNode = $(this).parents("tr");

        $price = $parentNode.find(".price").text().replace("MMK","")
        $qty  = $parentNode.find(".qty").val();

        $totalAmt = $price * $qty;

        $parentNode.find(".total").text($totalAmt + "MMK")
         finalCalculation();

        // console.log($price,$qty);
    })



    //minus btn click

    $('.btn-minus').click(function () {
       $parentNode = $(this).parents("tr");

        $price = $parentNode.find(".price").text().replace("MMK","")
        $qty  = $parentNode.find(".qty").val();

        $totalAmt = $price * $qty;

        $parentNode.find(".total").text($totalAmt + "MMK")
        finalCalculation();

        // console.log($price,$qty);

    })

    function finalCalculation() {
        $total = 0 ;

        $('#productTable tbody tr').each(function(index,item){
            // console.log(jQuery.type($(item).find('.total').text().replace("MMK","") * 1));
           $total += Number($(item).find('.total').text().replace("MMK",""))

        })

        $('#subTotal').html(` ${$total} MMk `)
        $('#finalTotal').html(` ${$total - 50000} MMk `)
    }

    // delete cart start

    $(".btn-remove").click(function(){

        $parentNode = $(this).parents("tr");
        $cartId = $parentNode.find('.cartId').val();

        $data = {
            'cartId' : $cartId
        }

         $.ajax({
        type : 'get' ,
        url : '/user/cart/delete' ,
        data :  $data ,
        dataType : 'json' ,
        success : function(response){
            if(response.status == 'success'){
                $parentNode.fadeOut(300,function(){
                    $(this).remove();
                })
            }

        }
    })

    })

    // delete cart end

    // btn checkout

     $('#btn-checkout').click(function(){
        $orderList = [] ;
        $userId = $("#userId").val();
        $orderCode = "iMax-POS" + Math.floor(Math.random() * 1000000000);
       $totalAmount = $('#finalTotal').text().replace(/[^\d.-]/g, '') * 1;

         $('#productTable tbody tr').each(function(index,row){

           $productId = $(row).find(".productId").val();

           $qty = $(row).find(".qty").val();



           $orderList.push({
            'user_id' : $userId ,
            'product_id' : $productId ,
            'qty' : $qty ,
            'capacity' : $(row).find('.capacity-btn').text(),
            'color' : $(row).find('.color-btn').text(),
            'order_code' : $orderCode ,
            'total_amount'  : $totalAmount
           })
     })

    //  console.log($orderList);

    $.ajax({
        type : 'get' ,
        url  : '/user/cart/temp' ,
        data : Object.assign({},$orderList) ,
        dataType : 'json' ,
        success : function(response){
            if( response.status == 'success')
           location.href = "/user/payment"
        }
    })

    });

    // end






})
