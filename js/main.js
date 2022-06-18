
$(document).ready(function(){
  $('.slider').bxSlider({
      auto:true,
  });
  $('.owl-carousel').owlCarousel({
loop:true,
margin:10,
responsiveClass:true,
navText: ['<i class="fa fa-arrow-left" aria-hidden="true"></i>','<i class="fa fa-arrow-right" aria-hidden="true"></i>'],
responsive:{
    0:{
        items:1,
        nav:true
    },
    600:{
        items:3,
        nav:false
    },
    1000:{
        items:4,
        nav:true,
        loop:false
    },
    1300:{
        items:5,
        nav:true,
        loop:false
    }
}
})

//top sale owl carousel
$('#top-sale .owl-carousel').owlCarousel({
    loop:true,
    nav:true,
    dots:false,
    responsive:{
        0:{
            items:1,
         },
        600:{
            items:3,
          },
        1000:{
            items:4,
           },
     }
})

//isotop plugin
var $grid = $(".grid").isotope({
    itemSelector:'.grid-item',
    layoutMode:'fitRows'
});

//filter items on buttomn click
$(".button-group").on("click","button",function(){
    var filterValue = $(this).attr('data-filter');
    $grid.isotope({filter:filterValue});
    
})

// New phones section owl carousel
$('#new-phones .owl-carousel').owlCarousel({
    loop:true,
    nav:false,
    dots:false,
    responsive:{
        0:{
            items:1,
         },
        600:{
            items:3,
          },
        1000:{
            items:4,
           },
     }
})


// blog section owl carousel
$('#blog .owl-carousel').owlCarousel({
    loop:true,
    nav:false,
    dots:true,
    responsive:{
        0:{
            items:1,
         },
        600:{
            items:3,
          },
        1000:{
            items:4,
           },
     }
})

 // product qty section
 let $qty_up = $(".qty .qty-up");
 let $qty_down = $(".qty .qty-down");
//   let $input = $(".qty .qty_input");

  // click on qty up button
  $qty_up.click(function(e){
    let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
    if($input.val() >= 1 && $input.val() <= 9){
        $input.val(function(i, oldval){
            return ++oldval;
        });
    }
});

   // click on qty down button
   $qty_down.click(function(e){
    let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
    if($input.val() > 1 && $input.val() <= 10){
        $input.val(function(i, oldval){
            return --oldval;
        });
    }
});

$('.buy').click(function(){
    $('.bottom').addClass("clicked");
  });
  
  $('.remove').click(function(){
    $('.bottom').removeClass("clicked");
  });

});
