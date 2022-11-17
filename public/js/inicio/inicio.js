let loadMoreBtn = document.querySelector('#load-more');
let currentItem = 2;

loadMoreBtn.onclick = () => {
    let boxes = [...document.querySelectorAll('.group_equipa2 .box-container .box')];
    for (var i = currentItem; i < currentItem + 2; i++) {
        boxes[i].style.display = 'inline-block';
    }
    currentItem += 2;

    if (currentItem >= boxes.length) {
        loadMoreBtn.style.display = 'none';
    }
}

var splide = new Splide( '#splide1', {
    type   : 'loop',
    perPage: 3,
    focus  : 'center',
    omitEnd: false,
    breakpoints: {
        800: {
            perPage: 1,
            focus  : 'center',
            gap    : '.7rem',
            omitEnd: false,
          },
          450: {
            perPage: 1,
            focus  : 'center',
            gap    : '.7rem',
            omitEnd: false,
          },
      },
  } );
  
  new Splide( '#splide1' ).mount();
