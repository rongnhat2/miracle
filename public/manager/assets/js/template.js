const Template = { 
	Executive: {
		Create(){
			return `<input type="hidden" class="form-control data-id">
					<div class="row">
						<div class="col-md-10 offset-1">
							<div class="card">
								<div class="card-body">  
									<ul class="nav nav-tabs" id="myTab" role="tablist">
									    <li class="nav-item">
									        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Tiếng việt</a>
									    </li>
									    <li class="nav-item">
									        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Tiếng anh</a>
									    </li> 
									</ul>
									<div class="tab-content m-t-15" id="myTabContent">
									    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
									        <div class="card">
					                            <div class="card-body">
					                                <div class="row align-items-center">
					                                    <div class="col-md-5">
					                                        <div class="form-group row">
						                                        <label class="col-sm-4 col-form-label control-label">Hình ảnh</label> 
						                                        <div class="col-md-8">
																	<div class="custom-file">
																        <input type="file" class="custom-file-input" id="customFile">
																        <label class="custom-file-label" for="customFile">Choose file</label>
																    </div> 
						                                        </div>
						                                    </div>
					                                        <div class="form-group row">
						                                        <label class="col-sm-4 col-form-label control-label">Vị trí</label>
						                                        <div class="col-md-8">
						                                            <input type="text" class="form-control input-type-preview" data-input="position-preview" name="inputRequired" placeholder="">
						                                        </div>
						                                    </div>
					                                        <div class="form-group row">
						                                        <label class="col-sm-4 col-form-label control-label">Họ và tên</label>
						                                        <div class="col-md-8">
						                                            <input type="text" class="form-control input-type-preview" data-input="name-preview" name="inputRequired" placeholder="">
						                                        </div>
						                                    </div> 
					                                        <div class="form-group row">
						                                        <label class="col-sm-4 col-form-label control-label">Hiển thị</label>
						                                        <div class="col-md-8">
						                                            <div class="radio">
																	    <input id="radio1" name="executive" type="radio" checked="">
																	    <label for="radio1">Lãnh đạo</label>
																	</div>
																	<div class="radio">
																	    <input id="radio2" name="executive" type="radio">
																	    <label for="radio2">Cán bộ</label>
																	</div>
						                                        </div>
						                                    </div> 
					                                    </div>
					                                    <div class="col-md-7 border-left">
					                                        <div class="row">
					                                        	<div class="I-executive">
					                                        		<div class="executive-wrapper"> 
						                                        		<div class="executive-01"> 
							                                        		<div class="exe-image"> </div>
							                                        		<div class="exe-position" data-output="position-preview"></div>
							                                        		<div class="exe-name" data-output="name-preview"></div>
						                                        		</div>
					                                        		</div>
					                                        	</div>
					                                        	<div class="I-executive">
					                                        		<div class="executive-wrapper"> 
						                                        		<div class="executive-02"> 
						                                        			<div class="exe-bg" style="background-image: url('/manager/assets/images/custom/executive-bg.png')"></div>
							                                        		<div class="exe-image"> </div>
							                                        		<div class="exe-content"> 
								                                        		<div class="exe-position" data-output="position-preview"></div>
								                                        		<div class="exe-name" data-output="name-preview"></div>
							                                        		</div>
						                                        		</div>
					                                        		</div>
					                                        	</div>
					                                        </div>
					                                    </div>
					                                </div>
					                            </div>
					                        </div>
									    </div>
									    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
									        <div class="card">
					                            <div class="card-body">
					                                <div class="row align-items-center">
					                                    <div class="col-md-5">
					                                        <div class="form-group row">
						                                        <label class="col-sm-4 col-form-label control-label">Hình ảnh</label> 
						                                        <div class="col-md-8">
																	<div class="custom-file">
																        <input type="file" class="custom-file-input" id="customFile">
																        <label class="custom-file-label" for="customFile">Choose file</label>
																    </div> 
						                                        </div>
						                                    </div>
					                                        <div class="form-group row">
						                                        <label class="col-sm-4 col-form-label control-label">Vị trí</label>
						                                        <div class="col-md-8">
						                                            <input type="text" class="form-control input-type-preview" data-input="position-preview" name="inputRequired" placeholder="">
						                                        </div>
						                                    </div>
					                                        <div class="form-group row">
						                                        <label class="col-sm-4 col-form-label control-label">Họ và tên</label>
						                                        <div class="col-md-8">
						                                            <input type="text" class="form-control input-type-preview" data-input="name-preview" name="inputRequired" placeholder="">
						                                        </div>
						                                    </div> 
					                                        <div class="form-group row">
						                                        <label class="col-sm-4 col-form-label control-label">Hiển thị</label>
						                                        <div class="col-md-8">
						                                            <div class="radio">
																	    <input id="radio1" name="executive" type="radio" checked="">
																	    <label for="radio1">Lãnh đạo</label>
																	</div>
																	<div class="radio">
																	    <input id="radio2" name="executive" type="radio">
																	    <label for="radio2">Cán bộ</label>
																	</div>
						                                        </div>
						                                    </div> 
					                                    </div>
					                                    <div class="col-md-7 border-left">
					                                        <div class="row">
					                                        	<div class="I-executive">
					                                        		<div class="executive-wrapper"> 
						                                        		<div class="executive-01"> 
							                                        		<div class="exe-image"> </div>
							                                        		<div class="exe-position" data-output="position-preview"></div>
							                                        		<div class="exe-name" data-output="name-preview"></div>
						                                        		</div>
					                                        		</div>
					                                        	</div>
					                                        	<div class="I-executive">
					                                        		<div class="executive-wrapper"> 
						                                        		<div class="executive-02"> 
						                                        			<div class="exe-bg" style="background-image: url('/manager/assets/images/custom/executive-bg.png')"></div>
							                                        		<div class="exe-image"> </div>
							                                        		<div class="exe-content"> 
								                                        		<div class="exe-position" data-output="position-preview"></div>
								                                        		<div class="exe-name" data-output="name-preview"></div>
							                                        		</div>
						                                        		</div>
					                                        		</div>
					                                        	</div>
					                                        </div>
					                                    </div>
					                                </div>
					                            </div>
					                        </div>
									    </div> 
									</div>
							        <div class="form-group text-right">
							            <button class="btn btn-defauld mr-2 tab-action" atr="Table">Hủy</button>
							            <button class="btn btn-primary full-tab-action" atr="Create">Xác nhận</button>
							        </div>
							    </div>
						    </div>
						</div>
				    </div>`
		},  
		Delete(){
			return `<div class="wrapper d-flex justify-center"><img src="/manager/images_global/funny.gif" alt=""></div>`
		}
	}, 
}