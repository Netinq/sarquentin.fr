<section id="devis">
    <div class="hide row">
        <div class="content col-8 col-md-5 col-xl-4 offset-2 offset-md-1 offset-xl-2 row">
            <div class="txt">
                <h2>Complétez le formulaire pour demander un devis</h2>
                <p>Après l'envoi du formulaire, nous vous recontacterons dans les plus brefs délais afin d'échanger sur votre projet.</p>
                <img src="{{asset('images/svg/send.svg')}}" alt="Send icon">
            </div>
        </div>
        <div class="content col-12 col-md-5 col-xl-4 row" style="margin: 0; margin-top: 50px">
            <form method="POST" action="{{route('sendmail')}}">
                @csrf
                <div class="form-group row">
                    <div class="offset-2 col-8">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" required autocomplete="name" value="{{ old('name') }}">
                        <label for="name">Nom</label>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="offset-2 col-8">
                        <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" required autocomplete="email" value="{{ old('email') }}">
                        <label for="email">Adresse email</label>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="offset-2 col-8">
                        <input id="phone" type="tel" class="form-control @error('phone') is-invalid @enderror" name="phone" required autocomplete="tel" value="{{ old('phone') }}">
                        <label for="phone">Numéro de téléphone</label>
                        @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="offset-2 col-8">
                        <select class="form-control" name="prestation" id="prestation">
                            <option>&#160;</option>
                            <option value="1">ONEPAGE</option>
                            <option value="2">VITRINE</option>
                            <option value="3">DYNAMIQUE</option>
                        </select>
                        <label for="prestation">Prestation désirée</label>
                        @error('prestation')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-8 offset-2" style="padding: 0">
                        <button type="submit" class="btn">
                            Envoyer la demande
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
