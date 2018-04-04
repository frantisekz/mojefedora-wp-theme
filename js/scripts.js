function vertical_layout(fade) {
      if (typeof fade === "undefined" || fade === null) {
        fade = 1;
      }
     if (fade == 1) {
        jQuery('.content').css('height', jQuery('.posts').height());
        jQuery('.posts').fadeOut();
     }
     setTimeout(
       function()
       {
         jQuery('.post-container').css('position', 'inherit');
         jQuery('.post-container').css('left', 'auto');
         jQuery('.post-container').css('top', 'auto');
         jQuery('.post-container').css('width', '100%');
         jQuery('.featured-media').css('width', '50%');
         jQuery('.featured-media').css('float', 'left');
         jQuery('.post-header').css('width', '50%');
         jQuery('.post-header').css('float', 'right');
         jQuery('.post-excerpt').css('padding-left', '55%');
         jQuery('.post-meta').css('width', '50%');
         jQuery('.posts').css('height', 'auto');
         if (fade == 1) {
            jQuery('.posts').fadeIn();
         }
         jQuery('.content').css('height', 'auto');
       }, 500);

     // Make sure layout won't break down when resized
     jQuery(window).on('resize', function() {
      if (!eventFired) {
      	setTimeout(
      	  function()
      	  {
      		    vertical_layout(0);
      	  }, 500);
      	}
      });
     document.cookie="vertical_layout=1";
     return this;
}

function load_vertical_layout() {
  document.cookie="vertical_layout=1";
  location.reload();
}

function horizontal_layout() {
  document.cookie="vertical_layout=0";
  location.reload();
}

function getCookie(cname) {
  var name = cname + "=";
  var ca = document.cookie.split(';');
  for(var i=0; i<ca.length; i++) {
      var c = ca[i];
      while (c.charAt(0)==' ') c = c.substring(1);
      if (c.indexOf(name) == 0) return c.substring(name.length,c.length);
  }
  return "";
}

jQuery(document).ready(function() {
  if (getCookie("vertical_layout") == 1) {
    jQuery('head').append( jQuery('<link rel="stylesheet" type="text/css" />').attr('href', 'https://mojefedora.cz/wp-content/themes/mojefedoracz/css/vertical_layout.css') );
    jQuery('#vertical_switcher').css('background-color', '#d1d1d1');
    // Make sure layout won't break down when resized
    jQuery(window).on('resize', function() {
     if (!eventFired) {
       setTimeout(
         function()
         {
             vertical_layout(0);
         }, 500);
       }
     });
  }
  else {
    jQuery('#horizontal_switcher').css('background-color', '#d1d1d1');
  }

  jQuery('#horizontal_switcher').click(function() {
    horizontal_layout();
  });
  jQuery('#vertical_switcher').click(function() {
    load_vertical_layout();
  });

  jQuery('#enlrg').click(function() {
    if (jQuery(window).width() > 1920) {
      jQuery('.front-sidebar').animate({right: '15%'});
    }
    else {
      jQuery('.front-sidebar').animate({right: '27%'});
    }
    jQuery('.sidebar').animate({right: '0%'});
    jQuery('#enlrg').css('display', 'none');
    jQuery('#ensml').css('display', 'inherit');
  });

  jQuery('#ensml').click(function() {
    if (jQuery(window).width() < 2560) {
      jQuery('.front-sidebar').animate({right: '0%'});
      jQuery('.sidebar').animate({right: '-27%'});
      jQuery('#enlrg').css('display', 'inherit');
      jQuery('#ensml').css('display', 'none');
    }
  });

  if (getCookie("simulated") != "yes") {
    document.cookie="simulated=yes";
    jQuery("#enlrg").simulate("click");
    setTimeout(function(){jQuery("#ensml").simulate("click");}, 2500);
  }
});

var eventFired = 0;

jQuery(window).on('resize', function() {
if (!eventFired) {
  if (jQuery(window).width() > 2559) {
      if (jQuery('.arrow').css('display') != 'none') {
        jQuery("#enlrg").simulate("click");
        jQuery('.arrow').css('display', 'none');
      }
  }
  else if (jQuery('.arrow').css('display') != 'inherit') {
    jQuery("#ensml").simulate("click");
    jQuery('.arrow').css('display', 'inherit');
  }
  }
});
