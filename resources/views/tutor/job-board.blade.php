@extends('layouts.frontend.app', ['activePage' => 'jobBoard', 'titlePage' => __('JOB BOARD')])

@push('css')

@endpush

@section('content')

<div class="tutor-hub-wrapper">
    <div class="container">
       
        </div>
        <div class="tutors-list">
            <div class="row">
                @foreach ($jobs as $job)
                <div class="col-md-4">
                    <div class="single-tutors">
                        <div class="st-img">
                            <img src="https://via.placeholder.com/80" alt="">
                        </div>
                       

					
          
      

                        <div class="st-text">
                            <a href="#"> {{ $job->title }}</a>
                            <p>{{ $job->gender }}</p>
                            <p>{{ $job->class }}</p>
                            <span>{{ $job->address }}</span>
                             <p>{{ $job->duration }}</p>
                              <p>{{ $job->salary }}</p>
                               <p>{{ $job->note }}</p>
                                <p>{{ $job->category }}</p>
                                <span>{{ $job->stdgender }}</span>
                                <span>{{ $job->stdnumber }}</span>
                             <span>{{ $job->course }}</span>

                        </div>
        
                    </div>
                </div>
               @endforeach
            </div>
        </div>
    </div>
</div>

@endsection

@push('js')

@endpush
