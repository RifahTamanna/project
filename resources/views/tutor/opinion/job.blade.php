@extends('layouts.frontend.app', ['activePage' => 'opinion', 'titlePage' => __('OPINION')])

@push('css')

@endpush

@section('content')
<div class="tutor-hub-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="tutor-search">
                    <h3>Job Post</h3>
                </div>
            </div>
             
            <div class="col-md-12">
                <div class="tutor-filter">
                    <form action="job_board" method="POST">
                      @csrf
                        <div class="form-group">
                        	<label>Title</label>
                          <input class="form-control mb-3" type="text" name="title"><br>
                          <label>Address</label>
                          <input class="form-control mb-3" type="text" name="address"><br>
                          <label>Class</label>
                          <input class="form-control mb-3" type="text" name="class"><br>
                          <label>Gender</label>
                          <input class="form-control mb-3" type="text" name="gender"><br>
                          <label>Duration</label>
                          <input class="form-control mb-3" type="text" name="duration"><br>
                          <label>Requirment</label>
                          <input class="form-control mb-3" type="text" name="requirment"><br>
                          <label>salary</label>
                          <input class="form-control mb-3" type="text" name="salary"><br>
                          <label>note</label>
                          <input class="form-control mb-3" type="text" name="note"><br>
                          <label>category</label>
                          <input class="form-control mb-3" type="text" name="category"><br>
                          <label>Student gender</label>
                          <input class="form-control mb-3" type="text" name="stdgender"><br>
                          <label>Student number</label>
                          
                          <input class="form-control mb-3" type="text" name="stdnumber">
                          <br>
                          <label>Course</label>
<select name="course"> 
                                  
                                  <option value="1"> 1</option>
                                  <option value="2"> 2</option>
                                        </select>
                          @error('opinion')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                           @enderror
                        </div>
                        <button class="btn btn-custom " type="submit">{{__('Submit')}}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('js')

@endpush




