{include file="header.tpl"}


<div class="container-fluid">
        <div class="row">
            <!-- Menu Lateral -->
            <div class="container-fluid">
                <div class="row flex-nowrap">
                    <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
                        <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                            <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                                <span class="fs-5 d-none d-sm-inline">LOGO</span>
                            </a>
                            <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                                <li class="nav-item">
                                    <a href="#" class="nav-link align-middle px-0">
                                        <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Localización</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-0 align-middle">
                                        <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Características</span> </a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-0 align-middle">
                                        <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Instalaciones</span> </a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-0 align-middle">
                                        <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Servicios</span> </a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-0 align-middle">
                                        <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Información</span> </a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-0 align-middle">
                                        <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Proyectos de escuela</span> </a>
                                </li>
                            </ul>
                            <hr>
                            <div class="dropdown pb-4">
                                <!-- Formulario para login de usuario -->
                                <form>
                                    <div class="input-group mb-3">
                                        <div class="btn-group" role="group">
                                            <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                              Seleccione Usuario
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                <li><a class="dropdown-item" href="#">Alumno</a></li>
                                                <li><a class="dropdown-item" href="#">Profesor</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Usuario</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Clave</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Ingresar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col py-3">
                        Contenido de la página
                    </div>
                </div>
            </div>
        </div>


    </div>



{include file="footer.tpl"}

