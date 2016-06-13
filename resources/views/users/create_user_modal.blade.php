<div class="modal fade create-user-modal" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Create New User</h4>
			</div>
			<form @submit.prevent="submitUser">

			<div class="modal-body">
				<fieldset>
					<div class="form-group">
						<label class="col-lg-3 text-right control-label">Name</label>
						<div class="col-lg-6">
							<input type="text" name="name" class="form-control" v-model="name" required>
							<div class="help-block" v-show="!name">
							Please enter your name.
							</div>
						</div>
					</div>
				</fieldset>

				<fieldset>
					<div class="form-group">
						<label class="col-lg-3 text-right control-label">Telephone No.</label>
						<div class="col-lg-6">
							<input type="text" name="name" class="form-control" v-model="telephone" required>
							<div class="help-block" v-show="!telephone">
							Please enter your telephone number.
							</div>
						</div>
					</div>
				</fieldset>

				<fieldset>
					<div class="form-group">
						<label class="col-lg-3 text-right control-label">Nationality</label>
						<div class="col-lg-6">
							<select name="nation_id" class="form-control" required v-model="nation_id">
								<option value=""></option>
								@foreach($nations as $nation)
								<option value="{{ $nation->id }}">{{ $nation->name }}</option>
								@endforeach
							</select>
							<div class="help-block" v-show="!nationality">
							Please select a nationality.
							</div>
						</div>
					</div>
				</fieldset>

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-success">Save</button>
			</div>

			</form>
		</div>
	</div>
</div>