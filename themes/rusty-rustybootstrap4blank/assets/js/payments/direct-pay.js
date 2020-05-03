import("https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js");
import("https://api.ravepay.co/flwv3-pug/getpaidx/api/flwpbf-inline.js");

  document.addEventListener("DOMContentLoaded", function(event) {
    document.getElementById('submi').addEventListener('click', function () {
    

     

    var flw_ref = "", chargeResponse = "", trxref = "FDKHGK"+ Math.random(), API_publicKey =  "{{ API_KEY }}", email = $('#pay2').val(), first_name = $('#pay5').val(), last_name = $('#pay6').val(), phone = $('#pay3').val(),  id = $('#pay4').val(),  amount = $('#pay').val(), txref = "DIRECTPAY-"+ Date.now()+ ~~(Math.random().toString(36).slice(2) * 256)+ "-DP"; 

 if ($('#pay').val() <= 1500) {
  var charge = 1.5/100 * $('#pay').val();

}else{
  var charge = 1.5 / 100 * $('#pay').val() + 100;
}

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
        subaccounts: [
              {
                id: id, // This assumes you have setup your commission on the dashboard.
                transaction_charge_type: 'flat',
                transaction_charge: charge,
                
              }
            ],
        

        meta: [{metaname:"directpayID", metavalue: "DP1234"}],
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

