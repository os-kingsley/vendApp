import("https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js");
import("https://api.ravepay.co/flwv3-pug/getpaidx/api/flwpbf-inline.js");

  document.addEventListener("DOMContentLoaded", function(event) {
    document.getElementById('subm').addEventListener('click', function () {

    var flw_ref = "", chargeResponse = "", trxref = "FDKHGK"+ Math.random(), API_publicKey =  "{{ API_KEY }}", email = $('#test2').val(),  first_name = $('#test5').val(), last_name = $('#test6').val(), phone = $('#test3').val(),  id = $('#test4').val(),  amount = $('#test').val(), charge = 2.8/100 * $('#pay').val(), txref = "PROTECTEDPAY-"+ Date.now()+ ~~(Math.random().toString(36).slice(2) * 256)+ "-PP"; 
      
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
        custom_title: "Protected Pay",
        txref: txref,
        subaccounts: [
              {
                id: id, // This assumes you have setup your commission on the dashboard.
                transaction_charge_type: 'flat',
                transaction_charge: charge,
              }
            ],
        

        meta: [{metaname: "rave_escrow_tx", metavalue: 1 }],
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


