@extends('admin.main')
@section('title','user setting')
@section('content')
<h1>User</h1>
<hr>
<div class="col-md-6">
	<form method="post" action="{{ route('admin.user.setting') }}>
		<div class="card-mb-3">
			<div class="card-header"><h5>Setting</h5></div>
			<div class="card-body">
				{{ csrf_field() }}

				<div class="form-group form-label-group">
					<input type="text" name="name"
					class="form-control"
					value="{{ old('name',$dt->name) }}"
					id="iName" placeholder="name" required>
					<label for="iName">Name</label>

				</div>

				<div class="form-group form-label-group">
					<input type="text" name="email"
					class="form-control"
					value="{{ old('email',$dt->email) }}"
					id="iEmail" placeholder="Email" required>
					<label for="iEmail">Email</label>
				</div>

				<div class="form-group form-label-group">
					<input type="password" name="password"
					class="form-control"
					<label for="iPassword">Password</label>
					<div class="from-text text-muted">
						<small>kosongkan password apabila tidak diubah.</small>
					</div>

					<dir class="form-group form-label-group">
						<input type="password" name="repassword"
						id="iRePassword" placeholder="Re Password">
						<label for="iRePassword">Re Password</label>
					</div>
                    </div>

                    <div class="card-footer">
                    	<button type="sumbit" class="btn btn-primary shadow-sm">Update</button>
                    </div>
					</div>
				</div>
			</div>
		</div>
	</form>
</div>
@endsection