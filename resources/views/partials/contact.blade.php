<section class="container" id="contact">
    <div class="title">
        <h2>Contact</h2>
        <span class="title-ligne"></span>
        <p class="title-text">
            Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
            consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit
            in iste officiis commodi quidem hic quas. </p>
    </div>

    <div class="row">
        <div class="col-4 row contact-left">
            <a href="tel:+32471415621" class="col-12 align-items-center ligne-icon">
                <div class=""><i class="fas fa-phone-alt"></i><span> +32 471 41 56 21</span></div>
            </a>
            <a href="mailto:benbillal@hotmail.com" class="col-12 align-items-center ligne-icon">
                <div><i class="fas fa-envelope"></i><span>benbillal@hotmail.com </span></div>
            </a>
            <a target="_blank" class="col-12 align-items-center ligne-icon" href="https://www.google.com/maps/place/Brussels,+Belgium/@50.704559,4.49777,7z/data=!4m5!3m4!1s0x47c3a4ed73c76867:0xc18b3a66787302a7!8m2!3d50.8503396!4d4.3517103?hl=en">
                <div><i class="fas fa-map-marker-alt"></i><span>Bruxelles(1140/evere),Belgium.</span></div>
            </a>

            <div class="col-12" style="width: 100%;position: relative;"><iframe width="100%" height="300"
                    src="https://maps.google.com/maps?width=300&amp;height=300&amp;hl=en&amp;q=region%20bruxelles+(find%20me)&amp;ie=UTF8&amp;t=&amp;z=7&amp;iwloc=B&amp;output=embed"
                    frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            </div><br />
        </div>

        {{-- Form Contact --}}
        <div class="col-8 row contact-right justify-content-center">
            <form action="" class="text-center ">
                @csrf
                <div class="text-center col-12 ">
                    <h3>Contact</h3>
                </div>

                <div class="form-group col-12 row">
                    {{-- <label for="name" class="col-12 col-form-label ">Nom</label> --}}
                    <div class="col-12 ">
                        <input placeholder="Votre Nom" id="name" type="text"
                            class="form-control @error('name') is-invalid @enderror" name="name"
                            value="{{ old('name') }}" required  >

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group col-12 row">
                    {{-- <label for="firstname" class="col-12 col-form-label ">Prénom</label> --}}

                    <div class="col-12">
                        <input placeholder="Votre Prénom" id="firstname" type="text"
                            class="form-control @error('firstname') is-invalid @enderror" name="firstname"
                            value="{{ old('firstname') }}" required  >

                        @error('firstname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group col-12 row">
                    {{-- <label for="email" class="col-12 col-form-label ">Votre Address E-Mail</label> --}}

                    <div class="col-12">
                        <input placeholder="Votre Adresse Email" id="email" type="email"
                            class="form-control @error('email') is-invalid @enderror" name="email"
                            value="{{ old('email') }}" required >

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>


                <div class="form-group col-12 row">
                    {{-- <label for="sujet" class="col-12 col-form-label ">Sujet</label> --}}

                    <div class="col-12">
                        <input placeholder="Sujet Du Message" id="sujet" type="text"
                            class="form-control @error('sujet') is-invalid @enderror" name="sujet"
                            value="{{ old('sujet') }}" required  >

                        @error('sujet')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group col-12 row">
                    {{-- <label for="message" class="col-12 col-form-label">Message</label> --}}

                    <div class="col-12">
                        <textarea placeholder="Votre Message"
                            class="form-control  @error('message') is-invalid @enderror" name="message" id="message"
                            rows="6">{{ old('message') }}</textarea>
                        @error('message')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>


                <div class="form-group col-12 row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            submit
                        </button>
                    </div>
                </div>

        </div>
        </form>


    </div>

</section>
