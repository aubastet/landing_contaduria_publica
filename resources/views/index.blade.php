<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/css/styles.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/fontawesome.min.css" />


    <title>Remington</title>
</head>

<body>
    <!-- HEADER -->
    <header>
        <div class="container flex-row">
            <div class="header__logo">
                <img src="assets/img/logo.png" alt="logo">
            </div>
        </div>
    </header>

    <section id="hero" class="container flex-row">
        <div class="hero__img">
            <img src="assets/img/banner_home.png">
        </div>
        <div class="hero__content">
            <div class="container_text_v">

                <div class="container_form">
                    <form class="form">
                        <h2 class="tittle_form">¡INSCRÍBETE AHORA!</h2>
                        <div class="mb-3">
                            <input type="Nombres" class="form-control" id="exampleFormControlInput1" placeholder="Nombres *">
                        </div>
                        <div class="mb-3">
                            <input type="apellidos" class="form-control" id="exampleFormControlInput1" placeholder="Apellidos *">
                        </div>
                        <div class="mb-3">
                            <input type="documento" class="form-control" id="exampleFormControlInput1" placeholder="Numero Documento Identidad">
                        </div>
                        <div class="mb-3">
                            <input type="celular" class="form-control" id="exampleFormControlInput1" placeholder="Celular">
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email">
                        </div>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Selecciona Ciudad</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select><br>

                        <select class="form-select" aria-label="Default select example">
                            <option selected>Selecciona Programa</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                He leído y acepto que mis datos serán tratados conforme al aviso de privacidad de la Corporación Universitaria Remington que puedes encontrar <b>aquí</b>
                            </label>
                        </div>
                        <button type="button" class="btn btn-primary btn-lg solicit">SOLICITAR MÁS INFORMACIÓN<img  class="icono_go"  src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAp0lEQVR4nO3YwQmDMBjF8e/SbtDuYEdpu4tHh9FtdAxdImfhLzmIh1IKhShP3m+B8CAv+ZIIMzMzM9sd8AxlwAw0oYpNB1xDOEA2APdQwqcJeIRwgCwB71DAd7NEufmtBS4lF9hDD9yUA2QjUCkHWMv9Ug6wlrt2gIMk5S00Kpe4//sYLa34RVbaWUeJpDzMTcrj9KD8oOlUn5QaZT3tt4qZmZlZHG8Bri/MvkeqMjIAAAAASUVORK5CYII="></button>
 
                    </form>
                </div>
    </section>

    <div class="franja_azul">
        <div class="logo_franja_azul">
            <img class="logo_franja_azul" src="assets/img/logos.png">
        </div>
    </div>
    <div class="preparate_uni">
        <div class="texto_intro">
            <div class="encabezado">
                <h2 class="title">Acerca de la carrera</h2>
            </div>
        </div> 
    </div>
    <!---2 columns tab---->
    <div class="accordion_container1">
        <div class="accordion_container2">
            <div class="accordion_content1">
                <div class="accordion_content2">
                    <!--------->
                    <div class="accordion" id="accordionPanelsStayOpenExample">
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                              Introducción
                            </button>
                          </h2>
                          <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                            <div class="accordion-body">
                              <p>
                                Con un alto sentido de responsabilidad social, humanistas, competentes e idóneos; con gran capacidad de análisis en la aplicación de la teoría y la práctica contable.
                              </p>
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item" style="border-top: 1px solid #d2d6da!important;">
                          <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                              Perfil Ocupacional
                            </button>
                          </h2>
                          <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                            <div class="accordion-body">
                                <p>
                                    Con un alto sentido de responsabilidad social, humanistas, competentes e idóneos; con gran capacidad de análisis en la aplicación de la teoría y la práctica contable.
                                  </p>
                            </div>
                          </div>
                        </div>
                        
                      </div>
                      
                </div>
                <div class="container_descarga_content_01">
                    <div class="container_descarga1">
                        <div class="container_descarga2">
                            <div  class="container_descarga_content">
                                <img class="icono_distancia" src="assets/img/distancia.png" alt="icono">
                                <div class="container_descarga_text">
                                    <div class="container_descarga_text2">
                                        <p class="m_font">Modalidad Distancia - <span  class="s_font">SNIES104911</span></p>
                                    </div>
                                    <div class="container_descarga_text3">
                                        <a class="a_brown" download href="#">Descargar programa</a>
                                    <img class="icono_d" src="assets/img/icon_download.png" alt="icono">
                                    </div>
                                </div>
                            </div> 
                        </div> 
                    </div>
                    <div class="container_descarga0">
                        <div class="container_descarga1">
                            <div class="container_descarga2">
                                <div  class="container_descarga_content">
                                    <img class="icono_distancia" src="assets/img/presencial.png" alt="icono">
                                    <div class="container_descarga_text">
                                        <div class="container_descarga_text2">
                                            <p class="m_font">Modalidad Presencial - <span  class="s_font">SNIES1329</span></p>
                                        </div>
                                        <div class="container_descarga_text3">
                                            <a class="a_brown" download href="#">Descargar programa</a>
                                        <img class="icono_d" src="assets/img/icon_download.png" alt="icono">
                                        </div>
                                    </div>
                                </div> 
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="preparate_uni"> 
        <div class="video_youtube">
            <iframe width="100%" height="400" src="https://www.youtube.com/embed/BnQl0iZLQUE?si=rrr3ld2bQIIKuHbR" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
    </div>
    <!---2 columns text modalidad---->
    <div class="container_modalidad">
        <div class="container_modalidad2">
            <div class="container_m_content">
                <div class="image-box">
                    <img class="image-box_style" src="assets/img/presencial.png" alt="Imagen 1">
                    <p class="caption"><span class="text__small">MODALIDAD</span><br><span class="text__big">PRESENCIAL</span></p>
                    <p class="captions">En la modalidad presencial de Uniremington dictamos clases en entornos altamente tecnológicos, facilitando la interacción directa entre estudiantes y profesores. Con un enfoque en el aprendizaje en comunidad, esta modalidad promueve el intercambio directo de ideas y una participación activa, ofreciendo una experiencia educativa integral.</p>
                </div>

                <div class="image-box">
                    <img class="image-box_style" src="assets/img/distancia.png" alt="Imagen 3">
                    <p class="caption"><span class="text__small">MODALIDAD</span><br> <span class="text__big">DISTANCIA</span></p>
                    <p class="captions">La educación a distancia de Uniremington <b>brinda flexibilidad de horarios y accesibilidad geográfica y económica,</b> respaldada por sedes a nivel nacional. Guiada por tutores, fomenta el trabajo en equipo y la aplicación práctica del conocimiento, permitiendo a los estudiantes ser arquitectos de su propio futuro con un impacto vital en su calidad de vida.</p>
                </div>
            </div>
            <div class="container_button_box">

                <button type="button" class="btn btn-primary btn-lg solicit custom">Contáctese con un asesor<img class="icono_go" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAp0lEQVR4nO3YwQmDMBjF8e/SbtDuYEdpu4tHh9FtdAxdImfhLzmIh1IKhShP3m+B8CAv+ZIIMzMzM9sd8AxlwAw0oYpNB1xDOEA2APdQwqcJeIRwgCwB71DAd7NEufmtBS4lF9hDD9yUA2QjUCkHWMv9Ug6wlrt2gIMk5S00Kpe4//sYLa34RVbaWUeJpDzMTcrj9KD8oOlUn5QaZT3tt4qZmZlZHG8Bri/MvkeqMjIAAAAASUVORK5CYII="></button>
            </div>
        </div>
    </div>
    </div>
    <footer>

        <div class="img-footer">
            <div class="icon-container">
                <div class="info_content">
                    <div class="img-footer"><img class="img_100" src="assets/img/mas-de-100-años.png" alt="mas de 100 años"></div>
                    <div class="icon">
                        <span><i class="fa-solid fa-phone"  >
                        </i> 
                            <a class="a_blue" href="tel:01 8000 410 203">01 8000 410 203</a></span><br>
                        <span><i class="fa-brands fa-whatsapp"></i> 
                            <a  class="a_blue" href="https://api.whatsapp.com/send?phone=573208701818&text=">320 870 1818</a></span>
                    </div>

                    <div class="image-container_footer">
                        <img class="img-footer" src="assets/img/expertos.png" alt="exitosos-en-modalidades-virtuales-presenciales-distancia">
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <!-- FONTAWESOME -->
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="assets/js/fontawesome.min.js"></script>
    <!-- FONTAWESOME -->

    <!-- AOS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- AOS -->

    <!-- SCRIPTS -->
    <script src="assets/js/script.js"></script>
    <!-- SCRIPTS -->
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script>
        AOS.init();
    </script>
    
</body>

</html>