<!-- @extends('wel')
@section('content')
<center>

 Button trigger modal
<button type="button" class="btn btn-outline-danger fw-bold fs-4 rounded-pill" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Add Record
</button>

Modal 
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">crud</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="inserData" method="POST" enctype="multipart/form-data">
          @ csrf  -->
            <!-- <div class="mb-2">
                <input type="text" placeholder="Enter Hospital Name" class="form-control" name="pname" id=""></input>
            </div>
            <div class="mb-2">
                <input type="text" placeholder="Enter Hospital City" class="form-control" name="pcity" id=""></input>
            </div>
            <div class="mb-2">
                <input type="file" class="form-control" name="image" id=""></input>
            </div>
            <button type="submit" class="btn btn-outline-danger fw-bold fs-4 rounded-pill">Add Record</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button> -->
        
      <!-- </div>
    </div>
  </div>
</div>
</center>
<div class="container">
<table class="table mt-5 "  >
  <thead class="bg-danger text-white fw-bold ">
    <th>Id</th>
    <th>Hospital Name</th>
    <th>Hospital City</th>
    <th>Hospital Image</th>
  </thead>
  <tbody class="text-danger bg-light fs-4">
    @foreach($data as $item)
    <tr>
    <td class="pt-5">{{$item['Id']}}</td>
    <td class="pt-5">{{$item['PName']}}</td>
    <td class="pt-5">{{$item['PCity ']}}</td>
    <td ><img src="images/{{$item['PImage']}}" width="100px" height="100px" alt=""</td>
    </tr>
    @endforeach
  </tbody>
</table>
</ div> -->
<!-- @endsection  --> 