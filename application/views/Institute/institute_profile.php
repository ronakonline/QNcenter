<div class="page has-sidebar-left">
	<header class="blue accent-3 relative">
		<div class="container-fluid text-white">
			<div class="row p-t-b-10 ">
				<div class="col">
					<h4>
						<i class="icon-building-o"></i>
						  Institute Profile
					</h4>
				</div>
			</div>
		</div>
	</header>
	<?php
		echo errormsg();
		echo successmsg();
	?>
	<div class="container-fluid animatedParent animateOnce">
        <div class="animated fadeInUpShort">
            <div class="row my-3">
                <div class="col-md-7  offset-md-2">
                    <form action="#">
                        <div class="card no-b  no-r">
                            <div class="card-body">
                                <h5 class="card-title">About Institute</h5>
                                <div class="form-row">
                                    <div class="col-md-8">
                                        <div class="form-group m-0">
                                            <label for="name" class="col-form-label s-12">INSTITUTE NAME</label>
                                            <input id="name" class="form-control r-0 light s-12 " type="text" value="">
                                        </div>
                                        <div class="form-group m-0">
                                            <label for="email" class="col-form-label s-12">EMAIL</label>
                                            <input id="email" class="form-control r-0 light s-12 " type="email" value="">
                                        </div>
                                        <div class="form-group m-0">
                                            <label for="address" class="col-form-label s-12">ADDRESS</label>
                                            
                                            <textarea rows="5" class="form-control r-0 light s-12 "></textarea>
                                        </div>
                                        

                                        
                                    </div>
                                    <div class="col-md-3 offset-md-1">
                                        <input hidden id="file" name="file"/>
                                        <div class="dropzone dropzone-file-area pt-4 pb-4" id="fileUpload">
                                            <div class="dz-default dz-message">
                                                <span>Drop A Profile of user</span>
                                                <div>You can also click to open file browser</div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="form-row mt-1">
                                    <div class="form-group col-4 m-0">
                                        <label for="email" class="col-form-label s-12"><i class="icon-envelope-o mr-2"></i>Email</label>
                                        <input id="email" class="form-control r-0 light s-12 " type="text">
                                    </div>

                                    <div class="form-group col-4 m-0">
                                        <label for="phone" class="col-form-label s-12"><i class="icon-phone mr-2"></i>Phone</label>
                                        <input id="phone" class="form-control r-0 light s-12 " type="text">
                                    </div>
                                    <div class="form-group col-4 m-0">
                                        <label for="mobile" class="col-form-label s-12"><i class="icon-mobile-phone mr-2"></i>Created AT</label>
                                        <input id="Created" class="form-control r-0 light s-12 " type="text" disabled="true">
                                    </div>

                                </div>
                            </div>
                            
                            
                            <hr>
                            <div class="card-body">
                                <button type="submit" class="btn btn-primary btn-lg"><i class="icon-save mr-2"></i>Save Data</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


</div>

