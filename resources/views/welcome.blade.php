@include('default.header')
@include('default.menu')
<!-- Main Content -->
<div id="content">

  @include('default.search')

  <!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Productos</h1>
    </div>

    <div class="row">

      <div class="col-lg-12">
        <!-- Basic Card Example -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-success">Nuevo Producto</h6>
          </div>
          <form>
            <div class="card-body">
              <div class="border-left-success">
                <h5 class="ml-2">Información General</h5>
              </div>
              <hr>
                <div class="form-row">
                  <div class="form-group col-md-4">
                    <label for="inputCodigo">Codigo</label>
                    <input type="text" class="form-control" id="inputCodigo">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="inputMarca">Marca</label>
                    <input type="text" class="form-control" id="inputMarca">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="inputColor">Color</label>
                    <input type="text" class="form-control" id="inputColor">
                  </div>
                </div>
                <div class="form-group ">
                  <label for="inputDescripcion">Descripcion</label>
                  <textarea class="form-control" id="inputDescripcion" rows="3"></textarea>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputPrecio">Precio</label>
                    <input type="number" class="form-control" id="inputPrecio">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputPrecioVenta">Precio Venta</label>
                    <input type="number" class="form-control" id="inputPrecioVenta">
                  </div>
                </div>
              <div class="border-left-success">
                <h5 class="ml-2">Galeria de Imagenes</h5>
              </div>
              <hr>
              <div class="form-row">
                <div class="form-group col-md-4">
                  <label for="inputImagen1">Imagen1</label>
                  <input type="file" class="form-control-file" id="inputImagen1">
                </div>
                <div class="form-group col-md-4">
                  <label for="inputImagen2">Imagen2</label>
                  <input type="file" class="form-control-file" id="inputImagen2">
                </div>
                <div class="form-group col-md-4">
                  <label for="inputImagen3">Imagen3</label>
                  <input type="file" class="form-control-file" id="inputImagen3">
                </div>
                <div class="form-group col-md-4">
                  <label for="inputImagen4">Imagen4</label>
                  <input type="file" class="form-control-file" id="inputImagen4">
                </div>
                <div class="form-group col-md-4">
                  <label for="inputImagen5">Imagen5</label>
                  <input type="file" class="form-control-file" id="inputImagen5">
                </div>
                </div>
              <div class="border-left-success">
                <h5 class="ml-2">Inventario</h5>
              </div>
              <hr>
              <div class="form-row">
                <div class="form-group col-md-4">
                  <label for="inputTalla1">Talla</label>
                  <input type="text" value="CH" class="form-control" id="inputTalla" readonly>
                </div>
                <div class="form-group col-md-4">
                  <label for="inputDisponible">Disponible</label>
                  <input type="number" class="form-control" id="inputDisponible">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-4">
                  <label for="inputTalla2">Talla</label>
                  <input type="text" value="M" class="form-control" id="inputTalla" readonly>
                </div>
                <div class="form-group col-md-4">
                  <label for="inputDisponible">Disponible</label>
                  <input type="number" class="form-control" id="inputDisponible">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-4">
                  <label for="inputTalla3">Talla</label>
                  <input type="text" value="L" class="form-control" id="inputTalla" readonly>
                </div>
                <div class="form-group col-md-4">
                  <label for="inputDisponible">Disponible</label>
                  <input type="number" class="form-control" id="inputDisponible">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-4">
                  <label for="inputTalla">Talla</label>
                  <input type="text" value="XL" class="form-control" id="inputTalla" readonly>
                </div>
                <div class="form-group col-md-4">
                  <label for="inputDisponible">Disponible</label>
                  <input type="number" class="form-control" id="inputDisponible">
                </div>
                </div>

              </div>
              <div class="d-flex justify-content-end pr-3"><button type="submit" class="btn btn-success mb-2 ">Guardar cambios</button> </div>
            </div>
          </form>
        </div>

      </div>

    </div>


  </div>
  <!-- /.container-fluid -->


  @include('default.footer')