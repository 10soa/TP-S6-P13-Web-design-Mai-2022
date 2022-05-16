<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3>Causes</h3>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
						<div class="col-md-12 col-sm-12 ">
							<div class="x_panel">
								<div class="x_title">
									<h2>Modification</h2>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<br />
									<form action="traitement.php?updateCause=0" method="post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">titre <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
                                                <input type="hidden" name="id" value=<?php echo $_GET['id']; ?>>
												<input type="text" id="last-name" name="titre" value="<?php echo $_GET['titre'] ?>" required="required" class="form-control">
											</div>
										</div>
										<div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Info</label>
											<div class="col-md-6 col-sm-6 ">
											 <textarea id="w3review" name="info" rows="4" cols="250" ></textarea>
											</div>
										</div>
										<div class="ln_solid"></div>
										<div class="item form-group">
											<div class="col-md-6 col-sm-6 offset-md-3">
												<button type="submit" class="btn btn-success">Valider</button>
											</div>
										</div>

									</form>
								</div>
							</div>
						</div>
					</div>
</div>