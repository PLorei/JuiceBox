$(document).ready(function () {
  var search = $('#search-field');
  var searchToggle = $('.search-toggle');
  var siteNav = $('.site-nav');

  searchToggle.click(function () {
     if(search.hasClass("show-search")) {
         search.addClass("hide-search");
         search.removeClass("show-search");
         siteNav.css("padding-bottom", "0px");
     } else {
         search.addClass("show-search");
         search.removeClass("hide-search");
         siteNav.css("padding-bottom", "5px");        
     }
     return false;
  });

});
