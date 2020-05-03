
  $("#set").click(function(){
     var settle =  $('.auth').val();
    $('.spinner-grow').show();
   
   
  $.post("https://api.ravepay.co/v2/gpx/transactions/escrow/settle",
  {
    id: settle,
    secret_key: "{{ SEC_KEY }}"

  },
 
  function(data){
   $('.spinner-grow').hide();

   if(data.code = 200 ){

    $.alert({
    title: '<small><b style="font-family: arial; color:grey;">Authorize Settlement</b></small>',
    type: 'blue',
    typeAnimated: true,
    content: 
   "<b>Payment Status: </b>" + data.status + "<br>" + 
   "<b>Protected Pay Status: </b>" + data.data
});
   } else 
   {

    $.alert({
    title: '<small><b style="font-family: arial; color:red;">Error</b></small>',
    type: 'red',
    typeAnimated: true,
   content: 
   "<b><small>Something went wrong, please...</small></b>" + "<br>" +
   "<small>1. Make sure your code is correct</small>" + "<br>" +
   "<small>2. Try again later</small>" + "<br>" + "or" +
   "<small>3. Contact Support."

});



   }
  
  });
});
  