document.addEventListener("DOMContentLoaded", function(event) {
  let w100 = document.querySelector('#content .quote-block .quote-text .slide-wrapper').offsetWidth;

  let slides = document.querySelectorAll('#content .quote-block .quote-text .slide-wrapper .item-slide');
  let fullSlider = 0;
  for (let slide of slides) {
      fullSlider += w100;
    }
  document.querySelector('#content .quote-block .quote-text .slide-wrapper .slide-container').style.width = fullSlider + "px";
  document.querySelector('#content .quote-block .quote-text .slide-wrapper .slide-container').style.marginLeft = '0px';
  document.querySelector('#content .quote-block .quote-text .slide-wrapper .slide-container').setAttribute('data-id', 1)

});
window.addEventListener('resize', function(event) {
    let w100 = document.querySelector('#content .quote-block .quote-text .slide-wrapper').offsetWidth;

      let slides = document.querySelectorAll('#content .quote-block .quote-text .slide-wrapper .item-slide');
      let fullSlider = 0;
      for (let slide of slides) {
          fullSlider += w100;
        }
        let dataID = Number(document.querySelector('#content .quote-block .quote-text .slide-wrapper .slide-container').getAttribute('data-id'));

      document.querySelector('#content .quote-block .quote-text .slide-wrapper .slide-container').style.width = fullSlider + "px";
      document.querySelector('#content .quote-block .quote-text .slide-wrapper .slide-container').style.marginLeft = -((dataID - 1) * document.querySelector('#content .quote-block .quote-text .slide-wrapper').offsetWidth) + 'px';
}, true);

function moveRight() {
if(document.querySelector('#content .quote-block .quote-text .slide-wrapper .slide-container').getAttribute('data-id') > 0) {
let prev = document.querySelector('#content .quote-block .quote-text .prev');
let next = document.querySelector('#content .quote-block .quote-text .next');
if(!next.classList.contains('active')){
        next.classList.add('active');
    }
let dataID = Number(document.querySelector('#content .quote-block .quote-text .slide-wrapper .slide-container').getAttribute('data-id'));
document.querySelector('#content .quote-block .quote-text .slide-wrapper .slide-container').setAttribute('data-id',  dataID - 1);
document.querySelector('#content .quote-block .quote-text .slide-wrapper .slide-container').style.marginLeft = -((dataID - 2) * document.querySelector('#content .quote-block .quote-text .slide-wrapper').offsetWidth) + 'px';
if (document.querySelector('#content .quote-block .quote-text .slide-wrapper .slide-container').getAttribute('data-id') == 1) {
prev.classList.remove('active');
}

}
}
function moveLeft() {
if(document.querySelector('#content .quote-block .quote-text .slide-wrapper .slide-container').getAttribute('data-id') < document.querySelectorAll('#content .quote-block .quote-text .slide-wrapper .slide-container .item-slide').length) {
let prev = document.querySelector('#content .quote-block .quote-text .prev');
let next = document.querySelector('#content .quote-block .quote-text .next');
if(!prev.classList.contains('active')){
        prev.classList.add('active');
    }
    let dataID = Number(document.querySelector('#content .quote-block .quote-text .slide-wrapper .slide-container').getAttribute('data-id'));
document.querySelector('#content .quote-block .quote-text .slide-wrapper .slide-container').setAttribute('data-id',  dataID + 1);
document.querySelector('#content .quote-block .quote-text .slide-wrapper .slide-container').style.marginLeft = -((dataID) * document.querySelector('#content .quote-block .quote-text .slide-wrapper').offsetWidth) + 'px';
if (document.querySelector('#content .quote-block .quote-text .slide-wrapper .slide-container').getAttribute('data-id') == document.querySelectorAll('#content .quote-block .quote-text .slide-wrapper .slide-container .item-slide').length) {
next.classList.remove('active');
}

}
}
