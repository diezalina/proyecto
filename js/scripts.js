$(document).ready(function(){ //esto siempre al principio 
   $('.slider').bxSlider({
       mode:'fade',
       slideWidth: 700,
       captions: true,
       auto:true,
       autoControls: false,
       stopAutoOnClick: true,
       infiniteLoop: true
   });
});