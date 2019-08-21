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