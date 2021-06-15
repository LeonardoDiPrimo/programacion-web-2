<?php
require_once('include/header.php');
require_once('include/sidebar.php');
include_once(DIR_BASE . 'business/commentsBusiness.php');
include_once(DIR_BASE . 'business/productsBusiness.php');

$comments = array();

if (isset($_POST["filterProduct"])) {
    if (empty($_POST["selectOption"])) $comments = businessGetComments();
    else {
        foreach (businessGetComments() as $comment) {
            if ($comment["productId"] == $_POST["selectOption"]) array_push($comments, $comment);
        }
    }
} else $comments = businessGetComments();

?>
<!-- Content Wrapper. Contains page content S-->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Listado de Comentarios</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Listado de Comentarios</li>
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
                <h3 class="card-title">Comentarios</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-5">
                        <form method="POST">
                            <label>Filtrar Producto</label>
                            <select class="form-control select2" name="selectOption">
                                <option value="" selected="selected"></option>
                                <?php foreach (businessGetProducts() as $prod) { ?>
                                    <option value="<?php echo $prod["id"] ?>"> <?php echo $prod["name"] ?></option>
                                <?php }
                                ?>
                            </select>
                            <br>
                            <button type="submit" class="btn btn-primary" name="filterProduct"> Aplicar Filtros </button>
                        </form>
                    </div>

                    <div class="col-12">
                        <br>
                        <div class="card">
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>Product ID</th>
                                            <th>Nombre del Producto</th>
                                            <th>Email</th>
                                            <th>Descripción</th>
                                            <th>Calificación</th>
                                            <th>Fecha de Creación</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        krsort($comments);
                                        foreach ($comments as $comment) { ?>
                                            <tr>
                                                <td><?php echo  $comment['productId'] ?></td>
                                                <td><?php echo  businessFindProductById($comment['productId'])['name'] ?></td>
                                                <td><?php echo  $comment['email'] ?></td>
                                                <td><?php echo  $comment['description'] ?></td>
                                                <td><?php echo  $comment['qualification'] ?></td>
                                                <td><?php echo  $comment['creationDate'] ?></td>
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