/* $(document).ajaxStart(function () {
  this.querySelector('#loading').classList.add('loading');
  this.querySelector('#loading-content').classList.add('loading-content');
});

$(document).ajaxStop(function () {
  this.querySelector('#loading').classList.remove('loading');
  this.querySelector('#loading-content').classList.remove('loading-content');
}); */

$(document).ready(function() {
  //Preloader
  preloaderFadeOutTime = 5000;
  function hidePreloader() {
  var preloader = $('.load');
  preloader.fadeOut(preloaderFadeOutTime);
  }
  hidePreloader();
  }); 