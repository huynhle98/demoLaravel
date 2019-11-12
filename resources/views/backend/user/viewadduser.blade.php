@extends('layouts')
@section('content')
<h4 class="mb-4">Thêm user</h4>
<form class="col-3"  action="{{URL::to('/adduser')}}" method="POST">
                    @csrf
                    <div class="form-group ">
                        <input type="text" name="name" class="form-control  form-control-sm" required
                            placeholder="User Name">

                    </div>

                    <div class="form-group ">
                        <input type="email" name="email" required class="form-control form-control-sm"
                            placeholder="Email ...">

                    </div>

                    <button class="btn btn-primary fa-pull-right mr-2 w-60" type="submit">Thêm</button>
                </form>
@endsection()
