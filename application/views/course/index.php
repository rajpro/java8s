<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="<?=base_url('dashboard')?>">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Course</li>
        </ol>
        <!-- Icon Cards-->
        <div class="row">
            <div class="col-xl-12 col-sm-12 mb-3">
                <div class="col-md-12">
                    <h3 class="float-left">List Course</h3>
                    <a href="<?=base_url('course/create')?>" class="btn btn-primary btn-sm float-right">Add Course</a>
                </div>
                <table class="table table-bordered">
                    <tr>
                        <th>Title</th>
                        <th>Content</th>
                        <th>Student</th>
                        <th>Price</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                    <tr>
                        <td><a href="#">Help Me</a></td>
                        <td>10 Section (19 Lession, 10 Quizze)</td>
                        <td><span class="badge badge-pill badge-secondary">10</span></td>
                        <td>Free</td>
                        <td class="text-center">
                            Published<br>
                            <?=date("Y-m-d")?>
                        </td>
                        <td>
                            <a href="<?=base_url('course/delete/1')?>" class="btn btn-danger btn-sm">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <!-- /.container-fluid-->
</div>
<!-- /.container-wrapper-->