@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4" style="font-weight: bold;">Edit Pengguna</h1>

    <form method="POST" action="{{ route('userUpdate') }}">
        @method('PUT')
        @csrf

        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <input type="hidden" name="id" value="{{ $user->id }}">
                </div>

                <div class="form-group">
                    <label for="fullname">Full Name:</label>
                    <input type="text" name="fullname" id="fullname" class="form-control" value="{{ $user->fullname }}">
                </div>

                <div class="form-group">
                    <label for="username">User Name:</label>
                    <input type="text" name="username" id="username" class="form-control" value="{{ $user->username }}">
                </div>

                <div class="form-group">
                    <label for="phoneNumber">Phone Number:</label>
                    <input type="text" name="phoneNumber" id="phoneNumber" class="form-control"
                        value="{{ $user->phoneNumber }}">
                </div>

                <div class="form-group">
                    <label for="address">Address:</label>
                    <input type="text" name="address" id="address" class="form-control" value="{{ $user->address }}">
                </div>

                <div class="form-group">
                    <label for="agama">Agama:</label>
                    <input type="text" name="agama" id="agama" class="form-control" value="{{ $user->agama }}">
                </div>

                <div class="form-group">
                    <label for="birthDate">Birth Date:</label>
                    <input type="text" name="birthDate" id="birthDate" class="form-control"
                        value="{{ $user->birthDate }}">
                </div>

                <div class="form-group">
                    <label for="gender">Gender:</label>
                    <select name="gender" id="gender" class="form-control">
                        <option value="1" {{ $user->gender === 1 ? 'selected' : '' }}>Pria</option>
                        <option value="2" {{ $user->gender === 2 ? 'selected' : '' }}>Wanita</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password" class="form-control">
                </div>

                <div class="text-center mt-2">
                    <button class="btn btn-primary">Update</button>
                    <a href="{{ route('user') }}" class="btn btn-secondary">Back</a>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
// Nama: Fauzan Ramadhana Sadikin
// Nim: 6706220054
// Kelas: D3IF 4603