var main = function() {
  $('.typelist li').click(function() {
    $('.typelist li').removeClass("active");
    $(this).addClass("active");

    // $('.techinfos').hide();

    $('.techlist ul').hide();
    $('.techlist .' + $(this).attr('id') + 'techs').show()
  });

  $('.techlist li').click(function() {
    $('.techlist li').removeClass("active");
    $(this).addClass("active");

    var techName = $(this).children('a').text();

    update(techName);
    // $.getJSON("api.php?name=" + techName, function (data) {
    //   $('.techinfos img').attr('src', 'icons/' + data.type + '.png');
    //   $('.techinfos h1').text(data.name);
    //   $('#learn_1').text(data.learn[0] + "%");
    //   $('#learn_2').text(data.learn[1] + "%");
    //   $('#learn_3').text(data.learn[2] + "%");
    //
    //   $('#learn_from_1').children('h4').text(data.learn_from[0].name);
    //   $('#learn_from_1').children('p').text(data.learn_from[0].location);
    //
    //   $('#learn_from_2').children('h4').text(data.learn_from[1].name);
    //   $('#learn_from_2').children('p').text(data.learn_from[1].location);
    //
    //   $('#learn_from_3').children('h4').text(data.learn_from[2].name);
    //   $('#learn_from_3').children('p').text(data.learn_from[2].location);
    //});

    $('.techinfos').show();
  });

  $('.techlist ul').hide();
  $('.techinfos').hide();

  update("Fire Tower");

  $('.techlist .firetechs').show();
  $('.techinfos').show();
}

var update = function(tech) {
  $.getJSON("api.php?name=" + tech, function (data) {
    $('.techinfos img').attr('src', 'icons/' + data.type + '.png');
    $('.techinfos h1').text(data.name);
    $('#learn_1').text(data.learn[0] + "%");
    $('#learn_2').text(data.learn[1] + "%");
    $('#learn_3').text(data.learn[2] + "%");

    $('#learn_from_1').children('h4').text(data.learn_from[0].name);
    $('#learn_from_1').children('p').text(data.learn_from[0].location);

    $('#learn_from_2').children('h4').text(data.learn_from[1].name);
    $('#learn_from_2').children('p').text(data.learn_from[1].location);

    $('#learn_from_3').children('h4').text(data.learn_from[2].name);
    $('#learn_from_3').children('p').text(data.learn_from[2].location);
  });
}

$(document).ready(main);
