@extends('layouts.default')

@section('content')
        
    <div class="main contacts">
        <div class="container">
            <div class="contacts">
                <div class="container">
                    <h2><i class="fas fa-phone"></i></h2>
                    <div>
                        <div class="tooltip">
                            <div class="copy">+2130664768495 |
                                <span class="tooltiptext">click to copy</span>
                            </div>
                            <input class="Text_to_copy" type="text" style="position: absolute;opacity: 0;pointer-events: none;" value="+2130664768495">
                        </div>
                        <a href="tel:+213664768495" class="link" title="click to call me">Call me</a>
                    </div>
                </div>

                <div class="container">
                    <h2><i class="fas fa-envelope"></i></h2>
                    <div class="tooltip">
                        <div class="copy">chettoutabdeslam@gmail.com |
                            <span class="tooltiptext">click to copy</span>
                        </div>
                        <input class="Text_to_copy" type="text" value="chettoutabdeslam@gmail.com">
                    </div>
                    <a href="mailto:chettoutabdeslam@gmail.com" class="link" title="click to mail me" target="_blank" rel="noopener noreferrer">Mail me</a>
                </div>

                <div class="container">
                    <h2><i class="fab fa-facebook"></i></h2>
                    <a href="http://www.facebook.com/t/messages/loup1999" class="link" target="_blank" rel="noopener noreferrer">Facebook &#8594;</a>
                </div>
            </div>

            <div class="contact-form container" id="Message">
                <h2 style="font-weight: 400;">Or just contact me here</h2>
                <form method="POST" class="form" action="{{url('/message/send')}}">
                    @csrf
                    <div>
                        <label class="form-label" for="fullName">Full name</label>
                        <input class="form-input @error('fullName') invalid  @enderror" name="fullName" required type="text" id="fullName" placeholder="Full name">
                        <div class="invalid-message @error('fullName') show  @enderror">
                            @error('fullName') {{$message}}  @enderror
                        </div>
                    </div>
                    <div>
                        <label class="form-label" for="email">Email</label>
                        <input class="form-input @error('email') invalid  @enderror" name="email" required type="email" id="email" placeholder="email">
                        <div class="invalid-message @error('email') show  @enderror">
                            @error('email') {{$message}}  @enderror
                        </div>
                    </div>
                    <div>
                        <label class="form-label" for="message">Your message</label>
                        <textarea maxlength="900" name="message" required class="form-input @error('message') invalid  @enderror" name="message" id="message" placeholder="Your message here : max: 1000"></textarea>
                        <div class="invalid-message @error('message') show  @enderror">
                            @error('message') {{$message}}  @enderror
                        </div>
                    </div>

                    <div>
                        <button class="btn btn-sm primary">Send <i class="fas fa-paper-plane"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('head')
    <link rel="stylesheet" href="css/contact.css">
@endsection