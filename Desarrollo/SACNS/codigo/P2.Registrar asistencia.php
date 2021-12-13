<!DOCTYPE html>

<html lang="es">

    <head>
        <meta charset="UTF-8">
        <title>Registrar Asistencia</title>
        <link rel="shortcut icon" href="..\Imagenes\logo.png" type="image/x-icon">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="../codigo/Modulo_Docente_Frontend/3.Asistencia/P2.Registrar asistencia.css" rel="stylesheet">
        <link rel="stylesheet" href="https://unpkg.com/multiple-select@1.5.2/dist/multiple-select.min.css">
        <link rel="stylesheet" href="../codigo/Modulo_Docente_Frontend/0. SideBar/sidebar.css">
    </head>


    <hr>
    
<body>  

    <div class="sidebar">
        <div class="logo-details">
            <div id="logoprin" class='bx bxs-graduation icon' color="blue"></div>
            <div class="logo_name">E. SAN MARCOS</div>
            <i class='bx bx-menu' id="btn"></i>
        </div>
        <ul class="nav-list d-none" id="nav-list">
            <li>
                <a href="#" onclick="">
                    <i class='bx bx-building-house'></i>
                    <span class="links_name">Principal</span>
                </a>
                <span class="tooltip">Principal</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-notepad'></i>
                    <span class="links_name">Ingreso de Notas</span>
                </a>
                <span class="tooltip">Notas</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bxs-x-square'></i>
                    <span class="links_name">Registro de Faltas</span>
                </a>
                <span class="tooltip">Faltas</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-file-find'></i>
                    <span class="links_name">Generar Observaciones</span>
                </a>
                <span class="tooltip">Observaciones</span>
            </li>
            <div id="hogar">
                <p>Tu cuenta</p>
            </div>
            <li>
                <a href="#">
                    <i class='bx bxs-wrench'></i>
                    <span class="links_name">Editar</span>
                </a>
                <span class="tooltip">Editar</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-exit'></i>
                    <span class="links_name">Salir</span>
                </a>
                <span class="tooltip">Salir</span>
            </li>
            <div id="hogar2">
                <p>Documentación</p>
            </div>
            <li>
                <a href="#">
                    <i class='bx bx-help-circle'></i>
                    <span class="links_name">Ayuda</span>
                </a>
                <span class="tooltip">Ayuda</span>
            </li>
        </ul>
    </div>
    <div class="container m-6 p-5">
                <div class="row p3 mb-2">
                    <div class="col-lg-12">
                        <div class="main-box no-header clearfix">
                            <div class="main-box-body clearfix">
                                <div class="container ml-4">
                                    <div>
                                        <h1>Notas del Curso:'Matemática'</h1>
                                        <h2>Curso:</h2>
                                        <h3><img src="https://img.icons8.com/color/48/000000/check-all--v1.png"/>'Curso'</h3>
                                    </div>
                                </div>
                                <div class="container ml-4 mt-4">
                                    <form>
                                        <div class="mt-3 mb-4">
                                                <div class="form-control p-5">
                                                    <p class="label-color mb-2">Alumno: *</p>
                                                    <select multiple="multiple" style="width: 100%;"  class="alumno" required>
                                                        <option value="1">Maria Luisa Mondragon</option>
                                                        <option value="2">Luis Marco Federón Montalvo</option>
                                                        <option value="3">Maria Luisa Mondragon</option>
                                                        <option value="4">Maria Luisa Mondragon</option>
                                                        <option value="5">Maria Luisa Mondragon</option>
                                                        <option value="6">Maria Luisa Mondragon</option>
                                                        <option value="7"> Luisa Mondragon</option>
                                                      </select>
                                                      <p class="label-color mb-2 mt-4">Fecha*</p>
                                                    <input type="date" class="form-control" placeholder="dd/mm/aaaa" pattern="[0-31]{1}/[0-12]{1}/[2021-3000]{1}"  required/>
                                                </div>
                                        </div>
                                        <center>
                                            <div class="container mt-5">
                                                <button class="btn btn-success btn-lg" type="submit" id="grabar"><i class='bx bx-save'></i>Grabar</button>
                                                <button class="btn btn-danger btn-lg" type="reset"><i class='bx bxs-eraser' ></i>Borrar</button>
                                            </div>
                                        </center>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </div>
                

            </div>
            <script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"></script>
            <script src="https://unpkg.com/multiple-select@1.5.2/dist/multiple-select.min.js"></script>
            <script>
                //PARA QUE APAREZCA LO DE MULTIPLE SELECCIÓN
                     $(function () {
                        $('select').multipleSelect()
                    })

                    //ESTA ES UNA FUNCION PARA VER A LOS SELECCIONADOS, POR SI LES SIRVE, COMPAÑERES atte. Valeria:V

      $(document).ready(function() {
                $("#grabar").click(function(){
                    var alumnos = [];
                    $.each($(".alumno option:selected"), function(){            
                        alumnos.push($(this).text());
                    });
                    console.log("Faltaron: "+ alumnos);
                    alert("Faltaron: "+ alumnos);
                });
        });
            </script>
            <script src="../codigo/Modulo_Docente_Frontend/0. SideBar/sidebar.js"></script>
       
</body>

