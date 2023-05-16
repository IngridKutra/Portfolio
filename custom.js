jQuery(document).ready(function($) {
  $(".show-form").click(function() {
    $(".form").addClass("show");
    $(this).hide();
    $(".hide-form").show();
  });
  $(".hide-form").click(function() {
    $(".form").removeClass("show");
    $(this).hide();
    $(".show-form").show();
  });
});