<?php
  require_once('include/header.php');
  require_once('include/sidebar.php');
  include_once(DIR_BASE.'business/productsBusiness.php');
  include_once(DIR_BASE.'business/categoriesBusiness.php');
  include_once(DIR_BASE.'business/brandsBusiness.php');

  if(isset($_POST['submit'])){
    if(!empty($_GET['edit'])){
      businessUpdateProduct($_POST, $_GET['edit']);
    } else {
      businessSaveProducts($_POST);
    }
    redirect('productsList.php');
  }

  $products = array('name' => '', 'description' => '', 'brandId' => '', 'categoryId' => '', 'price' =>'' , 'url' => '', 'active' => '');
  if(!empty($_GET['edit'])){
    $products = businessFindProductById($_GET['edit']);
  }
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Agregar/Editar Productos</h3>

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
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nombre</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="name" value="<?php echo $products['name'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Categoría</label>
                    <select name="categoryId">
                    <?php foreach(businessGetCategories() as $categories){?>
                      <option value="<?php echo $categories['id_categoria']?>"<?php echo($categories['id_categoria'] == $products['categoryId'])?'selected':'' ?>><?php echo $categories['nombre'] ?></option>
                    <?php } ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Marca</label>
                    <select name="brandId">
                    <?php foreach(businessGetBrands() as $brands){?>
                    <option value="<?php echo $brands['id_marcas']?>"<?php echo($brands['id_marcas'] == $products['brandId'])?'selected':'' ?>><?php echo $brands['nombre'] ?></option>
                    <?php } ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Precio</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="price" value="<?php echo $products['price'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Activo</label>
                    <input type="checkbox" class="form-checkbox-label" id="active" name="active" value="" <?php echo ($products['active']) == TRUE ? 'checked' : ''?>>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Descripción</label>
                    <textarea class="form-control" name="description" rows="8" cols="40"><?php echo $products['description'] ?></textarea>
                  </div>
                  <div class="form-group">
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="imagen" class="custom-file-input" id="exampleInputFile">
                        <input type="hidden" name="old_imagen" value="<?php echo $products['url']?>" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
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