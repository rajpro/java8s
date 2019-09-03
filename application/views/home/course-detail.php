<main>
    <section id="hero_in" class="courses">
        <div class="wrapper">
            <div class="container">
            </div>
        </div>
    </section>
    <!--/hero_in-->

    <div class="bg_color_1">
        <nav class="secondary_nav sticky_horizontal">
            <div class="container">
                <ul class="clearfix">
                    <li><a href="#description" class="active">Description</a></li>
                    <li><a href="#lessons">Lessons</a></li>
                    <li><a href="#reviews">Reviews</a></li>
                </ul>
            </div>
        </nav>
        <div class="container margin_60_35">
            <div class="row">
                <div class="col-lg-8">
                    
                    <section id="description">
                        <h2>Description</h2>
                        <?=$course_detail['p_content']?>
                        <!-- /row -->
                    </section>
                    <!-- /section -->
                    <section id="lessons">
                        <div class="intro_title">
                            <h2>Lessons</h2>
                            <ul>
                                <li><?=$course_detail['lesson_count']?> lessons</li>
                                <li>01:02:10</li>
                            </ul>
                        </div>
                        <div id="accordion_lessons" role="tablist" class="add_bottom_45">
                            <?php $show = 'show';if(!empty($course_lessons)):foreach($course_lessons as $key => $cl): ?>
                            <div class="card">
                                <div class="card-header" role="tab" id="heading<?=$key?>">
                                    <h5 class="mb-0">
                                        <a data-toggle="collapse" href="#collapse<?=$key?>" aria-expanded="true" aria-controls="collapse<?=$key?>"><i class="indicator ti-minus"></i><?=$cl['s_name']?></a>
                                    </h5>
                                </div>

                                <div id="collapse<?=$key?>" class="collapse <?=($show=='show'?'show':'hide')?>" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion_lessons">
                                    <div class="card-body">
                                        <div class="list_lessons">
                                            <ul>
                                                <?php if($cl['s_lession']):foreach($cl['s_lession'] as $sl):?>
                                                <li><a href="<?=base_url('lesson/'.$course_detail['p_url'].'/'.$sl['p_url'])?>" class=""> <?=$sl['p_title']?> </a><span>00:00</span></li>
                                                <?php endforeach;endif;?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php $show='hide'; endforeach;endif; ?>
                            <!-- /card -->
                        </div>
                        <!-- /accordion -->
                    </section>
                    <!-- /section -->
                    
                    <section id="reviews">
                        <h2>Reviews</h2>
                        <div class="reviews-container">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div id="review_summary">
                                        <strong>4.7</strong>
                                        <div class="rating">
                                            <i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
                                        </div>
                                        <small>Based on 4 reviews</small>
                                    </div>
                                </div>
                                <div class="col-lg-9">
                                    <div class="row">
                                        <div class="col-lg-10 col-9">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-3"><small><strong>5 stars</strong></small></div>
                                    </div>
                                    <!-- /row -->
                                    <div class="row">
                                        <div class="col-lg-10 col-9">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-3"><small><strong>4 stars</strong></small></div>
                                    </div>
                                    <!-- /row -->
                                    <div class="row">
                                        <div class="col-lg-10 col-9">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-3"><small><strong>3 stars</strong></small></div>
                                    </div>
                                    <!-- /row -->
                                    <div class="row">
                                        <div class="col-lg-10 col-9">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-3"><small><strong>2 stars</strong></small></div>
                                    </div>
                                    <!-- /row -->
                                    <div class="row">
                                        <div class="col-lg-10 col-9">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 0" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-3"><small><strong>1 stars</strong></small></div>
                                    </div>
                                    <!-- /row -->
                                </div>
                            </div>
                            <!-- /row -->
                        </div>

                        <hr>

                        <h2>Comment</h2>
                        <?php if($course_detail['p_comment_status']==1): ?>
                        <?=form_open(base_url('comment/add'),["name"=>"comment"])?>
                        <div class="row mb-4">
                            <input type="hidden" name="userid" value="<?=(!empty($this->session->userdata('userid'))?$this->session->userdata('userid'):0)?>">
                            <input type="hidden" name="postid" value="<?=$course_detail['p_id']?>">
                            <?php if(empty($this->session->userdata('logged_in'))):?>
                            <div class="form-group col-md-6">
                                <input type="text" name="name" placeholder="Name" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" name="email" placeholder="Email" class="form-control">
                            </div>
                            <?php endif; ?>
                            <div class="form-group col-md-12">
                                <textarea class="form-control" name="content" rows="6" placeholder="Message" ></textarea>
                            </div>
                            <div class="col-md-12">
                                <input type="submit" class="btn btn-primary btn-sm float-right">
                            </div>
                        </div>
                        </form>
                        <?php endif; ?>

                        <div class="reviews-container">
                            <?php if(!empty($comments)):foreach($comments as $comment): ?>
                            <div class="review-box clearfix">
                                <figure class="rev-thumb"><img src="<?=base_url('assets')?>/img/avatar1.jpg" alt="">
                                </figure>
                                <div class="rev-content">
                                    <div class="rating">
                                        <i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
                                    </div>
                                    <div class="rev-info">
                                        <?php 
                                            $s_name = explode(' ', $comment['user_profile']['name']);
                                            echo ucfirst($s_name[0]);
                                        ?> – <?=date('F d, Y',strtotime($comment['c_date']))?>:
                                    </div>
                                    <div class="rev-text mb-3">
                                        <p>
                                            <?=$comment['c_content']?>
                                        </p>
                                    </div>
                                    
                                    <div style="position:absolute;right:20px;bottom:5px;" data-toggle="collapse" href="#comment<?=$comment['c_id']?>" role="button" aria-expanded="false" aria-controls="comment<?=$comment['c_id']?>">Replay</div>
                                </div>

                                <div class="collapse" id="comment<?=$comment['c_id']?>">
                                    <?=form_open(base_url('comment/add'))?>
                                    <div class="row mb-4 mt-4">
                                        <input type="hidden" name="parent" value="<?=$comment['c_id']?>">
                                        <input type="hidden" name="userid" value="<?=$this->session->userdata('userid')?>">
                                        <input type="hidden" name="postid" value="<?=$course_detail['p_id']?>">
                                        <div class="form-group col-md-6">
                                            <input type="text" name="name" placeholder="Name" class="form-control">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input type="email" name="email" placeholder="Email" class="form-control">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <textarea class="form-control" name="content" rows="6" placeholder="Message"></textarea>
                                        </div>
                                        <div class="col-md-12">
                                            <input type="submit" class="btn btn-primary btn-sm float-right">
                                        </div>
                                    </div>
                                    </form>
                                </div>

                                <?php if(!empty($comment['parent'])):foreach($comment['parent'] as $value): ?>
                                <div class="review-box mt-4 clearfix">
                                    <figure class="rev-thumb"><img src="<?=base_url('assets')?>/img/avatar1.jpg" alt="">
                                    </figure>
                                    <div class="rev-content">
                                        <div class="rating">
                                            <i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
                                        </div>
                                        <div class="rev-info">
                                            <?php 
                                                $s_name = explode(' ', $value['user_profile']['name']);
                                                echo ucfirst($s_name[0]);
                                            ?> – <?=date('F d, Y',strtotime($value['c_date']))?>:
                                        </div>
                                        <div class="rev-text">
                                            <p>
                                                <?=$value['c_content']?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach;endif; ?>
                            </div>
                            <?php endforeach;endif;?>
                            <!-- /review-box -->
                        </div>
                        <!-- /review-container -->
                    </section>
                    <!-- /section -->
                </div>
                <!-- /col -->
                
                <aside class="col-lg-4" id="sidebar">
                    <div class="box_detail">
                        <figure>
                            <a href="https://www.youtube.com/watch?v=LDgd_gUcqCw" class="video"><i class="fa fa-play"></i><img src="<?=base_url('featured_image/'.$course_detail['featured_image'])?>" alt="" class="img-fluid"><span>View course preview</span></a>
                        </figure>
                        <div class="price">
                            <?php $course_detail['setting'] = json_decode($course_detail['setting']);?>
                            <?php 
                                $sp = $course_detail['setting']->sale_price;
                                echo ($sp==0?'Free':"<i class='fa fa-rupee' style='font-size:27px;'></i>".$sp);
                            ?>
                            <span class="original_price">
                                <em><i class="fa fa-rupee" style="font-size:14px;"></i>
                                    <?=$course_detail['setting']->price?>
                                </em>
                                <?php 
                                    $sv = $course_detail['setting']->price - $course_detail['setting']->sale_price;
                                    $discount = (100/$course_detail['setting']->price*$sv);
                                    echo round($discount)." % discount price";
                                ?>
                            </span>
                        </div>
                        <a href="#" data-purchase="<?=$course_detail['p_id']?>" class="btn_1 full-width">Enroll</a>
                        <a href="#0" class="btn_1 full-width outline"><i class="icon_heart"></i> Add to wishlist</a>
                        <div id="list_feat">
                            <h3>What's includes</h3>
                            <ul>
                                <li><i class="fa fa-mobile"></i> Mobile support</li>
                                <li><i class="fa fa-archive"></i>Lesson archive</li>
                                <li><i class="fa fa-mobile"></i>Mobile support</li>
                                <li><i class="fa fa-comment"></i>Tutor chat</li>
                                <li><i class="fa fa-file"></i>Course certificate</li>
                            </ul>
                        </div>
                    </div>
                </aside>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /bg_color_1 -->
</main>
<!--/main-->