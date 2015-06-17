// $(document).ready(function(){
//   $("#londons-handyman").click(function(){
//      $("#londons-handyman-details").show();
//   });
//   $("#close").click(function(){
//      $("#londons-handyman-details").hide();
//   });
// });

$(document).ready(function(){
	//Open
  $("#londons-handyman").click(function(){
     $('#londons-handyman-details').slideToggle( "fast", function() {});
  });
  $("#senior-moments").click(function(){
     $('#senior-moments-details').slideToggle( "fast", function() {});
  });
  $("#lovely-grubbly").click(function(){
     $('#lovely-grubbly-details').slideToggle( "fast", function() {});
  });
  $("#4-corner").click(function(){
     $('#4-corner-details').slideToggle( "fast", function() {});
  });
  $("#social-advisors").click(function(){
     $('#social-advisors-details').slideToggle( "fast", function() {});
  });
  $("#home-refurb").click(function(){
     $('#home-refurb-details').slideToggle( "fast", function() {});
  });

  //Close
  $("#londons-handyman-close").click(function(){
     $('#londons-handyman-details').slideToggle( "fast", function() {});
  });
  $("#senior-moments-close").click(function(){
     $('#senior-moments-details').slideToggle( "fast", function() {});
  });
  $("#lovely-grubbly-close").click(function(){
     $('#lovely-grubbly-details').slideToggle( "fast", function() {});
  });
  $("#4-corner-close").click(function(){
     $('#4-corner-details').slideToggle( "fast", function() {});
  });
  $("#social-advisors-close").click(function(){
     $('#social-advisors-details').slideToggle( "fast", function() {});
  });
  $("#home-refurb-close").click(function(){
     $('#home-refurb-details').slideToggle( "fast", function() {});
  });
});