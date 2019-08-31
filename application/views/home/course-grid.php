<main>
    <section id="hero_in" class="courses">
        <div class="wrapper">
            <div class="container">
                
            </div>
        </div>
    </section>
    <!--/hero_in-->
    <div class="filters_listing sticky_horizontal">
        <div class="container">
            <ul class="clearfix">
                <li>
                    <div class="switch-field">
                        <input type="radio" id="all" name="listing_filter" value="all" checked>
                        <label for="all">All</label>
                        <input type="radio" id="popular" name="listing_filter" value="popular">
                        <label for="popular">Popular</label>
                        <input type="radio" id="latest" name="listing_filter" value="latest">
                        <label for="latest">Latest</label>
                    </div>
                </li>
                <li>
                    <div class="layout_view">
                        <a href="#0" class="active"><i class="icon-th"></i></a>
                        <a href="courses-list.html"><i class="icon-th-list"></i></a>
                    </div>
                </li>
                <li>
                    <select name="orderby" class="selectbox">
                        <option value="category">Category</option>
                        <option value="category 2">Literature</option>
                        <option value="category 3">Architecture</option>
                        <option value="category 4">Economy</option>
                        </select>
                </li>
            </ul>
        </div>
        <!-- /container -->
    </div>
    <!-- /filters -->

    <div class="container margin_60_35">
        <div class="row">
            <!-- /box_grid -->
            <?php if(!empty($course_details)):foreach($course_details as $value): ?>
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="box_grid wow">
                    <figure class="block-reveal">
                        <div class="block-horizzontal"></div>
                        <a href="#0" class="wish_bt">
                            <i class="fa fa-heart"></i>
                        </a>
                        <a href="<?=base_url('course-detail/'.$value['p_url'])?>"><img src="<?=(!empty(base_url('featured_image/'.$value['featured_image']))?base_url('featured_image/'.$value['featured_image']):'')?>" class="img-fluid" alt=""></a>
                        <?php 
                            $post_setting = json_decode($value['setting']);
                        ?>
                        <div class="price">
                            <i class="fa fa-rupee" style="font-size:19px;"></i>
                            <?=$post_setting->sale_price?>
                        </div>
                        <div class="preview"><span>Preview course</span></div>
                    </figure>
                    <div class="wrapper">
                        <!-- <small>Category</small> -->
                        <h3><?=$value['p_title']?></h3>
                        <p><?=$value['p_excerpt_content']?></p>
                        <div class="rating"><i class="fa fa-star voted"></i><i class="fa fa-star voted"></i><i class="fa fa-star voted"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <small>(145)</small></div>
                    </div>
                    <ul>
                        <li><i class="icon_clock_alt"></i> 1h 30min</li>
                        <li><i class="icon_like"></i> 890</li>
                        <li><a href="course-detail.html">Enroll now</a></li>
                    </ul>
                </div>
            </div>
            <?php endforeach;endif; ?>
        </div>
        <!-- /row -->
        <p class="text-center"><a href="#0" class="btn_1 rounded add_top_30">Load more</a></p>
    </div>
    <!-- /container -->
</main>
<!--/main-->