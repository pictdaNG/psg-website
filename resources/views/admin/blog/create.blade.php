@extends('layouts.admin')

@section('content')

  <div class="element-wrapper">
      <h6 class="element-header">
        Create a News or Event
      </h6>
      <div class="element-box">
        <form method="post" action="{{ route('blog.store') }}">
          {{ csrf_field() }}
          <!-- <h5 class="form-header">
            Default Layout
          </h5>
          <div class="form-desc">
            Discharge best employed your phase each the of shine. Be met even reason consider logbook redesigns. Never a turned interfaces among asking
          </div> -->
          <div class="form-group">
            <label for=""> Post Title</label>
            <input class="form-control" placeholder="Enter Post Title" type="text" name="title">
          </div>
          
          <div class="form-group">
            <label> Post Body</label>
            <textarea cols="80" id="ckeditor1" rows="10" name="body"></textarea>
          </div>

          <div class="form-group">
            <label>Select Feature Image</label>
            <input class="form-control" type="file" name="feature_image">
          </div>
          
      
          <div class="form-buttons-w">
            <button class="btn btn-primary" type="submit"> Submit</button>
          </div>
        </form>
      </div>
    </div>
@endsection


