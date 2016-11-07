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

  $(".icon-menu i").on('click', function(){
    $(".menu-mbs").toggle('fast');
  });
  
  $(".icon-menu-cat i").on('click', function(){
    $("body").addClass('show-menu');
    $(".menu-categories").addClass('open-menu');
    $(".showp").addClass('on');
  });
  
  $(".menu-categories h2 span.close-menu").on('click', function(){
    $("body").removeClass('show-menu');
    $(".menu-categories").removeClass('open-menu');
    $(".showp").removeClass('on');
  });
  
  $(".showp").on('click', function(){
    $(".menu-categories h2 span.close-menu").trigger('click');
  })
});
