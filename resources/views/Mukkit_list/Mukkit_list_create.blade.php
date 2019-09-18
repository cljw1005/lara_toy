@extends('Mukkit_list.Mukkit_list_layout')
@extends('Mukkit_list.extention_map')




@section('content')
<form method="POST" action="/Mukkit_list/store">
  @csrf
  <div class="form-group">
  <label for="exampleInputEmail1">음식점이름</label>
  <input type="text" class="form-control" name="name" id="exampleInputEmail1" placeholder="음식점이름을 입력하세요">
  </div>
  <div class="location_wrap">
    <div class="form-group">
    <span>위도</span>
    <input type="text" class="form-control" name="lat" id="exampleInputEmail3">
  </div>
  <div class="form-group">
    <span>경도</span>
    <input type="text" class="form-control" name="lng" id="exampleInputPassword3">
  </div>
  </div>

  <button type="submit" class="btn btn-success">등록</button>
</form>
@endsection
