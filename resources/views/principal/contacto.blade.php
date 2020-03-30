@extends('layouts.principal')
    @section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <figure>
                    <img src="./images/img_contacto.jpg" width="100%" alt="">
                </figure>
            </div>
            <div class="col-md-6 col-sm-12">
                <form>
                    <div class="form-group">
                        <label for="fnombre">Nombre:</label>
                        <input type="text" class="form-control" id="idnombre">
                    </div>
                    <div class="form-group">
                        <label for="fCorreo">Correo:</label>
                        <input type="email" class="form-control" placeholder="nombre@ejemplo.com" id="idcorreo">
                    </div>
                    <div class="form-group">
                        <label for="fasunto">Asunto:</label>
                        <input type="text" class="form-control" id="idasunto">
                    </div>
                    <div class="form-group">
                        <label for="fcontenido">Contenido:</label>
                        <textarea class="form-control" id="idcontenido" rows="3"></textarea>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop