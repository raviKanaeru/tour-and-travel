$(document).ready(function(){
    $('.sidenav').sidenav();
  });

$(document).ready(function(){
    $('.parallax').parallax();
  });

 $(document).ready(function(){
    $('.slider').slider( {indicators: false,
            height: 500,
            transitions: 600,
            interval: 2500});
  });

 $(document).ready(function(){
    $('.slider.detail').slider( {indicators: false,
            height: 300,
            transitions: 600,
            interval: 2500});
  });

 $(document).ready(function(){
    $('.materialboxed').materialbox();
  });

$(document).ready(function(){
 $('.dropdown-trigger').dropdown();
});

$(document).ready(function(){
    $('.tabs').tabs();
  });

 $(document).ready(function(){
    $('select').formSelect();
  });

 $(document).ready(function(){
    $('.datepicker').datepicker( {
      format: 'yyyy-mm-dd',
      minDate: new Date()
    });
  });
