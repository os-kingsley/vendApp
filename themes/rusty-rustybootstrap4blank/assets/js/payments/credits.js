import("https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js");
import("https://api.ravepay.co/flwv3-pug/getpaidx/api/flwpbf-inline.js");

  document.addEventListener("DOMContentLoaded", function(event) {
    document.getElementById('submi').addEventListener('click', function () {

    var flw_ref = "", 
      chargeResponse = "",
      trxref = "FDKHGK"+ Math.random(),
      API_publicKey =  "{{API_KEY}}", 
      email = $('#pay2').val(), 
      first_name = $('#pay5').val(), 
      last_name = $('#pay6').val(), 
      amount = $('#pay40').val(),
      phone = $('#pay3').val(),  
      id = $('#pay4').val(),  
      txref = "VENDCREDIT-"+ Date.now()+ ~~(Math.random().toString(36).slice(2) * 256)+ "-VC";



     
    getpaidSetup(
      {
        PBFPubKey: API_publicKey,
        customer_email: email,
        amount: amount,
        customer_phone: phone,
        customer_firstname: first_name,
        customer_lastname: last_name,
        currency: "NGN",
        payment_method: "both",
        txref: txref,
        payment_options: "card,account",
      
        

        meta: [{metaname:"vendCredits", metavalue: "BUY1234"}],
        onclose:function(response) {
        },
        callback:function(response) {
          txref = response.tx.txRef, chargeResponse = response.tx.chargeResponseCode;
          if (chargeResponse == "00" || chargeResponse == "0") {
            //Add your success page here
          } else {
             //Add your failure page here
          }
        }
      }
    );
    });
  });





