@extends('layouts.app')

@section('content')
    <style>
        /*.imageProfile{*/
        /*width: 100px;*/
        /*}*/
    </style>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                {{-- BOX --}}
                <div class="" style="background-color: white; height: auto; margin-bottom:20px;">

                    <div class="status" style="padding:20px 30px 10px 20px;">


                        <div style="margin:10px;">
                            <img src="image/profile2.jpg"
                                 style="width: 30px; height: 30px; border-radius: 100%; display: inline; margin-bottom:70px;">
                            <textarea type="text" class="form-control" placeholder="Apa yang Anda pikirkan?"
                                      style="display: inline; width:90%; padding: .275rem .75rem; border-radius: .35rem; max-height: 60px; min-height: 60px;"></textarea>
                        </div>


                    </div>

                </div>
                {{-- /BOX --}}


                {{-- BOX --}}
                <div class="" style="background-color: white; height: auto; margin-bottom:20px;">

                    <div class="status" style="padding:20px 30px 10px 20px;">

                        <div class="" style="padding:10px;">
                            <img src="image/profile1.jpg" class="imageProfile"
                                 style="width: 50px; height: 50px; border-radius: 100%; display: inline;">
                            <span style="color:#365899; font-weight:bold; cursor:pointer;">
                                Gema Akbar
                            </span>
                            <div style="padding-top: 5px;">
                                Mulai perjalanan pemrogramanmu dengan Status, coding bootcamp intensif pertama di
                                Indonesia.
                                Dalam 12 minggu, kamu akan menjadi seorang Full Stack Developer profesional.
                                Perusahaan-perusahaan sudah siap merekrutmu jadi tunggu apa lagi?

                            </div>
                        </div>

                        <div class="">
                            <span>
                                <button type="button" class="btn btn-link">Like</button>
                            </span>
                            {{--<span>--}}
                            {{--comment--}}
                            {{--</span>--}}
                        </div>

                        <div style="border-top:1px solid #e1e2e3; margin:10px;">
                            <div style="margin-top:10px;">
                                <img src="image/profile2.jpg"
                                     style="width: 30px; height: 30px; border-radius: 100%; display: inline;">
                                <input type="text" class="form-control" placeholder="Tulis Komentar..."
                                       style="display: inline; width:90%; padding: .275rem .75rem; border-radius: .85rem;">
                            </div>
                        </div>


                    </div>

                </div>
                {{-- /BOX --}}


            </div>
        </div>
    </div>
@endsection
