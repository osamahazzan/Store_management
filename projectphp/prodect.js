        let price=document.getElementById('price');
let discount=document.getElementById('discount');
let ael=document.getElementById('ael');
let taxes=document.getElementById('taxes');
let priceend=document.getElementById('priceend');
let submit=document.getElementById('submit');
console.log(price,discount,ael,taxes,priceend);

        function getTotal()
        {

if(price.value !=''){
    let result=(+price.value+ +taxes.value+ +ael.value)- +discount.value;
    priceend.value=result;
    result.St
}
else{
    priceend.value='';
}
        }
