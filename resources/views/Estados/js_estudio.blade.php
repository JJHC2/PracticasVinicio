<script>
    $(document).ready(function(){
        $('#trabajo').change(function(){
                if ($(this).is(':checked')){
                    $("#form_trabajo").load('js_trabajo');
                }
                else{
                    $("#form_trabajo").html('');
                }
            });
        });
    
    </script>
    <h3>Datos Escolares</h3>
    <hr>
    <div class="form-floating">
        <textarea class="form-control" placeholder="Ejemplo: Ingeniero TIC" name="grado" id="grado" style="height: 100px"></textarea>
        <label for="direccion">Grado Academico Actual?</label>
    </div>
    <br>
    <div class="form-floating">
        <textarea class="form-control" placeholder=" Ejemplo: UTVT" name="universidad" id="universidad" style="height: 100px"></textarea>
        <label for="direccion">En que Universidad Estudia?</label>
    </div>
    <br>
    <div class="form-floating">
        <input class="form-control" type="date" name="fecha" id="fecha" style="height: 100px">
        <label for="fecha">Cuando Comenzo a Estudiar?</label>
    </div>
    <br>
    <div class="form-floating">
        <textarea class="form-control" placeholder=" Ejemplo: TIC" name="carrera" id="carrera" style="height: 100px"></textarea>
        <label for="carrera">Que carrera estudia?</label>
    </div>
    
    <h3>Otros Datos</h3>
    <hr>
    <div class="form-check form-switch">
        <input class="form-check-input" role="switch" type="checkbox" name="trabajo" id="trabajo">
        <label class="form-check-label" for="trabajo">Usted Trabaja?</label>
    </div>
    
    <div id="form_trabajo"></div>