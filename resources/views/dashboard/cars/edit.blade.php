@extends('Layouts.main')
@section('title', 'Update car')
@section('content')

<div class="right_col" role="main">
				<div class="">
					<div class="page-title">
						<div class="title_left">
							<h3>Update Cars</h3>
						</div>

						<div class="title_right">
							<div class="col-md-5 col-sm-5  form-group pull-right top_search">
								<div class="input-group">
									<input type="text" class="form-control" placeholder="Search for...">
									<span class="input-group-btn">
										
									</span>
								</div>
							</div>
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="row">
						<div class="col-md-12 col-sm-12 ">
							<div class="x_panel">
								<div class="x_title">
									<h2>Add Car</h2>
									<ul class="nav navbar-right panel_toolbox">
										<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
										</li>
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
											<ul class="dropdown-menu" role="menu">
												<li><a class="dropdown-item" href="#">Settings 1</a>
												</li>
												<li><a class="dropdown-item" href="#">Settings 2</a>
												</li>
											</ul>
										</li>
										<li><a class="close-link"><i class="fa fa-close"></i></a>
										</li>
									</ul>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<br />
									<form method="post" action="{{route('dashboard.cars.update',$car->id)}}" enctype="multipart/form-data"
									 id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
									 @csrf
									 @method('put')
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="title">Title <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 " >
												<input type="text" id="cartitle"  class="form-control "  name="cartitle" value="{{$car->cartitle}}">
												@error('cartitle')
												
                                    {{ $message }}
									
                              @enderror	
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="content">Content <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<textarea id="content" name="description" required="required" class="form-control" value="{{$car->description }}">{{$car->description }}</textarea>
												@error('description')
                                                {{ $message }}
                                                  @enderror
											</div>
										</div>
										<div class="item form-group">
											<label for="luggage" class="col-form-label col-md-3 col-sm-3 label-align">Luggage <span class="required">*</span></label>
											<div class="col-md-6 col-sm-6 ">
												<input id="luggage" class="form-control" type="number" name="Laggage" required="required" value="{{ $car->Laggage }}">
												@error('Laggage')
												
												{{ $message }}
                                                    
										  @enderror	
											</div>
										</div>
										<div class="item form-group">
											<label for="doors" class="col-form-label col-md-3 col-sm-3 label-align">Doors <span class="required">*</span></label>
											<div class="col-md-6 col-sm-6 ">
												<input id="doors" class="form-control" type="number" name="Doors" required="required" value="{{ $car->Doors }}">
												@error('Doors')
												
												{{$message}}
												
										  @enderror
											</div>
										</div>
										<div class="item form-group">
											<label for="passengers" class="col-form-label col-md-3 col-sm-3 label-align">Passengers <span class="required">*</span></label>
											<div class="col-md-6 col-sm-6 ">
												<input id="passengers" class="form-control" type="number" name="Passenge" required="required" value="{{$car->Passenge }}">
												@error('Passenge')
												
												{{$message}}
												
										  @enderror
											</div>
										</div>
										<div class="item form-group">
											<label for="price" class="col-form-label col-md-3 col-sm-3 label-align">Price <span class="required">*</span></label>
											<div class="col-md-6 col-sm-6 ">
												<input id="price" class="form-control" type="number" name="price" required="required" value="{{ $car->price }}">
												@error('price')
												
												{{$message}}
												
										  @enderror
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align">Active</label>
											<div class="checkbox">
												<label>
													<input type="checkbox" class="flat" name="active" @checked($car->active) >
												</label>
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="image">Image <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="file" id="image" name="image" class="form-control" value=" {{ $car->image }}">
												
												<img src="{{ asset('assets/dashboard/images/'.$car->image) }}" alt="cars" style="width:150px;">
												@error('image')
												
												{{$message}}
												
										  @enderror
											</div>
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="title">Category <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
											<select name="category_id" id="">
											@foreach($categories as $category)
                                            <option  value="{{ $category->id }}" {{ $car->category_id ==  $category->id ? 'selected' : '' }} > {{ $category->categoryName }}</option>


                                                       @endforeach

                                         </select>
											</div>
										</div>
										<div class="ln_solid"></div>
										<div class="item form-group">
											<div class="col-md-6 col-sm-6 offset-md-3">
												<button class="btn btn-primary" type="button">Cancel</button>
												<button type="submit" class="btn btn-success">Update</button>
											</div>
										</div>

									</form>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>

			@endsection