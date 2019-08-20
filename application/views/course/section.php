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
                <div class="col-md-12 row">
                    <h3 class="float-left">Add Sections</h3>
                </div>

                <?=form_open(base_url('course/section/'.$this->uri->segment(3)))?>
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="name" class="form-control" id="title" placeholder="Enter Title">
                    </div>
                    <div class="form-group">
                        <label for="content">Description</label>
                        <textarea name="desc" class="form-control" cols="10" rows="5"></textarea>
                    </div>
                    
                    <div class="col-md-12 mt-5">
                        <button type="submit" class="btn btn-primary btn-sm float-right">Save</button>
                    </div>

                </form>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12 col-sm-12 mb-3">
                <div class="col-md-12 row">
                    <h3 class="float-left">List Sections</h3>
                </div>

                <table class="table table-bordered">
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Lessons</th>
                        <th>Action</th>
                    </tr>
                    <?php if(!empty($sections)):foreach($sections as $section): ?>
                    <tr>
                        <td><?=$section['s_name']?></td>
                        <td><?=$section['s_description']?></td>
                        <td><?=$section['lessons']?></td>
                        <td>
                            <a href="<?=base_url('course/lesson/'.$section['s_id'])?>" class="btn btn-primary btn-sm">Add Lesson</a>
                        </td>
                    </tr>
                    <?php endforeach;endif; ?>
                </table>
            </div>
        </div>
    </div>
    <!-- /.container-fluid-->
</div>
<!-- /.container-wrapper-->