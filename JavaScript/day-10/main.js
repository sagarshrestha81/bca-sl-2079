// const a=20;

// console.log("im first");
// try{
//     a=30;
//     console.log("second");
// }catch(err){
//     console.log("error is ="+ err)
// }finally{
//     console.log("finally");
// }


// console.log("third");


// console.log("fourth");


// console.log("fifth");




function withdraw() {
    document.getElementById("bill").innerHTML=""
    document.getElementById("thankyou").innerHTML=""
    totalBalance = 10000;
    amount = document.getElementById("amount").value;

balanceNow=totalBalance-amount;

try{
    if(amount+500 > totalBalance){
        throw "Insufficient balance";
    }

document.getElementById("bill").innerHTML=
`<p>Previous Balance ${totalBalance}</p>
<p>Withdraw Balance ${amount}</p>
<p>Balance Now ${balanceNow}</p>`;



}catch( err){

    console.log(err)
}finally{
    document.getElementById("thankyou").innerHTML="<p>thank you for choosing us</p>"
}
}


