        <form method="post" action="<?=hlien("contact","save")?>">
		<input type="hidden" name="con_id" id="con_id" value="<?= $id ?>" />
                        <div class='form-group'>
                            <label for='contact_id'>Act_id</label>
                            <input id='contact_id' name='contact_id' type='text' size='50' value='<?=mhe($contact_id)?>'  class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for='contact_lastname'>Act_lastname</label>
                            <input id='contact_lastname' name='contact_lastname' type='text' size='50' value='<?=mhe($contact_lastname)?>'  class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for='contact_firstname'>Act_firstname</label>
                            <input id='contact_firstname' name='contact_firstname' type='text' size='50' value='<?=mhe($contact_firstname)?>'  class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for='contact_photo'>Act_photo</label>
                            <input id='contact_photo' name='contact_photo' type='text' size='50' value='<?=mhe($contact_photo)?>'  class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for='contact_description'>Act_description</label>
                            <input id='contact_description' name='contact_description' type='text' size='50' value='<?=mhe($contact_description)?>'  class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for='contact_birth'>Act_birth</label>
                            <input id='contact_birth' name='contact_birth' type='text' size='50' value='<?=mhe($contact_birth)?>'  class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for='contact_postaladdress'>Act_postaladdress</label>
                            <input id='contact_postaladdress' name='contact_postaladdress' type='text' size='50' value='<?=mhe($contact_postaladdress)?>'  class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for='contact_email'>Act_email</label>
                            <input id='contact_email' name='contact_email' type='text' size='50' value='<?=mhe($contact_email)?>'  class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for='contact_telephone'>Act_telephone</label>
                            <input id='contact_telephone' name='contact_telephone' type='text' size='50' value='<?=mhe($contact_telephone)?>'  class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for='contact_mobile'>Act_mobile</label>
                            <input id='contact_mobile' name='contact_mobile' type='text' size='50' value='<?=mhe($contact_mobile)?>'  class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for='contact_createdat'>Act_createdat</label>
                            <input id='contact_createdat' name='contact_createdat' type='text' size='50' value='<?=mhe($contact_createdat)?>'  class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for='contact_user'>Act_user</label>
                            <input id='contact_user' name='contact_user' type='text' size='50' value='<?=mhe($contact_user)?>'  class='form-control' />
                        </div>
		<input class="btn btn-success" type="submit" name="btSubmit" value="Enregistrer" />
	</form>              