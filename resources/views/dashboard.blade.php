@extends('layout.app')

@section('content')
<!-- new -->
<section class="vh-200 gradient-custom-2">
    <style>
        .gradient-custom-2 {
  /* fallback for old browsers */
  background: #7e40f6;

  /* Chrome 10-25, Safari 5.1-6 */
  background: -webkit-linear-gradient(
    to right,
    rgba(126, 64, 246, 1),
    rgba(80, 139, 252, 1)
  );

  /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
  background: linear-gradient(
    to right,
    rgba(126, 64, 246, 1),
    rgba(80, 139, 252, 1)
  );
}

.mask-custom {
  background: rgba(24, 24, 16, 0.2);
  border-radius: 2em;
  backdrop-filter: blur(25px);
  border: 2px solid rgba(255, 255, 255, 0.05);
  background-clip: padding-box;
  box-shadow: 10px 10px 10px rgba(46, 54, 68, 0.03);
}
    </style>
    <br><br>
    <form action="{{route('saveTitle')}}" method="POST">
        @csrf
    <div class="input-group mb-3 container">
    <input type="text" name="title" class="form-control" placeholder="Enter your article title here" aria-label="Example text with button addon" aria-describedby="button-addon1">
    <button class="btn btn-dark btn-lg" type="submit" id="button-addon1">Add</button>

    </div>
    </form>
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-12 col-xl-10">

        <div class="card mask-custom">
          <div class="card-body p-4 text-white">

            <div class="text-center pt-3 pb-2">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-todo-list/check1.webp"
                alt="Check" width="60">
              <h2 class="my-4">Article List</h2>
            </div>

            <table class="table text-white mb-0">
              <thead>
                <tr>
                  <th scope="col">Created By</th>
                  <th scope="col">Article Title</th>
                  <th scope="col">Actions</th>
                </tr>
              </thead>
              <tbody>
              @foreach($posts as $post)
                <tr class="fw-normal">
                  <th>
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3-bg.webp"
                      alt="avatar 1" style="width: 45px; height: auto;">
                    <span class="ms-2">{{$post->user->name}}</span>
                  </th>
                  <td class="align-middle">
                    <span>{{$post->title}}</span>
                  </td>
                  <td class="align-middle">
                  <a href="/edit/{{$post->id}}" class="text-info" data-mdb-toggle="tooltip" title="Edit todo"><i
                      class="fas fa-pencil-alt me-3"></i></a>
                    @if(auth()->user()->id == $post->user->id)
                    <a href="/delete/{{$post->id}}" data-mdb-toggle="tooltip" title="Remove"><i
                        class="fas fa-trash-alt fa-lg text-warning"></i></a>
                    @endif
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>


          </div>
        </div>

      </div>
    </div>
  </div>
</section>

@endsection