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
          <div class="card-body">
            <div class="border-left-success">
              <h5 class="ml-2">Información General</h5>
            </div>
            <hr>
            <div class="border-left-success">
              <h5 class="ml-2">Galeria de Imagenes</h5>
            </div>
            <hr>
            <div class="border-left-success">
              <h5 class="ml-2">Inventario</h5>
            </div>
          </div>
        </div>

      </div>

    </div>


  </div>
  <!-- /.container-fluid -->


  @include('default.footer')