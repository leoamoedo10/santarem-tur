@extends('layouts.public')
@section('content')

@include('components.navbar')
<div class="container">
    <div class="row py-5">
        <div class="col-md-5">
            <img src="images/santarem.jpg" class="card-img-top img-fluid" />
            <small class="img-author">Autor: Desconhecido</small>
        </div>
        <div class="col-md-7 text-center px-3">
            <h2>Lorem ipsum dolor sit amet.</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque at nibh quam.
                Vestibulum posuere ante in purus ullamcorper, a rutrum velit placerat.
                Sed tempor ipsum ac lacus tincidunt, ut consequat eros tristique.
                Sed nec purus nec ex scelerisque vehicula at ac tortor. Donec aliquam ullamcorper est, nec cursus arcu.
                Nullam vestibulum posuere condimentum. Nam fringilla condimentum neque eget lobortis.
                Nunc volutpat lorem id luctus sagittis. Donec interdum ex in erat scelerisque venenatis.
            </p>
        </div>
    </div>
</div>
<div class="bg-background">
    <div class="container">
        <div class="row py-5">
            <div class="col-md-8 text-center">
                <h2>Lorem ipsum dolor sit amet.</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ut tortor vitae neque vestibulum cursus at vel ex.
                    Sed vestibulum et arcu non mollis. Etiam imperdiet quam lorem. Morbi aliquet dui in erat sagittis, id laoreet justo auctor.
                    Curabitur tempus turpis vel risus ultrices, in semper sapien mollis. Etiam id tellus ut metus elementum iaculis nec vitae ipsum.
                    Vestibulum vehicula sem sed tincidunt sagittis. Nam nec quam nibh. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
                    Pellentesque leo velit, luctus aliquet metus sed, scelerisque fermentum sapien. Nulla sit amet arcu mattis, semper diam non, porta ante.
                </p>
            </div>
            <div class="col-md-4">
                <iframe class="w-100" height="315" src="https://www.youtube.com/embed/hfn1BCGtmbI" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>

@include('components.footer')

@endsection
