$(document).ready(function(){

  $('#log-out').click(function(){
    $.get('./user/logout', function(data){
      $('#loginModal').modal('show');
    })
  });

  $.get('./user/status', function(data){
    var json = JSON.parse(data);
    if(!json.status){
      $('#loginModal').modal('show');
    }else{
      listVideos();
    }
  })

  $('#login').submit(function(evt){
    evt.preventDefault();

    var login = {
      user: $('#user').val(),
      pass: $('#pass').val()
    };

    $.post('./user/login', login,function(data){
      var json = JSON.parse(data);
      if(json.status){
        listVideos();
        $('#loginModal').modal('hide');
      }
      $('#login')[0].reset();
    });
  });

  function listVideos(){

    $.get('./video', function(data){
      var json = JSON.parse(data);

      $('.videos div').remove();

      for(var x in json){
        var div = document.createElement('div');
        var label = document.createElement('label');

        $(label).text(json[x].NAME_VIDEO);
        $(div).addClass('col-lg-3 col-md-3 col-xs-12 card-video');
        $(div).attr('video', x);
        $(div).append(label);

        var urlImg = 'https://tpc.googlesyndication.com/simgad/13612849781978325279'
        $(div).css({
          'background-image': 'url( ' + urlImg + ')'
        });
        $(div).click(function(x){

          $.post('./video/showRegister',{
            'video': json[$(this).attr('video')].URL_VIDEO
          }, function(data){
            console.log('registro de ver');
          });

          $('#videoModalLabel').text(json[$(this).attr('video')].NAME_VIDEO);
          $('#video-show').attr('src', json[$(this).attr('video')].URL_VIDEO);
          $('#videoModal').modal('show');
        });

        $('.videos').append(div);

        div = null;
      }
    });

    $('#videoModal').on('hidden.bs.modal', function () {
      console.log('dsd')
      $('#video-show').attr('src', '..');
    });
  }

});
