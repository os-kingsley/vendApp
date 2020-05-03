
 $("#verve").click(function(){

  var id =  $('.verify').val();
  $('.spinner-grow').show();

  $.post("https://api.ravepay.co/flwv3-pug/getpaidx/api/v2/verify",
  {
    SECKEY: "{{ SEC_KEY }}",
    txref: id
    
  },
  function(data){
    $('.spinner-grow').hide();

    if(statusCode = 200){ 

      if(data.data.meta[0].metavalue){

       if(data.data.meta[0].metavalue == "1"){


        $.alert({
          title: '<small><b style="font-family: arial; color:grey;">Payment Verification</b></small>',
          type: 'blue',
          typeAnimated: true,
          content: 
          "<small>Date: </small>" + data.data.created + "<br>" +
          "<b>Transaction Ref: </b>" + "<br>" + data.data.txref + "<br>" +

          "<b >Payment Status: </b>" + data.data.status + "<br>" + 
          "<b>Amount: </b>" + "₦" + data.data.amount + "<br>" +

          "<b>Protected Pay Status: </b>" +   "PENDING"


        });


      }

      else if(data.data.meta[0].metavalue == "SETTLED")
      {
       $.alert({
        title: '<small><b style="font-family: arial; color:grey;">Payment Verification</b></small>',
        type: 'blue',
        typeAnimated: true,
        content: 
        "<small>Date: </small>" + data.data.created + "<br>" +
        "<b>Transaction Ref: </b>" + "<br>" + data.data.txref + "<br>" +

        "<b >Payment Status: </b>" + data.data.status + "<br>" + 
        "<b>Amount: </b>" + "₦" + data.data.amount + "<br>" +

        "<b>Protected Pay Status: </b>" +   "SETTLED"


      });


     }



   } else if(data.data.meta.metaname == "directpayId")
   {

     $.alert({
      title: '<small><b style="font-family: arial; color:grey;">Payment Verification</b></small>',
      type: 'blue',
      typeAnimated: true,
      content: 
      "<small>Date: </small>" + data.data.created + "<br>" +
      "<b>Transaction Ref: </b>" + "<br>" + data.data.txref + "<br>" +

      "<b >Payment Status: </b>" + data.data.status + "<br>" + 
      "<b>Amount: </b>" + "₦" + data.data.amount 


    });


   } 

 }

 else if(data.data.code == "NO TX"){

   $.alert({
    title: '<small><b style="font-family: arial; color:red;">Error</b></small>',
    type: 'red',
    typeAnimated: true,
    content: 
    "<b><small>Something went wrong, please...</small></b>" + "<br>" +
    "<small>1. Make sure your code is correct</small>" + "<br>" +
    "<small>2. Try again later</small>" + " " + "or" + "<br>" +
    "<small>3. Contact Support."

  });


 }



});



});





