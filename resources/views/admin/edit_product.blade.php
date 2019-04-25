@extends('admin_layout')
@section('admin_content')
<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a>
					<i class="icon-angle-right"></i> 
				</li>
				<li>
					<i class="icon-edit"></i>
					<a href="#">Edit Category</a>
				</li>
			</ul>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Edit Category</h2>
						</div>
						
					<div class="box-content">
					<form class="form-horizontal" action="{{ url('/edit_product',$product_info->product_id) }}" method="post">
						
							{{ csrf_field() }}
						   <fieldset>
							<div class="control-group">
							  <label class="control-label" for="date01"> Product Name</label>
							  <div class="controls">
			<input type="text" class="input-xlarge" name="product_name" required="">
							  </div>
							</div>
							<div class="control-group">
								<label class="control-label" for="selectError3">Product category</label>
								<div class="controls">
									<select id="selectError3" name="product_id">
										<option>select product</option>
										 <?php
                               $all_published_category=DB::table('tbl_products')
                                         ->where('publication_status',1)
                                         ->get();

                                       foreach ($all_published_product as $v_product){?>
										<option value="{{$v_product->product_id}}">{{$v_product->product_name}}</option>
									<?php } ?>
										</select>
									</div>
								</div>
								<div class="control-group">
								<label class="control-label" for="selectError3"  >Manufature Name</label>
								<div class="controls">
									<select id="selectError3" name="manufacture_id">
										<option>select manufacture</option>
													 <?php
                               $all_published_manufacture=DB::table('tbl_manufacture')
                                         ->where('publication_status',1)
                                         ->get();

                                       foreach ($all_published_manufacture as $v_manufacture){?>
										<option value="{{$v_manufacture->manufacture_id}}">{{$v_manufacture->manufacture_name}}</option>
									<?php } ?>
										</select>
									</div>
								</div>
						          
							<div class="control-group hidden-phone">
							<label class="control-label" for="textarea2"> Product short description </label>
							  <div class="controls">
								<textarea class="cleditor" name="product_short_description" rows="3"></textarea>
							  </div>
							</div>
							<div class="control-group hidden-phone">
							<label class="control-label" for="textarea2"> Product Long description </label>
							  <div class="controls">
								<textarea class="cleditor" name="product_long_description" rows="3"></textarea>
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="date01"> Product Price</label>
							  <div class="controls">
						<input type="text" class="input-xlarge" name="product_price" required="">
							  </div>
							</div>
							<div class="control-group">
							<label class="control-label" for="fileInput">Image</label>
							<div class="control-group">
								<input class="input-file uniform_on" name="product_image" id="fileInput" type="file">
								</div>
								</div>
								<div class="control-group">
							  <label class="control-label" for="date01"> Product Size</label>
							  <div class="controls">
						<input type="text" class="input-xlarge" name="product_size" required="">
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="date01"> Product Color</label>
							  <div class="controls">
						<input type="text" class="input-xlarge" name="product_color" required="">
							  </div>
							</div>
							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2"> Publication status </label>
							  <div class="controls">
								<input type="checkbox" name="publication_status" value="1" >
							  </div>
							</div>
								<div class="form-actions">
							<button type="submit" class="btn btn-primary">Add Product</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>   

					</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->
@endsection
