<?php
function header_administracion()
{
    echo '<div class="containernav">
  <header>
  <nav
  class="navbar navbar-expand-lg navbar-collapse navbar-light bg-light"
  >
  <a class="navbar-brand" href="index.php"
  ><img src="img/idma.png" alt="Logo" style="height:35px;"
  /></a>
        <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
        >
        <!--Botón que aparece cuando se hace pequeña la pagina-->
        <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item">
        <a class="nav-link" href="index.php#cartelera"
        >Cartelera España</a
        >
        </li>
        
        <li class="nav-item">
        <a class="nav-link" href="index.php#estrenos"
        >Próximos estrenos</a
        >
        </li>
        
        <li class="nav-item">
        <a class="nav-link" href="contacto.php">Contacto</a>
        </li>
        
        <li class="nav-item">
        <form method="get" action="resultado_busqueda_admin.php">
        <div class="form-inline my-2 my-lg-0">
        <label for="search"></label>
        <input
        name="title"
        id="search"
        class="form-control mr-sm-2"
        type="search"
        placeholder="Buscar..."
        aria-label="Buscar"
        />
        </div>
        </form>
        </li>
        
        <li class="nav-item">
        <form class="form-inline my-2 my-lg-0" action="busqueda_avanzada.php">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
                Búsqueda avanzada
            </button>
        </form>
    </li>

        </ul>
        <ul class="navbar-nav mr-auto">
        <li class="nav-item">
        <div class="btn-group">
        <button
        type="button"
        class="btn btn-default dropdown-toggle"
        data-toggle="dropdown"
        style="margin-right:7px; color: black; background-color: rgba(240, 248, 255, 0.02);"
        >
        Mi cuenta <span class="caret"></span>
        </button>
        
        <ul class="dropdown-menu" role="menu">
        <li
        style="margin:10px;color: black; background-color: rgba(240, 248, 255, 0.02);"
        >
        <a class="drop" href="cuenta.php"
        >Ir a mi cuenta</a
        >
        </li>
        <li class="dropdown-divider"></li>
        <li
        style="margin:10px; color: black; background-color: rgba(240, 248, 255, 0.02);"
        >
        <a class="drop" href="modificar_usuario_admin.php"
        >Modificar tus datos</a
        >
                  </li>
                  <li
                  style="margin:10px; color: black; background-color: rgba(240, 248, 255, 0.02);"
                  >
                  <a class="drop" href="favoritos.php"
                  >Ver tus favoritos</a
                  >
                  </li>
                  <li
                  style="margin:10px; color: black; background-color: rgba(240, 248, 255, 0.02);"
                  >
                  <a class="drop" href="criticas_admin.php"
                  >Ver tus criticas</a
                  >
                  </li>
                  <li class="dropdown-divider"></li>
         
                  <li
                  style="margin:10px; color: black; background-color: rgba(240, 248, 255, 0.02);"
                  >
                  <a class="drop" href="administracion.php"
                  >Opciones de administrador</a
                  >
                  </li>
                  </ul>
                  </div>
                  </li>
                  
            <li class="nav-item">
            <form action="logout.php">
            <button name = "logout" type="submit" class="btn btn-danger">
            <span class="glyphicon glyphicon-log-out"></span> Cerrar
                    Sesión
                    </button>
                    </form>
            </li>
            </ul>
            </div>
            </nav>
            </header>
            </div>';
}

function header_log()
{
    echo '<div class="containernav">
            <header>
            <nav class="navbar navbar-expand-lg navbar-collapse navbar-light bg-light">
            <a class="navbar-brand" href="index.php"><img src="img/idma.png" alt="Logo" style="height:35px;" /></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <!--Botón que aparece cuando se hace pequeña la pagina-->
            <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item">
            <a class="nav-link" href="index.php">Cartelera España</a>
            </li>
            
            <li class="nav-item">
            <a class="nav-link" href="index.php">Próximos estrenos</a>
            </li>
            
                  <li class="nav-item">
                  <a class="nav-link" href="contacto.php">Contacto</a>
                  </li>
                  
                  <li class="nav-item">
                  <form method="get" action="resultado_busqueda_admin.php">
                  <div class="form-inline my-2 my-lg-0">
                  <label for="search"></label>
                  <input
                  name="title"
                  id="search"
                  class="form-control mr-sm-2"
                  type="search"
                  placeholder="Buscar..."
                  aria-label="Buscar"
                  />
                  </div>
                  </form>
                  </li>
                  
                  <li class="nav-item">
                  <form class="form-inline my-2 my-lg-0" action="busqueda_avanzada.php">
                      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
                          Búsqueda avanzada
                      </button>
                  </form>
              </li>
                        </ul>
                        
                        <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                        <div class="btn-group">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" style="margin-right:7px">
                        Mi cuenta <span class="caret"></span>
                        </button>
                        
                        <ul class="dropdown-menu" role="menu">
                        <li style="margin:10px">
                        <a class="drop" href="cuenta.php">Ir a mi cuenta</a>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li style="margin:10px">
                                  <a class="drop" href="modificar_usuario_admin.php">Modificar tus datos</a>
                                  </li>
                                  <li style="margin:10px">
                                  <a class="drop" href="favoritos.php">Ver tus favoritos</a>
                              </li>
                              <li style="margin:10px">
                              <a class="drop" href="criticas_admin.php">Ver tus criticas</a>
                              </li>
              
                              </ul>
                              </div>
                              </li>
                              
                  <li class="nav-item">
                  <form action="logout.php">
                  <button name = "logout" type="submit" class="btn btn-danger">
                  <span class="glyphicon glyphicon-log-out"></span> Cerrar
                          Sesión
                          </button>
                          </form>
                          </li>
                          </ul>
                          </div>
                          </nav>
                          </header>
                          </div>';
}

function header_visitor()
{
    echo '<div class="containernav">
    <header>
        <nav class="navbar navbar-expand-lg navbar-collapse navbar-light bg-light">
            <a class="navbar-brand" href="index.php"><img src="img/idma.png" alt="Logo" style="height:35px;" /></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <!--Botón que aparece cuando se hace pequeña la pagina-->
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#cartelera">Cartelera España</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="index.php#estrenos">Próximos estrenos</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="contacto.php">Contacto</a>
                    </li>

                    <li class="nav-item">
                    <form method="get" action="resultado_busqueda_admin.php">
                    <div class="form-inline my-2 my-lg-0">
                    <label for="search"></label>
                    <input
                    name="title"
                    id="search"
                    class="form-control mr-sm-2"
                    type="search"
                    placeholder="Buscar..."
                    aria-label="Buscar"
                    />
                    </div>
                    </form>
                    </li>

                    <li class="nav-item">
                        <form class="form-inline my-2 my-lg-0" action="busqueda_avanzada.php">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
                                Búsqueda avanzada
                            </button>
                        </form>
                    </li>
                </ul>
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a style="padding: 0.5rem 1rem" href="clientes.php">Iniciar sesión</a>
                    </li>

                    <li class="nav-item">
                        <a style="padding: 0.5rem 1rem" href="registro.php">Registrarse</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
</div>';
}
