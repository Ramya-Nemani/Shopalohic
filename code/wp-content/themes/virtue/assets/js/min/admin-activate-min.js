!function($,t,a,n){"use strict";$(function(){$(".kt-install-toolkit-btn").on("click",function(t){function a(){$.ajax({url:i.data("install-url"),type:"GET",data:{},beforeSend:function(){e(i.data("installing-label"))},success:function(t){s(i.data("installed-label")),n()},error:function(t,a,n){l("Error")}})}function n(){$.ajax({url:i.data("activate-url"),type:"GET",data:{},beforeSend:function(){e(i.data("activating-label"))},success:function(t){l(i.data("activated-label")),location.replace(i.data("redirect-url"))},error:function(t,a,n){console.log(t.responseText),l("Error")}})}function e(t){i.addClass("updating-message").removeClass("button-disabled kt-not-installed installed").text(t)}function l(t){i.removeClass("updating-message kt-not-installed installed").addClass("button-disabled").text(t)}function s(t){i.removeClass("updating-message kt-not-installed").addClass("installed").text(t)}var i=$(t.target);t.preventDefault(),i.hasClass("updating-message")||i.hasClass("button-disabled")||("install"===i.data("action")?a():"activate"===i.data("action")&&n())})})}(jQuery,window,document);