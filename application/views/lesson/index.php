<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="<?=base_url('dashboard')?>">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Lesson</li>
        </ol>
        <!-- Icon Cards-->
        <div class="row">
            <div class="col-xl-12 col-sm-12 mb-3">
                <div class="col-md-12">
                    <h3 class="float-left">List Lesson</h3>
                </div>
                <table class="table table-bordered">
                    <tr>
                        <th>Title</th>
                        <th>Action</th>
                    </tr>
                    <?php if(!empty($results)):foreach($results as $result):?>
                    <tr>
                        <td><a href="<?=base_url('sections/update/'.$result['p_id'])?>"><?=$result['p_title']?></a></td>
                        <td class="text-center">
                            Published<br>
                            <?=date('Y-m-d', strtotime($result['p_modified_date']))?>
                        </td>
                        <td>
                            <a href="<?=base_url('sections/update/'.$result['p_id'])?>" data-toggle="tooltip" title="Edit" class="btn btn-primary btn-sm">
                                <i class="fa fa-edit"></i>
                            </a>
                            <a href="<?=base_url('sections/delete/'.$result['p_id'])?>" data-toggle="tooltip" title="Delete" class="btn btn-danger btn-sm">
                                <i class="fa fa-trash"></i>
                            </a>
                            
                        </td>
                    </tr>
                    <?php endforeach;endif;?>
                </table>
            </div>
        </div>
    </div>
    <!-- /.container-fluid-->
</div>
<!-- /.container-wrapper-->