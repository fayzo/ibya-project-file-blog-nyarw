            <div class="card ">
                <div class="card-body">
                    <form>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon2"><i class="fa fa-key"></i></span>
                            </div>
                            <input type="UserName" class="form-control" id="CurrentPassword" placeholder="Current Password">
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon2"><i class="fa fa-key"></i> </span>
                            </div>
                            <input type="password" class="form-control" name="newPassword" id="newPassword" aria-describedby="helpId"
                                placeholder="New Password">
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon2"><i class="fa fa-key"></i> </span>
                            </div>
                            <input type="password" class="form-control" name="verificPassword" id="verificPassword" aria-describedby="helpId"
                                placeholder="Verify Password">
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="clearfix">
                                <a href="<?php echo PROFILE ;?>" class="float-left" style="padding: 8px; text-decoration: none; background: darkgray;color:white;border: none; border-radius: 4px;">Cancel</a>
                                <button type="submit" class="btn btn-danger float-right">Save Changes</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
