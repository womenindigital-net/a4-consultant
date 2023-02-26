@extends('layouts.frontend.dashboard.master')
@push('css')

@endpush

@section('page_content')
<div class="col-md-10 col-lg-12 m-0 p-0 mt-1 border">
    <div class="container-fluid  side-bar_left   overflow_scroll mt-1 ">
            <form action="{{ url('/profile') }}" method="POST"
                enctype="multipart/form-data">
                <div class="row   bg-white border_radius mb-2 ">
                    <div class="col-sm-4 mt-4  verticaleHeight verticaleHeight_col_4">
                        <div class="d-flex justify-content-center">
                            <div class="card my-2" style="width: 18rem;">
                                <div class="card-body p-5" style="margin: 0 auto;">
                                    <label for="picture__input" tabIndex="0">
                                        <img id="hide_image" class="propic"
                                            src="{{ asset('uploads/userImage/') }}"
                                            alt="">
                                        <span style="" class="picture__image"></span>
                                        <span class="text_hidden text-warning">{{ __('messages.Edit_your_profile_picture') }}</span>
                                    </label>
                                    <input type="file" name="picture__input" id="picture__input" accept="image/*" style="display:block;">
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <div class="card  " style="width: 18rem; ">
                                <div class="card-body ">
                                    <div class="text-center">
                                        <img style="width: 100px; height:100px; object-fit:contain;"
                                            src="{{ asset('uploads/signature/') }}"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8 mt-4  verticaleHeight verticaleHeight_col_8">
                        <div class="row ">
                            <div class="col-6">
                                <div class="mb-3">
                                    <label class="form-label">{{__('messages.User_name')}}</label>
                                    <input style="border-radius: 10px !important;" type="text" name="name"
                                        value="" class="form-control py-2">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">{{__('messages.Address')}}</label>
                                    <textarea style="border-radius: 10px !important;" type="text" rows="5" name="address" value=""
                                        class="form-control py-2"> </textarea>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label class="form-label">{{__('messages.Phone')}}</label>
                                    <input style="border-radius: 10px !important;" type="text" name="phone"
                                        value="" class="form-control py-2">
                                </div>
                                <div class="mb-3 ">
                                    <label class="form-label mt-1"> {{__('messages.email')}}</label>
                                    <input style="border-radius: 10px !important;" type="text" name="email"
                                        value="" class="form-control py-2" readonly>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label mt-2">{{__('messages.Signature')}}</label>
                            <input style="border-radius: 10px !important;" id="imgInp" name="signature" type="file" name="signature" class="form-control " accept="image/*" readonly>
                                    <img class="mt-3 d-none"  width="80px" height="80px" id="blah" src="#" alt="Add your signature" />
                                </div>

                            </div>
                            <div class="mb-2">
                                <button type="submit" class="btn settingUpdatebutton">{{__('messages.Update_btn')}}</button>
                                <button type="button" class="btn settingUpdatebutton" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal" data-bs-whatever="@mdo">{{__('messages.Change_password')}}
                                    </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
    </div>
    {{-- Password change modal  --}}
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{__('messages.Change_password')}}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('/all/invoices/change-password') }}" method="POST">
                     
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="oldPasswordInput" class="form-label">{{__('messages.Old_Password')}}</label>
                                <input name="old_password" type="password"
                                    class="form-control "
                                    id="oldPasswordInput" placeholder="{{__('messages.Old_Password')}}">
                              
                                    <span class="text-danger"></span>
                          
                            </div>
                            <div class="mb-3">
                                <label for="newPasswordInput" class="form-label">{{__('messages.New_Password')}}</label>
                                <input name="new_password" type="password"
                                    class="form-control"
                                    id="newPasswordInput" placeholder="{{__('messages.New_Password')}}">
                                
                                    <span class="text-danger"></span>
                            
                            </div>
                            <div class="mb-1">
                                <label for="confirmNewPasswordInput" class="form-label "> {{__('messages.Confirm_New_Password')}}</label>
                                <input name="new_password_confirmation" type="password" class="form-control"
                                    id="confirmNewPasswordInput" placeholder="{{__('messages.Confirm_New_Password')}}">
                            </div>
                        </div>
                        <div class="">
                            <button class="btn settingUpdatebutton ms-3">{{__('messages.Update_Password')}}</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <style>
        .picture__image img{
        width: 100px !important;
        height: 100px;
        border-radius: 50%;
    }
    </style>
    <script>
        const inputFile = document.querySelector("#picture__input");
        const pictureImage = document.querySelector(".picture__image");
        const pictureImageTxt = "";
        pictureImage.innerHTML = pictureImageTxt;

        inputFile.addEventListener("change", function (e) {
        const inputTarget = e.target;
        const file = inputTarget.files[0];

        if (file) {
            const reader = new FileReader();

            reader.addEventListener("load", function (e) {
            const readerTarget = e.target;

            const img = document.createElement("img");
            img.src = readerTarget.result;
            img.classList.add("picture__img");

            pictureImage.innerHTML = "";
            pictureImage.appendChild(img);
            });
            $('#hide_image').hide();
            $('.text_hidden').hide();
            reader.readAsDataURL(file);
        } else {
            pictureImage.innerHTML = pictureImageTxt;

        }
        });

    </script>
</div>
@endsection