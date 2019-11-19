export default {
  init() {
    // JavaScript to be fired on the services page
    $('.services-menu span').click(function () {
      let tab = $(this).data('tab');
      //Update buttons
      $('.services-menu span').removeClass('active');
      $(this).addClass('active');

      //Display the right tab
      $('.service').removeClass('active');
      $('#' + tab).addClass('active');
    });
  },
};
