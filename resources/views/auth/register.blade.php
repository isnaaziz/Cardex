@extends('layouts.base')

@section('title', 'Registrasi')

@section('body')
<!-- main content -->
<main class="main main--sign" data-bg="img/bg/bg.png">
    <!-- registration form -->
    <div class="sign">
        <div class="sign__content">
            <form action="{{ route('register.perform') }}" method="POST" class="sign__form">
                @csrf
                <a href="{{ route('home.index') }}" class="sign__logo">
                            DAFTAR AKUN
                </a>

                @if ($errors->has('first_name'))
                    <span class="text-danger text-center">{{ $errors->first('first_name') }}</span>
                @endif
                <div class="sign__group">
                    <input type="text" name="first_name" class="sign__input" placeholder="Nama Awal">
                </div>
    
                @if ($errors->has('last_name'))
                    <span class="text-danger text-center">{{ $errors->first('last_name') }}</span>
                @endif
                <div class="sign__group">
                    <input type="text" name="last_name" class="sign__input" placeholder="Nama Akhir">
                </div>
                
                @if ($errors->has('email'))
                    <span class="text-danger text-center">{{ $errors->first('email') }}</span>
                @endif
                <div class="sign__group">
                    <input type="email" name="email" class="sign__input" placeholder="Email">
                </div>

                @if ($errors->has('phone'))
                    <span class="text-danger text-center">{{ $errors->first('phone') }}</span>
                @endif
                <div class="sign__group">
                    <input type="tel" name="phone" class="sign__input" placeholder="No Handphone">
                </div>

                @if ($errors->has('date_of_birth'))
                    <span class="text-danger text-center">{{ $errors->first('date_of_birth') }}</span>
                @endif
                <div class="sign__group">
                    <input type="date" name="date_of_birth" class="sign__input" placeholder="Tanggal Lahir">
                </div>

                @if ($errors->has('password'))
                    <span class="text-danger text-center">{{ $errors->first('password') }}</span>
                @endif
                <div class="sign__group">
                    <input type="password" name="password" class="sign__input" placeholder="Password">
                </div>


                <button class="sign__btn" type="submit"><span>Daftar</span></button>

                <span class="sign__text">Sudah punya akun ? <a href="{{ route('login.show') }}">Login!</a></span>
            </form>
        </div>
    </div>
    <!-- end registration form -->
</main>
<!-- end main content -->
@endsection