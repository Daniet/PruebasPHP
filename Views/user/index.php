<div class="pos-f-t">
  <div class="collapse" id="navbarToggleExternalContent">
    <div class="bg-dark p-4">
      <h5 class="text-white h4">
        Prueba de PHP
      </h5>
      <span class="text-muted">
        <a id="log-out" data-target="#navbarToggleExternalContent" data-toggle="collapse">
          Cerrar sesion
        </a>
      </span>
    </div>
  </div>
  <nav class="navbar navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </nav>
</div>
<div class="container">
  <div class="row videos">
  </div>
</div>
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">
          Iniciar sesion
        </h5>
      </div>
      <div class="modal-body">
        <form id="login">
          <div class="form-group">
            <label for="name_user">
              Usuario
            </label>
            <input type="text" class="form-control" id="user" aria-describedby="emailHelp">
            <small id="emailHelp" class="form-text text-muted">Nombre del usuario.</small>
          </div>
          <div class="form-group">
            <label for="pass">
              Contraseña
            </label>
            <input type="password" class="form-control" id="pass">
          </div>
          <button type="submit" class="btn btn-primary">
            Iniciar sesion
          </button>
        </form>
      </div>
    </div>
  </div>
</div>
<div class="modal fade bd-example-modal-lg" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="videoModalLabel">
          Iniciar sesion
        </h5>
      </div>
      <div class="modal-body video-body">
        <!-- <iframe id="video-show" class="col-sm-12" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe> -->
        <iframe id="video-show" class="col-sm-12" frameborder="0" allowFullScreen mozallowfullscreen webkitAllowFullScreen></iframe>
      </div>
    </div>
  </div>
</div>
