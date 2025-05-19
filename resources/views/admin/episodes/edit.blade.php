<form id="edit_blog_form" action="{{route('admin.episodes.update')}}">
  @csrf
  <input type="hidden" name="episode_id" value="{{base64_encode($data->id)}}">
  <div class="modal-header">
    <h4 class="modal-title">Edit Blog</h4>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div class="modal-body">
    <div class="row">
      <div class="col-md-8">
        <div class="edit-mblog-image-wrapper file-set" style="background-image: url({{URL::to('/public/storage/episodes/'.$data->image)}});">
          <input type="file" name="edit_mblog_image" accept="image/*" />
          <div class="close-btn">×</div>
        </div>
      </div>
      <div class="col-md-4 blog-img-alt">
        <div class="form-group">
          <label>Image alt:</label>
          <input type="text" class="form-control" name="image_alt" value="{{$data->img_alt}}" required>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-7">
        <div class="form-group">
          <label>Title</label>
          <input type="text" class="form-control" value="{{$data->title}}" name="title" required>
        </div>
      </div>
      <div class="col-md-5">
        <div class="form-group">
          <label>Playlist</label>
          <select class="form-control" name="playlist_id" required>
            <option value="">Select</option>
            @foreach ($data->playlists as $val)
            <option value="{{ $val->id }}" {{$val->id == $data->playlist_id ? 'selected' : ''}}>{{ $val->title }}</option>
            @endforeach
          </select>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <label>Visit Link</label>
          <input type="link" class="form-control" value="{{$data->visit_link}}" name="visit_link" required>
        </div>
      </div>
    </div>
  </div>
  <div class="modal-footer justify-content-between">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    <button type="submit" class="btn btn-primary">Save changes</button>
  </div>
</form>