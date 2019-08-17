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
                    <h3 class="float-left">Add Course</h3>
                </div>

                <?=form_open(base_url('course/create'))?>
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" placeholder="Enter Title">
                        <!-- <small class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                    </div>
                    <div class="form-group">
                        <label for="content">Description</label>
                        <textarea name="content" class="form-control" id="content" cols="30" rows="50"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="curriculum">Curriculum</label>
                        
                    </div>

                </form>
            </div>
        </div>
    </div>
    <!-- /.container-fluid-->
</div>
<!-- /.container-wrapper-->