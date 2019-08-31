<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="<?=base_url('dashboard')?>">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Setting</li>
        </ol>
        <!-- Icon Cards-->
        <div class="row">
            <div class="col-xl-12 col-sm-12 mb-3">
                <div class="col-md-12 row">
                    <h3 class="float-left">Popular Courses</h3>
                </div>

                <?=form_open(base_url('setting/popular_course'))?>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="title">Popular Course One</label>
                                <?=form_dropdown('popular_course[]', $courses, (!empty($popular_course['one'])?$popular_course['one']:''), ['class'=>'form-control'])?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="title">Popular Course Two</label>
                                <?=form_dropdown('popular_course[]', $courses, (!empty($popular_course['two'])?$popular_course['one']:''), ['class'=>'form-control'])?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="title">Popular Course Three</label>
                                <?=form_dropdown('popular_course[]', $courses, (!empty($popular_course['three'])?$popular_course['one']:''), ['class'=>'form-control'])?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="title">Popular Course Four</label>
                                <?=form_dropdown('popular_course[]', $courses, (!empty($popular_course['four'])?$popular_course['one']:''), ['class'=>'form-control'])?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="title">Popular Course Five</label>
                                <?=form_dropdown('popular_course[]', $courses, (!empty($popular_course['five'])?$popular_course['one']:''), ['class'=>'form-control'])?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mt-5">
                        <button type="submit" class="btn btn-primary btn-sm float-right">Save</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <!-- /.container-fluid-->
</div>
<!-- /.container-wrapper-->