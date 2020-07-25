 $(function() {

     $("[data-trigger]").on("click", function(e) {
         e.preventDefault();
         e.stopPropagation();
         var offcanvas_id = $(this).attr('data-trigger');
         $(offcanvas_id).toggleClass("show");
         $('body').toggleClass("offcanvas-active");
         $(".screen-overlay").toggleClass("show");
     });

     $(".btn-close, .screen-overlay").click(function(e) {
         $(".screen-overlay").removeClass("show");
         $(".offcanvas").removeClass("show");
         $("body").removeClass("offcanvas-active");
     });

     $('#binvite').click(function() {
         window.location.href = 'https://discord.com/oauth2/authorize?client_id=689135782320931022&scope=bot&permissions=8';
     })

     $("#myInput").on("keyup", function() {
         var value = $(this).val().toLowerCase();
         $("#myTable tr").filter(function() {
             $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
         });
     });

 });