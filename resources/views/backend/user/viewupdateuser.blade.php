@extends('layouts')
@section('content')
<h4 class="mb-4">Chỉnh sửa thông tin user</h4>
<form class="col-3"  action="{{URL::to('/updateuser/'.$user->id)}}" method="POST">
                    @csrf
                    <div class="form-group ">
                        <input type="text" name="name" class="form-control  form-control-sm" required
                            value="{{$user->name}}">

                    </div>

                    <div class="form-group ">
                        <input type="email" name="email" required class="form-control form-control-sm"
                            value="{{$user->email}}">

                    </div>

                    <button class="btn btn-primary fa-pull-right mr-2 w-60" type="submit">Lưu</button>
                </form>
@endsection()
