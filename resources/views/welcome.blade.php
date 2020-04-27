@extends('layouts.master')
@section('content')
{{-- <div class="br"></div>
<div class="bt"></div>
<div class="bb"></div> --}}
@include('components.navbar')
<div class="corps" id="corps">
    
    @include('partials.header-corps')

    @include('partials.about')

    <div class="g">
        @include('partials.facts')
    </div>
    
    @include('partials.skills')
    
    <div class="g">
        @include('partials.resume')
    </div>
    {{-- bonus --}}
        @include('components.bonus')
    
    @include('partials.portfolio')
    
    <div class="g">
        @include('partials.services')
    </div>
    
    @include('partials.testimonials')
    
     <div class="g">
        @include('partials.contact')
    </div>
    
</div>
@include('components.footer')
    
  
@endsection