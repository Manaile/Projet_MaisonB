
if(window.innerWidth > 1000){
    $('.reviews').slick({
        
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 50000000,
            dots: false,
            arrows:true,
        
    })
}else if( window.innerWidth > 800 && window.innerWidth < 999){
    $('.reviews').slick({
    
        slidesToShow: 2,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 50000000,
        dots: false,
        arrows:true,
      
  })
  }else if( window.innerWidth < 799){
    $('.reviews').slick({
    
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 50000000,
        dots: false,
        arrows:true,
      
  })
  };