var splide = new Splide( '.splide', {
    perPage: 3,
    focus  : 0,
    omitEnd: false,
    breakpoints:{
      1000:{
        perPage: 2,
        focus  : 0,
        omitEnd: false,
      },
      750:{
        perPage: 1,
        focus  : 0,
        omitEnd: false,
      },
    },
  } );
  
  splide.mount();

/*   var splide = new splide( '.splide', {
    type   : 'loop',
    perPage: 3,
    focus  : 'center',
  } );
  splide.mount(); */