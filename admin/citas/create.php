<?php
include ('../../app/config.php');
include ('../../admin/layout/parte1.php');
include ('../../app/controllers/productos/listado_de_productos.php');
?>
<?php
$contador = 1;
foreach ($productos as $producto){
$contador = $contador + 1;
}
function ceros($numero){
    $len=0;
    $cantidad_ceros = 5;
    $aux=$numero;
    $pos=strlen($numero);
    $len=$cantidad_ceros-$pos;
    for ($i=0;$i<$len;$i++){
        $aux="0".$aux;
    }
    return $aux;
}
?>

    <br>
    <div class="container-fluid">

        <h1>Registrar nuevas citas</h1>

        <div class="row">
            <div class="col-md-12">
                <div class="card card-outline card-primary">
                    <div class="card-header">
                        <h3 class="card-title"><b>Datos de la cita</b></h3>
                    </div>
                    <div class="card-body">
                        <form action="../../app/controllers/productos/create.php" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-6">
                                        <div class="form-group">
                                        <label for="">Mascota</label>
                                        <select name="cargo" id="" CLASS="form-control">
                                            <option value="ADMINISTRADOR">Mascota 1</option>
                                            <option value="CLIENTE">Mascota 2</option>
                                        </select>
                                        </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Fecha
                                                <input type="date" name="descripcion" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Motivo</label><b> *</b>
                                                <input type="Text" name="stock" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <a href="index.php" class="btn btn-secondary">Cancelar</a>
                                    <input type="submit" class="btn btn-primary" value="Registrar mascota">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
include ('../../admin/layout/parte2.php');
include ('../../admin/layout/mensaje.php');
?>

<script>
    function archivo(evt) {
        var files = evt.target.files; // FileList object
        // Obtenemos la imagen del campo "file".
        for (var i = 0, f; f = files[i]; i++) {
            //Solo admitimos imágenes.
            if (!f.type.match('image.*')) {
                continue;
            }
            var reader = new FileReader();
            reader.onload = (function (theFile) {
                return function (e) {
                    // Insertamos la imagen
                    document.getElementById("list").innerHTML = ['<img class="thumb thumbnail" src="',e.target.result, '" width="200px" title="', escape(theFile.name), '"/>'].join('');
                };
            })(f);
            reader.readAsDataURL(f);
        }
    }
    document.getElementById('file').addEventListener('change', archivo, false);
</script>

