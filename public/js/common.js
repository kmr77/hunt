$(function () {
    $("#accordion dt").on("click", function () {
      $(this).next().slideToggle("fast");
      $(this).toggleClass("active");
    });
  });