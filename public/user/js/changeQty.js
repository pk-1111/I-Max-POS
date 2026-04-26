
let currentQty = 1;

function changeQty(value){

    currentQty = currentQty + value;

    if(currentQty<1){
        currentQty = 1;
    }

    document.getElementById('count').value = currentQty;
}
