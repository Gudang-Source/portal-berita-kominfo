@extends('reader')

@section('content')
    <div class="about-area mt-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Trending Tittle -->
                    <div class="about-right mb-90">
                        <div class="about-img">
                            @if ($report->thumbnail !== 'default.jpg')
                                <img src="/storage/{{$report->thumbnail}}" alt="">
                            @else
                                <img src="/{{$report->thumbnail}}" alt="">
                            @endif
                        </div>
                            @if ($report->file !== null)
                                <div class="mt-3">
                                    <a href="#" id="file" class="text-primary" data-pdf="{{$report->file}}" data-toggle="modal" data-target="#exampleModal">Lihat Laporan</a>
                                    <a href="{{route('report.download',$report)}}" class="text-primary mx-2">Download Laporan</a>
                                </div>
                            @endif
                        <div class="section-tittle mb-30 pt-30">
                            <h3>{{$report->title}}</h3>
                        </div>
                           <a href="#" data-pdf="{{$report->file}}" data-toggle="modal" data-target="#exampleModal" data-pdf="{{$report->file}}" id="file" >Lihat Laporan</a>
                        <div>
                        </div>
                        <div class="about-prea">
                            {!! $report->body !!}
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 ml-4">
                    <h5 class="text-center">Related Post</h5>
                    <hr>
                    <div class="row">
                        @foreach ($related as $relate)
                            <div class="card mt-2">
                                @if ($relate->thumbnail !== 'default.jpg')
                                    <img class="card-img-top" src="/storage/{{$relate->thumbnail}}" alt="">
                                @else
                                    <img class="card-img-top" src="/{{$relate->thumbnail}}" alt="">
                                @endif
                                <div class="card-body">
                                    <a class="text-primary" href="{{route('report.read',$relate)}}">{{$relate->title}}</a> 
                                </div>
                            </div>
                            <hr>
                        @endforeach
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <div class="pdfobject-container" id="example1"></div>
        </div>
      </div>
    </div>
  </div>

@endsection