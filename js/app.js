jQuery(document).ready(function($){

  if ($('body').hasClass('single-collection')){
    $('.activecatcher').children('li').children('a').first().addClass('active');
    $('.activecatcherfoot').children('li').children('a').first().addClass('active');
    $('.current_page_parent').children('a').removeClass('active');
  }

  //single post nav active catcher
  function activecatcherfoot(){
    $('footer').children('ul.activecatcherfoot').children("li.current_page_parent").children('a').addClass('active');
  }

  // lightbox gallery functionality to collection images.
  if ($('body').hasClass('single-collection')){
    $('.responsive-images').children('p').children('a').attr('data-lightbox', 'gallery');
  }

  $(window).scroll(function(){
    var scrollPoint = $(window).scrollTop();
    var fadePoint = 70;

    if (scrollPoint > fadePoint){
      $('.navcontainer').fadeOut(200);
      $('footer').fadeIn(200);
    } else {
      $('.navcontainer').fadeIn(200);
      $('footer').fadeOut(200);
    }
  });

  $('.post-image').children('a').hover(function(){
    $(this).children('img').animate({'opacity': '0.5'}, 200);
    $(this).closest('.post-image').children('.image-overlay').animate({'opacity': '1'}, 100);
  }, function(){
    $(this).children('img').animate({'opacity': '1'});
    $(this).closest('.post-image').children('.image-overlay').animate({'opacity': '0'}, 100);
  });

  $('.navbar ul li').children('a').hover(function(){
    $(this).addClass('preactive');
  }, function(){
    $(this).removeClass('preactive');
  });

  $('footer ul li').children('a').hover(function(){
    $(this).addClass('preactive');
  }, function(){
    $(this).removeClass('preactive');
  });

  $('.navbar ul li').children('a').click(function(){
    $('.navbar ul li a').removeClass('active');
    $(this).addClass('active');
  });

  $('.iactive').children('a').addClass('active');

});
