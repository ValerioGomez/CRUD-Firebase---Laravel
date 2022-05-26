@extends('layouts.app')

@section('content')
<div class="container">
    <br>
    <main mx-auto m-4>
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-dark text-white">
                        <h4>Lista de Estudiante</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Nro</th>
                                    <th>Nombre</th>
                                    <th>Apellidos</th>
                                    <th>Edad</th>
                                    <th>Genero</th>
                                    <th>Aula</th>   
                                </tr>
                            </thead>
                            <tbody id="datoestudiante">

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {{--Agregar Datos estudiante form--}}
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header bg-dark text-white">
                        <h4>Agregar Estudiante</h4>
                    </div>
                    <div class="card-body">
                            <form action="#" method="post" id="crearestudianteform" autocomplete="off">
                                <div class="mb-3">
                                    <label for="formGroupExampleInput" class="form-label">Nombre</label>
                                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese su Nombre">
                                </div>
                                <div class="mb-3">
                                    <label for="formGroupExampleInput2" class="form-label">Apellidos</label>
                                    <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Ingrese sus Apellidos">
                                </div>
                                <div class="mb-3">
                                    <label for="formGroupExampleInput2" class="form-label">Edad</label>
                                    <input type="text" class="form-control" id="edad" name="edad" placeholder="Ingrese Edad">
                                </div>
                                <div class="mb-3">
                                    <label for="formGroupExampleInput2" class="form-label">Genero</label>
                                    <select name="genero" id="genero" class="form-control">
                                        <option value="">Selecionar</option>
                                        <option value="masculino">Masculino</option>
                                        <option value="femenino">Femenino</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="formGroupExampleInput2" class="form-label">Aula</label>
                                    <select name="aula" id="aula" class="form-control">
                                        <option value="">Selecionar</option>
                                        <option value="a">Aula A</option>
                                        <option value="b">Aula B</option>
                                        <option value="c">Aula C</option>
                                        <option value="d">Aula D</option>
                                        <option value="e">Aula E</option>
                                    </select>
                                </div>
                                <div class="card-footer">
                                    <button id="btncrearestudiante" class="btn btn-success btn-block">Ingresar</button>
                                </div>
                            </form> 
                    </div>
                </div>
            </div>
        </div>
    </main>    
</div>


    
@endsection