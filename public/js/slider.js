 $('#owl-1').owlCarousel({
    loop:true,
    margin:0,
    autoplay:true,
    autoplayTimeout:15000,
    nav:false,
    dots:true,
    items:1,
    responsive:{
        0:{
            items:1
        },
        1200:{
            items:1
        }
    }
});


 $('#owl-2').owlCarousel({
    loop:false,
    margin:0,
    autoplay:true,
    autoplayTimeout:4000,
    nav:false,
    dots:true,
    items:1,
    responsive:{
        0:{
            items:1
        },
        1200:{
            items:1
        }
    }
});



 $('#owl-3').owlCarousel({
    loop:true,
    margin:0,
    autoplay:true,
    autoplayTimeout:4000,
    nav:false,
    dots:false,
    items:1,
    responsive:{
        0:{
            items:1
        },
        1200:{
            items:1
        }
    }
});



 $('#shop-slider').owlCarousel({
    loop: true,
    pagination: false,
    margin:30,
    navigation: true,
     items:4,
     nav:true,
      dots:true,
     responsive:{
        0:{
            items:1
        },
        768:{
            items:2
        },
        1024:{
            items:3
        },
        1025:{
            items:4
        }

    }
   
});
