<?php
  require_once('include/header.php');
  require_once('include/sidebar.php');
  include_once(DIR_BASE.'business/brandsBusiness.php');

  if(isset($_GET['del'])){
    businessDeleteBrands($_GET['del']);
  }
?>
 <!-- Content Wrapper. Contains page content S-->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Listado de Marcas</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Listado de Marcas</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Marcas <a href="brandsForm.php"><i class="fa fa-plus"></i></a></h3>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Nombre</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                      <?php foreach(businessGetBrands() as $brands){ ?>
                    <tr>
                      <td><?php echo $brands['id_marcas'] ?></td>
                      <td><?php echo $brands['nombre'] ?></td>
                    
                      
                      <td>
                      <a href="brandsForm.php?edit=<?php echo $brands['id_marcas'] ?>"><i class="fa fa-th"></i></a>

                      <a href="brandsList.php?del=<?php echo $brands['id_marcas'] ?>"><i class="fa fa-trash"></i></a>
                      </td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        </div>
        <!-- /.card-body -->

      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php
  require_once('include/footer.php');
?>