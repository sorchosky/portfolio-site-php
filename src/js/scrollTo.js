$.fn.scrollView = function () {
  return this.each(function () {
    $('html, body').animate({
      scrollTop: $(this).offset().top
    }, 300);
  });
}

$('#continueButton').click(function (event) {
  event.preventDefault();
  $('#works').scrollView();
});