@extends('admin-panel.layouts.app')

@section('content')

			<!-- page content -->

			<div class="right_col" role="main">
				<div class="">
					<div class="page-title">
						<div class="title_left">
							<h3>Product</h3>
						</div>

					</div>
					<div class="clearfix"></div>
					<div class="row">
						<div class="col-md-12 col-sm-12 ">
							<div class="x_panel">
								<div class="x_title">
									<h2>Products<small>Create</small></h2>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<br />
									<form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">

										@csrf
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="title">Title<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input  type="text" name="title" id="title"  class="form-control ">
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="price">Price<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="price" name="price"  class="form-control">
											</div>
										</div>


										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="description">Description<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="textarea" id="description" name="description"  class="form-control" cols="30" rows="10" required>
											</div> 
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="discount_price">Discount_Price<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="discount_price" name="discount_price"  class="form-control">
											</div> 
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="category_id">Category<span class="required">*</span></label>
											<div class="col-md-6 col-sm-6">
												<select name="category_id" id="category_id" class="form-control" required>
													<option value="">Select Category</option>
													@foreach($categories as $category)
														<option value="{{ $category->id }}">{{ $category->name }}</option>
													@endforeach
												</select>
											</div>
										</div>
										
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="sub_category_id">Sub Category<span class="required">*</span></label>
											<div class="col-md-6 col-sm-6">
												<select name="sub_category_id" id="sub_category_id" class="form-control" required>
													<option value="">Select Sub Category</option>
													<!-- Subcategories will be dynamically populated -->
												</select>
											</div>
										</div>
										

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="discount_price">Image<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="file" id="image" name="image"  class="form-control">
											</div> 
										</div>

	
										<div class="ln_solid"></div>
										<div class="item form-group">
											<div class="col-md-6 col-sm-6 offset-md-3">
												<button class="btn btn-primary" type="button">Cancel</button>
												<button class="btn btn-primary" type="reset">Reset</button>
												<button type="submit" class="btn btn-success">Submit</button>
											</div>
										</div>

									</form>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
			<!-- /page content -->
 
@endsection

<!-- JavaScript Code -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const categories = @json($categories); // Pass the categories data to JavaScript
        const subCategories = @json($subCategories); // Pass the subcategories data to JavaScript

        const categoryDropdown = document.getElementById('category_id');
        const subCategoryDropdown = document.getElementById('sub_category_id');

        categoryDropdown.addEventListener('change', function () {
            const selectedCategoryId = this.value;

            // Clear existing subcategories
            subCategoryDropdown.innerHTML = '<option value="">Select Sub Category</option>';

            if (selectedCategoryId) {
                // Filter subcategories based on the selected category
                const filteredSubCategories = subCategories.filter(sub => sub.category_id == selectedCategoryId);

                // Populate the subcategory dropdown
                filteredSubCategories.forEach(sub => {
                    const option = document.createElement('option');
                    option.value = sub.id;
                    option.textContent = sub.name;
                    subCategoryDropdown.appendChild(option);
                });
            }
        });
    });
</script>