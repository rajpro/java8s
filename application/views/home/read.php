<main>
    <section id="hero_in" class="courses">
        <div class="wrapper">
            <div class="container">
            </div>
        </div>
    </section>
    <!--/hero_in-->

    <div class="bg_color_1">
        <nav class="secondary_nav sticky_horizontal" style="padding:5px 0;">
            <div class="container">
            </div>
        </nav>
        <div class="container margin_60_35">
            <div class="row">
				<aside class="col-lg-3" id="sidebar">
                    <div class="box_list px-3 py-3">
                        <h5 class="mb-4">Table of Content</h5>
                        <?php if(!empty($course_lessons)):foreach($course_lessons as $value): ?>
                        <h6><?=$value['s_name']?></h6>
                        <ul class="px-0">
                            <?php if(!empty($value['s_lession'])):foreach($value['s_lession'] as $val): ?>
                            <li>
                                <a href="<?=base_url('lesson/'.$this->uri->segment(2).'/'.$val['p_url'])?>"><?=$val['p_title']?></a>
                            </li>
                            <?php endforeach;endif; ?>
                        </ul>
                        <?php endforeach;endif; ?>
                    </div>
					
					<!--/filters col-->
				</aside>
				<!-- /aside -->

				<div class="col-lg-9" id="list_sidebar">
                    <section id="description" class="p-4">
                        <?php echo $lesson_detail['p_content']; ?>
                    </section>
                    
                    <h2>Comment</h2>
                        <?php if($lesson_detail['p_comment_status']==1): ?>
                        <?=form_open(base_url('comment/add'),["name"=>"comment"])?>
                        <div class="row mb-4">
                            <input type="hidden" name="userid" value="<?=(!empty($this->session->userdata('userid'))?$this->session->userdata('userid'):0)?>">
                            <input type="hidden" name="postid" value="<?=$lesson_detail['p_id']?>">
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
                                        <input type="hidden" name="postid" value="<?=$lesson_detail['p_id']?>">
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
				</div>
				<!-- /col -->
			</div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /bg_color_1 -->
</main>
<!--/main-->