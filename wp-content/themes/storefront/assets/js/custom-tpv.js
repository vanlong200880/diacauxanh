jQuery(document).ready(function($) {
  $(".menu-top ul > li").on('click', function(){
    var id = $(this).attr('data-id');
    goToByScroll(id);
  });
  
  function goToByScroll(id){
      // Scroll
    $('html,body').animate({
        scrollTop: $("#"+id).offset().top - 100},
        'slow');
}
    
});