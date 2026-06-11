@foreach($data as $key => $val)
<tr>
  <td>{{++$key}}</td>
  <td>{{$val->slug}}</td>
  <td>{{$val->heading}}</td>
  <td>{{$val->category ? $val->category->name : ""}}</td>
  <td>{{$val->author ? $val->userauthor->name : ""}}</td>
  <td>
    @switch($val->status)
      @case('0')
        <span class="badge badge-warning">Pending</span>
        @break

      @case('1')
        <span class="badge badge-success">Published</span>
        @break

      @case('2')
        <span class="badge badge-danger">Rejected</span>
        @break

      @default
        @break

    @endswitch
  </td>
  <td class="text-right"><small>{{date('d-M-Y | h:i A', strtotime($val->created_at))}}</small></td>

  <td class="text-right">
    @if($val->status == '0')
      <div class="btn-group">
        <button type="button" class="btn btn-info btn-sm">Action</button>
        <button type="button" class="btn btn-info btn-sm dropdown-toggle dropdown-icon" data-toggle="dropdown" aria-expanded="false">
          <span class="sr-only">Action</span>
        </button>
        <div class="dropdown-menu dropdown-menu-right table-dropdown" role="menu">

          <a class="dropdown-item editBlog" href="javascript:void(0)" title="Edit Blog" data-id="{{base64_encode($val->id)}}"><i class="fas fa-edit"></i>Edit</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item text-danger deleteBlog" href="javascript:void(0)" title="Delete Blog" data-id="{{base64_encode($val->id)}}"><i class="fas fa-trash"></i>Delete</a>


        </div>
      </div>
    @endif
  </td>
</tr>
@endforeach
@if(count($data) == 0)
<tr>
  <td colspan="8">No Article Found.</td>
</tr>
@endif