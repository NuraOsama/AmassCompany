(function ($) {


   //success message

   $(".btn-apply").click(function(){

    notif({
      msg: "<span><i><img src='./assests/images/success-icon.gif' class='img-responsive lazyload' data-src='./assests/images/success-icon.gif' alt='success img'/></i>Sucess</span>",
      type:"success",
      bgcolor: "#20C997",
      position:'center',
      width:250,
      multiline:true,
      timeout:3500,
    }); 
  })


  //error message

  //  $(".btn-apply").click(function(){
    
  //   notif({

  //      msg: "<span><i><img src='./assests/images/error-icon.gif' class='img-responsive lazyload' data-src='./assests/images/error-icon.gif' alt='error img'/></i>Error</span>",
  //      type:"error",
  //      bgcolor: "#dc3545",
  //      position:'center',
  //      width:250,
  //      multiline:true,
  //      timeout:3500,

  //   });

 // })
 
})(jQuery);
