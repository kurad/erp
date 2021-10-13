@extends('masters.layout.auth')

@section('content')
<div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">Discussions
            <a href="#" class="btn btn-primary pull-right">New Discussion</a>
          </div>
          </div>
          @foreach($discussions as $discussion)
      
      <div class="row user">

        <div class="col-md-12">
          <div class="tab-content">
            <div class="tab-pane active" id="user-timeline">
              <div class="timeline-post">
                <div class="post-media">
                  <div class="content">
                    <h5>{{$discussion->title}}</h5>
                    <p class="text-muted"><small>{{$discussion->created_at}}</small></p>
                  </div>
                </div>
                <div class="post-content">
                  <p>{{ $discussion->message }}.</p>

                  <p>By: {{ $discussion->master }}</p>
                </div>
                <ul class="post-utility">
                  <li class="likes"><a href="#"><i class="fa fa-fw fa-lg fa-thumbs-o-up"></i>Like</a></li>
                  <li class="shares"><a href="#"><i class="fa fa-fw fa-lg fa-share"></i>Share</a></li>
                  <li class="comments"><i class="fa fa-fw fa-lg fa-comment-o"></i> 5 Comments</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
          @endforeach
        </div>
      </div>
@endsection