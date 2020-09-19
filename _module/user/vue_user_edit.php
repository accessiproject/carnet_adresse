        <form method="post" action="<?=hlien("user","save")?>">
		<input type="hidden" name="use_id" id="use_id" value="<?= $id ?>" />
                        <div class='form-group'>
                            <label for='user_id'>_id</label>
                            <input id='user_id' name='user_id' type='text' size='50' value='<?=mhe($user_id)?>'  class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for='user_lastname'>_lastname</label>
                            <input id='user_lastname' name='user_lastname' type='text' size='50' value='<?=mhe($user_lastname)?>'  class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for='user_firstname'>_firstname</label>
                            <input id='user_firstname' name='user_firstname' type='text' size='50' value='<?=mhe($user_firstname)?>'  class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for='user_email'>_email</label>
                            <input id='user_email' name='user_email' type='text' size='50' value='<?=mhe($user_email)?>'  class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for='user_username'>_username</label>
                            <input id='user_username' name='user_username' type='text' size='50' value='<?=mhe($user_username)?>'  class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for='user_password'>_password</label>
                            <input id='user_password' name='user_password' type='text' size='50' value='<?=mhe($user_password)?>'  class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for='user_role'>_role</label>
                            <input id='user_role' name='user_role' type='text' size='50' value='<?=mhe($user_role)?>'  class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for='user_createdat'>_createdat</label>
                            <input id='user_createdat' name='user_createdat' type='text' size='50' value='<?=mhe($user_createdat)?>'  class='form-control' />
                        </div>
		<input class="btn btn-success" type="submit" name="btSubmit" value="Enregistrer" />
	</form>              