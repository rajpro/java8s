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
                    <h3 class="float-left">Update Course</h3>
                </div>

                <?=form_open_multipart()?>
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control" value="<?=set_value('title', $model['p_title'])?>" id="title" placeholder="Enter Title">
                        <!-- <small class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                    </div>
                    <div class="form-group">
                        <label for="content">Description</label>
                        <textarea name="content" class="form-control">
                            <?=set_value('content', $model['p_content'])?>
                        </textarea>
                    </div>

                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Setting</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Assessment</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="col-md-6 mt-3">
                                <input type="checkbox" checked name="comment_status"> Allow Comment
                                <hr>
                                <div class="form-group">
                                    <label for="title">Featured Image</label><br>
                                    <input type="file" name="featured_image">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="col-md-6 mt-3">
                                <div class="form-group">
                                    <label for="title">Price</label>
                                    <input type="text" class="form-control" name="price" value="<?=set_value('price', $model['p_setting']['price'])?>" placeholder="Enter Price">
                                </div>
                                <div class="form-group">
                                    <label for="title">Sale Price</label>
                                    <input type="text" class="form-control" name="sale_price" value="<?=set_value('sale_price', $model['p_setting']['sale_price'])?>" placeholder="Enter Title">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="col-md-6 mt-3">
                                <div class="form-group">
                                    <label for="title">Passing Condition Value</label>
                                    <input type="text" class="form-control" name="passing_value" value="<?=set_value('passing_value', $model['p_setting']['passing_value'])?>" placeholder="Enter Passing Value">
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-12 mt-5">
                        <button type="submit" class="btn btn-primary btn-sm float-right">Update</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <!-- /.container-fluid-->
</div>
<!-- /.container-wrapper-->