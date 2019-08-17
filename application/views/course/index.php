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
                    <?php if(!empty($results)):foreach($results as $result):?>
                    <tr>
                        <td><a href="<?=base_url('course/update/'.$result['p_id'])?>"><?=$result['p_title']?></a></td>
                        <td><?=$result['p_section_count']?> Section (<?=$result['p_section_item_count']?> Lession, 0 Quizze)</td>
                        <td><span class="badge badge-pill badge-secondary">0</span></td>
                        <td>
                            <?php 
                                $setting = json_decode($result['p_setting']);
                                if ($setting->sale_price==0) {
                                    echo "Free";
                                }else{
                                    echo $setting->sale_price."<br><del>".$setting->price."</del>";
                                }
                            ?>
                        </td>
                        <td class="text-center">
                            Published<br>
                            <?=date('Y-m-d', strtotime($result['p_modified_date']))?>
                        </td>
                        <td>
                            <a href="<?=base_url('course/section/'.$result['p_id'])?>" class="btn btn-primary btn-sm">
                                <i class="fa fa-file"></i>
                            </a>

                            <a href="<?=base_url('course/delete/'.$result['p_id'])?>" class="btn btn-danger btn-sm">
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