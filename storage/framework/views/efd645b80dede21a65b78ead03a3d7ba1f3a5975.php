
<?php $__env->startSection('content'); ?>

<div class="rev-slider">
            <div class="fullwidthbanner-container">
                <div class="fullwidthbanner">
                    <div class="bannercontainer" >
                    <div class="banner" >
                            <ul>
								
								<?php $__currentLoopData = $slide; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <!-- THE FIRST SLIDE -->
                                 <li><img src="/sources/image/slide/<?php echo e($slide[2]->image); ?>" alt="clmm" width="100%"></li>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    </div>

                    <div class="tp-bannertimer"></div>
                </div>
            </div>
            <!--slider-->
        </div>
				
	
	<div class="container">
		<div id="content" class="space-top-none">
			<div class="main-content">
				<div class="space60">&nbsp;</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="beta-products-list">
							<h4>New Products</h4>
							<div class="beta-products-details">
								<p class="pull-left">Tìm thấy sản phẩm</p>
								<div class="clearfix"></div>
							</div>

							<div class="row">
                                    <?php $__currentLoopData = $new_product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $new): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-sm-3">
                                        <div class="single-item">
											<div class="signle-item-header">
												<a href="detail/<?php echo e($new->id); ?>"><img width="200" height="200"
												src="/sources/image/product/<?php echo e($new->image); ?>" alt=""></a>
											</div>
                                            <?php if($new->promotion_price!=0): ?>
                                                <div class="ribbon-wrapper">
													<div class="ribbon sale">Sale</div>
												</div>
                                            <?php endif; ?>
                                            
                                            <div class="single-item-body">
                                                <p class="single-item-title"><?php echo e($new->name); ?></p>
                                                <p class="single-item-price"> 
                                                <?php if($new->promotion_price==0): ?>
                                                    <span><?php echo e($new->unit_price); ?> dong</span> 
                                                <?php else: ?>
                                                    <span><?php echo e($new->unit_price); ?> dong</span>
                                                    <span><?php echo e($new->promotion_price); ?> dong</span>
                                                <?php endif; ?>
                                                </p>
                                            </div>
                                            <div class="single-item-caption">
                                                <a class="add-to-cart pull-left" href="shopping_cart.html">
													<i class="fa fa-shopping-cart"></i>
												</a>
												
                                                <a class="beta-btn primary" href="detail/<?php echo e($new->id); ?>">Details <i 
												class="fa fa-chevron-right"></i></a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
							<div class="row"><?php echo e($new_product->links()); ?></div>
						</div> <!-- .beta-products-list -->

						<div class="space50">&nbsp;</div>

						<div class="beta-products-list">
							<h4>Top Products</h4>
							<div class="beta-products-details">
								<p class="pull-left">438 styles found</p>
								<div class="clearfix"></div>
							</div>
							<div class="row">
								<div class="col-sm-3">
									<div class="single-item">
										<div class="single-item-header">
											<a href="product.html"><img src="sources/assets/dest/images/products/1.jpg" alt=""></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">Sample Woman Top</p>
											<p class="single-item-price">
												<span>$34.55</span>
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="single-item">
										<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>

										<div class="single-item-header">
											<a href="product.html"><img src="sources/assets/dest/images/products/2.jpg" alt=""></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">Sample Woman Top</p>
											<p class="single-item-price">
												<span class="flash-del">$34.55</span>
												<span class="flash-sale">$33.55</span>
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="single-item">
										<div class="single-item-header">
											<a href="product.html"><img src="sources/assets/dest/images/products/3.jpg" alt=""></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">Sample Woman Top</p>
											<p class="single-item-price">
												<span>$34.55</span>
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="single-item">
										<div class="single-item-header">
											<a href="product.html"><img src="sources/assets/dest/images/products/3.jpg" alt=""></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">Sample Woman Top</p>
											<p class="single-item-price">
												<span>$34.55</span>
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="space40">&nbsp;</div>
							<div class="row">
								<div class="col-sm-3">
									<div class="single-item">
										<div class="single-item-header">
											<a href="product.html"><img src="sources/assets/dest/images/products/1.jpg" alt=""></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">Sample Woman Top</p>
											<p class="single-item-price">
												<span>$34.55</span>
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="single-item">
										<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>

										<div class="single-item-header">
											<a href="product.html"><img src="sources/assets/dest/images/products/2.jpg" alt=""></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">Sample Woman Top</p>
											<p class="single-item-price">
												<span class="flash-del">$34.55</span>
												<span class="flash-sale">$33.55</span>
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="single-item">
										<div class="single-item-header">
											<a href="product.html"><img src="sources/assets/dest/images/products/3.jpg" alt=""></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">Sample Woman Top</p>
											<p class="single-item-price">
												<span>$34.55</span>
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="single-item">
										<div class="single-item-header">
											<a href="product.html"><img src="sources/assets/dest/images/products/3.jpg" alt=""></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">Sample Woman Top</p>
											<p class="single-item-price">
												<span>$34.55</span>
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
							</div>
						</div> <!-- .beta-products-list -->
					</div>
				</div> <!-- end section with sidebar and main content -->


			</div> <!-- .main-content -->
		</div> <!-- #content -->
		
	</div> <!-- .container -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\HocPHPLa\Linh\resources\views/page/trangchu.blade.php ENDPATH**/ ?>