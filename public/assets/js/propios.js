(function($) {
    var wa_time_out, wa_time_in;
    $(document).ready(function() {
      $(".wa__btn_popup").on("click", function() {
        if ($(".wa__popup_chat_box").hasClass("wa__active")) {
          $(".wa__popup_chat_box").removeClass("wa__active");
          $(".wa__btn_popup").removeClass("wa__active");
          clearTimeout(wa_time_in);
          if ($(".wa__popup_chat_box").hasClass("wa__lauch")) {
            wa_time_out = setTimeout(function() {
              $(".wa__popup_chat_box").removeClass("wa__pending");
              $(".wa__popup_chat_box").removeClass("wa__lauch");
            }, 400);
          }
        } else {
          $(".wa__popup_chat_box").addClass("wa__pending");
          $(".wa__popup_chat_box").addClass("wa__active");
          $(".wa__btn_popup").addClass("wa__active");
          clearTimeout(wa_time_out);
          if (!$(".wa__popup_chat_box").hasClass("wa__lauch")) {
            wa_time_in = setTimeout(function() {
              $(".wa__popup_chat_box").addClass("wa__lauch");
            }, 100);
          }
        }
      });
  
      function setCookie(cname, cvalue, exdays) {
        var d = new Date();
        d.setTime(d.getTime() + exdays * 24 * 60 * 60 * 1000);
        var expires = "expires=" + d.toUTCString();
        document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
      }
  
      function getCookie(cname) {
        var name = cname + "=";
        var ca = document.cookie.split(";");
        for (var i = 0; i < ca.length; i++) {
          var c = ca[i];
          while (c.charAt(0) == " ") {
            c = c.substring(1);
          }
          if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
          }
        }
        return "";
      }
  
      $("#nta-wa-gdpr").change(function() {
        if (this.checked) {
          setCookie("nta-wa-gdpr", "accept", 30);
          if (getCookie("nta-wa-gdpr") != "") {
            $('.nta-wa-gdpr').hide(500);
            $('.wa__popup_content_item').each(function(){
              $(this).removeClass('pointer-disable');
              $('.wa__popup_content_list').off('click');
            })
          }
        }
      });
  
      if (getCookie("nta-wa-gdpr") != "") {
        $('.wa__popup_content_list').off('click');
      } else{
        $('.wa__popup_content_list').click(function(){
          $('.nta-wa-gdpr').delay(500).css({"background" : "red", "color" : "#fff"});
        });
      }
    });
  })(jQuery);


  // INPUT FILE

  'use strict';

;( function ( document, window, index )
{
	var inputs = document.querySelectorAll( '.inputfile' );
	Array.prototype.forEach.call( inputs, function( input )
	{
		var label	 = input.nextElementSibling,
			labelVal = label.innerHTML;

		input.addEventListener( 'change', function( e )
		{
			var fileName = '';
			if( this.files && this.files.length > 1 )
				fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
			else
				fileName = e.target.value.split( '\\' ).pop();

			if( fileName )
				label.querySelector( 'span' ).innerHTML = fileName;
			else
				label.innerHTML = labelVal;
		});
	});
}( document, window, 0 ));

// FIN INPUT FILE

// PROYECTOS
// for storing mouse x / y position
var mousePos = {
  x: -10,
  y: -10
};

// select the .box DOM elements
var boxElements = document.getElementsByClassName('box');

// create an array of objects to store the box elements and their image
// positions
var boxes = [];
for (var i = 0; i < boxElements.length; i++) {
  boxes.push({
    el: boxElements[i],
    targetX: 0,
    targetY: 0,
    prevX: 0,
    prevY: 0,
    x: 0,
    y: 0,
    left: boxElements[i].offsetLeft,
    top: boxElements[i].offsetTop,
    size: boxElements[i].offsetWidth
  })
}

function mousemove(e) {
  // update mouse position
  mousePos.x = e.pageX;
  mousePos.y = e.pageY;
}

function updateBox(box) {
  // check if mouse is in box area
  if (mousePos.x > box.left && mousePos.x < (box.left+box.size) &&
    mousePos.y > box.top && mousePos.y < (box.top+box.size)) {
    // the mouse is in the space over the box - update the box image target position dependent on how far the mouse position is from the center of the box (box size/2)
    box.targetX = (box.size/2 - (mousePos.x - box.left)) * 0.1;
    box.targetY = (box.size/2 - (mousePos.y - box.top)) * 0.1;
  } else {
    // otherwise the box isn't being hovered, its target is 0
    box.targetX = 0;
    box.targetY = 0;
  }
  
  // update the image element position by lerping position to target
  // https://codepen.io/rachsmith/post/animation-tip-lerp
  box.x += (box.targetX - box.x)*0.2;
  box.y += (box.targetY - box.y)*0.2;
  
  // check that the values aren't really small already, to overcome javascripts poor handling of high precision math
  if(Math.abs(box.x) < .001) box.x = 0;
  if(Math.abs(box.y) < .001) box.y = 0;
  
  // only update CSS if the position has changed since last loop
  if (box.prevX !== box.x && box.prevY !== box.y) {
    // update css of image element
    box.el.children[0].children[0].style.transform = 'translate3d('+box.x+'px, '+box.y+'px, 0)';
  }
  
  // update prev values for next comparison
  box.prevX = box.x;
  box.prevY = box.y;
}

function loop() {
  // in the loop - updated each of the boxes
  for (var i = 0, l = boxes.length; i < l; i++) {
    updateBox(boxes[i]);
  }
  requestAnimationFrame(loop);  
}

function resize() {
  // the box positions/sizes have updated on resize, so they need to be
  // reset
  for (var i = 0; i < boxes.length; i++) {
    boxes[i].left = boxes[i].el.offsetLeft;
    boxes[i].top = boxes[i].el.offsetTop;
    boxes[i].size = boxes[i].el.offsetWidth;
  }
}

// attach the mouse event listener to the document
document.addEventListener('mousemove', mousemove);
// listen for resize event, so box sizes can be updated
window.addEventListener('resize', resize);
// run the animation loop
loop();


// FIN PROYECTOS