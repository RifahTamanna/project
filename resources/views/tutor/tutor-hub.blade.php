@extends('layouts.frontend.app', ['activePage' => 'tutorHub', 'titlePage' => __('TUTORS HUB')])

@push('css')

@endpush

@section('content')

<div class="tutor-hub-wrapper">
    <div class="container">
       
        </div>
        <div class="tutors-list">
            <div class="row">
                
                <div class="col-md-4">
                    <div class="single-tutors">
                        <div class="st-img">
                            <img src="https://via.placeholder.com/80" alt="">
                        </div>
                       
            
    title
address
class
gender
duration
requirment
salary
note
category
stdgender
stdnumber

                        <div class="st-text">
                            <a href="#">{{ $job->title }}</a>
                            <p>Ispahani Public School & College</p>
                            <p>Cumilla Victoria Govt. College</p>
                            <span>With 2 Years of Experience</span>
                        </div>
                     
        
                    </div>
                </div>
               
            </div>
        </div>
    </div>
</div>

@endsection

@push('js')
  {{-- expr --}}
@endpush
