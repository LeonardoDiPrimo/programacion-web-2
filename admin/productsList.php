<?php
require_once('include/header.php');
require_once('include/sidebar.php');
include_once(DIR_BASE . 'business/productsBusiness.php');
include_once(DIR_BASE . 'business/categoriesBusiness.php');
include_once(DIR_BASE . 'business/brandsBusiness.php');

$categories = businessGetCategories();
$brands = businessGetBrands();
$products = array();

if (isset($_GET['del'])) {
  businessDeleteProducts($_GET['del']);
  redirect('productsList.php');
}

if (isset($_POST["filterProducts"])) {
  if (!empty($_POST["selectOptionCategories"]) && !empty($_POST["selectOptionBrands"])) {
    foreach (businessGetProducts() as $product) {
      if ($product["categoryId"] == $_POST["selectOptionCategories"] && $product["brandId"] == $_POST["selectOptionBrands"]) array_push($products, $product);
    }
  } elseif (!empty($_POST["selectOptionCategories"])) {
    foreach (businessGetProducts() as $product) {
      if ($product["categoryId"] == $_POST["selectOptionCategories"]) array_push($products, $product);
    }
  } elseif (!empty($_POST["selectOptionBrands"])) {
    foreach (businessGetProducts() as $product) {
      if ($product["brandId"] == $_POST["selectOptionBrands"]) array_push($products, $product);
    }
  } else {
    $products = businessGetProducts();
  }
} else $products = businessGetProducts();

?>

<!-- Content Wrapper. Contains page content S-->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Listado de Productos</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="home.php">Home</a></li>
            <li class="breadcrumb-item active">Listado de Productos</li>
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
        <h3 class="card-title">Productos<a href="productsForm.php"><i class="fa fa-plus"></i></a></h3>
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
        <form method="POST">
          <div class="row">
            <div class="col-sm-3">
              <div class="form-group">
                <label>Filtrar Categoria</label>
                <select class="form-control select2" name="selectOptionCategories">
                  <option value="" selected="selected"></option>
                  <?php foreach ($categories as $category) { ?>
                    <option value="<?php echo $category["id_categoria"] ?>"> <?php echo $category["nombre"] ?></option>
                  <?php }
                  ?>
                </select>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="form-group">
                <label>Filtrar Marca</label>
                <select class="form-control select2" name="selectOptionBrands">
                  <option value="" selected="selected"></option>
                  <?php foreach ($brands as $brand) { ?>
                    <option value="<?php echo $brand["id_marcas"] ?>"> <?php echo $brand["nombre"] ?></option>
                  <?php }
                  ?>
                </select>
              </div>
            </div>
          </div>
          <button type="submit" class="btn btn-primary" name="filterProducts"> Aplicar Filtros </button>
        </form>
      </div>
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
                    <th>Categoria</th>
                    <th>Marca</th>
                    <th>Precio</th>
                    <th>Activa</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($products as $product) { ?>
                    <tr>
                      <td><?php echo $product['id'] ?></td>
                      <td><?php echo $product['name'] ?></td>
                      <td><?php echo $categories[$product['categoryId']]['nombre'] ?></td>
                      <td><?php echo $brands[$product['brandId']]['nombre'] ?></td>
                      <td>$ <?php echo $product['price'] ?></td>
                      <td><?php echo $product['active'] ? "SI" : "NO" ?></td>
                      <td>
                        <a href="productsForm.php?edit=<?php echo $product['id'] ?>"><i class="fa fa-edit"></i></a>

                        <a href="productsList.php?del=<?php echo $product['id'] ?>"><i class="fa fa-trash"></i></a>
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