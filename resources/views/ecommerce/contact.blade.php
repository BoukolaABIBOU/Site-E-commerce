@extends('_layout._ecommerce')

@section('content')
    <div class="container-fluid">
        <form action="{{route('send.email')}}" method="post" class="row-g3" style="background-image:url(images/headerimagescale)">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <h3>ENTRER EN CONTACT</h3>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Votre nom</label>
                <input type="text" class="form-control is-valid" name ="name" id="exampleFormControlInput1" placeholder="NAME Prenom" required>
                @if($errors->has('name'))
                <div class="invalid-feedback">
                    {{ $errors->first('name') }}
                </div>
                @endif
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Votre email</label>
                <input type="email" class="form-control is-valid"name="email" id="exampleFormControlInput1" placeholder="name@example.com" required>
                @if($errors->has('email'))
                <div class="invalid-feedback">
                    {{ $errors->first('email') }}
                </div>
                @endif
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Objet</label>
                <input type="text" class="form-control is-valid" name="subject" id="exampleFormControlInput1" placeholder="XX XX XX XX" required
                >
                @if($errors->has('subject'))
                <div class="invalid-feedback">
                    {{ $errors->first('subject') }}
                </div>
                @endif
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                <textarea class="form-control is-valid" name="message" id="exampleFormControlTextarea1" rows="3" required></textarea>
                @if($errors->has('message'))
                <div class="invalid-feedback">
                    {{ $errors->first('message') }}
                </div>
                @endif
            </div>
            <div class="">
                <hr>
                <button class="btn btn-primary" type="submit">Soumettre</button>
            </div>
              <hr>
            <h4>Hey! Nous sommes impatients de démarrer un bussiness avec vous!</h4>
            </form><!--contact--> 
        <div class="row section-row">
            <div class="col-sm-5">
                <h3>Appelez-nous</h3>
                <img src="images/contact.jpg" alt="Placeholder image">
            </div><!-- /.col -->
            <div class="col-sm-7">
                <div class="section-list">
                    <ul class="icon-list">
                        <li>
                            <i class="fa fa-envelope" aria-hidden="true"></i>: Client.service@Book.com
                        </li>
                        <li>
                            <i class="fa fa-phone" aria-hidden="true"></i>: XXX-XXX-XXXX
                        </li>
                        <li>
                            <i class="fa fa-clock-o" aria-hidden="true"></i>:24h/24h-Disponible tous les jours.
                        </li>
                    </ul>
                </div><!-- /.section-list-->
            </div><!-- /.col -->
            <hr>
        </div><!-- /.row -->
        <div class="row section-row">
            <div class="col-sm-7">
                <div class="section-list">
                    <ul class="icon-list">
                        <li>
                            <i class="fa fa-envelope" aria-hidden="true"></i>: Assisante.service@Book.com
                        </li>
                        <li>
                            <i class="fa fa-phone" aria-hidden="true"></i>:Pour tous problèmes,applez directement sur ce numéro
                        </li>
                        <li>
                            <i class="fa fa-clock-o" aria-hidden="true"></i>: xx xx xx xx
                        </li>
                    </ul>
                </div><!-- /.section-list-->
            </div><!-- /.col -->
            <div class="col-sm-5">
                <h3>Service Technique</h3>
                <img src="images/contact.jpeg" alt="Placeholder image">
            </div><!-- /.col -->
            <hr>
        </div><!-- /.row -->  
    </div><!-- /.container -->
@endsection
