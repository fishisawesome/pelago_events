@extends('layout')

@section('content')

<div class="panel panel-primary">
	<div class="panel-heading">
	List of Existing Users
	</div>
	<div class="panel-body">
	<meta id="token" name="token" value="{{ csrf_token() }}">
	<users></users>
	</div>

	<div class="panel-footer">
	<button type="button" class="btn btn-success" data-toggle="modal" data-target=".create-user-modal">Add User</button>
	</div>

</div>


<template id="users-template">
	<table class="table">
		<thead>
			<tr>
				<th>Name</th>
				<th>Telephone Number</th>
				<th>Nationality</th>
				<th>Options</th>
			</tr>
		</thead>
		<tbody v-for="user in list">
			<tr>
				<td>@{{ user.name }}</td>
				<td>@{{ user.telephone }}</td>
				<td>@{{ user.nationality }}</td>
				<td>
					<button class="btn btn-sm btn-danger" @click.prevent="deleteUser(user)">
						<i class="fa fa-trash-o"></i>
					</button>
				</td>
			</tr>
		</tbody>
	</table>
	@include('users.create_user_modal')
</template>
@stop