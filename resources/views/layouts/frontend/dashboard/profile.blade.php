@extends('layouts.frontend.dashboard.master')
<style>
    .picture__image img {
        width: 100px !important;
        height: 100px;
        border-radius: 50%;
        object-fit: cover;
    }

    #picture__input {
        display: none !important;
    }

    .pro_button {
        background: #0081B5 !important;
        color: #FFF !important;
        font-weight: bold !important;
    }

    input[type=text]:focus {
        border: none !important;
        box-shadow: 0 0 0 0.2rem rgb(0 123 255 / 25%);
    }

    input[type=password]:focus {
        border: none !important;
        box-shadow: 0 0 0 0.2rem rgb(0 123 255 / 25%);
    }

    textarea[type=text]:focus {
        border: none !important;
        box-shadow: 0 0 0 0.2rem rgb(0 123 255 / 25%);
    }

    .row.border_radius {
        padding-bottom: 25px;
        margin-top: 30px;
    }
</style>

@section('page_content')
    <div>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
    </div>
    <div class="col-md-10 col-lg-12 m-0 p-0 mt-1 "
        style="background:#FFF; box-shadow: 0 0.75rem 1.5rem rgb(173 176 181 / 36%);">

        <div class="container-fluid  side-bar_left   overflow_scroll ">
            <form action="{{ route('user.profile.update', $userInfo->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row border_radius">
                    <div class="col-sm-4 mt-4  verticaleHeight verticaleHeight_col_4">
                        <div class="d-flex justify-content-center">
                            <div class="card my-2 shadow-lg " style="width: 18rem; border:none">
                                <div class="card-body p-5" style="text-align:center;">
                                    <label for="picture__input" tabIndex="0">
                                        <img id="hide_image" src="{{ asset($userInfo->picture__input) }}" class="propic"
                                            src="" alt="">
                                        <span style="" class="picture__image"></span>
                                        <span style="color:#0081B5 !important;" class="text_hidden text-warning">Edit your
                                            profile picture</span>
                                    </label>
                                    <input type="file" name="picture__input" id="picture__input" accept="image/*">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8 mt-4  verticaleHeight verticaleHeight_col_8">
                        <div class="row d-flex ">
                            <div class="col-6">
                                <div class="mb-3">
                                    <label class="form-label"style="color:#0081B5 !important;">User Name</label>
                                    <input style="border-radius: 10px !important;" value="{{ $userInfo->name }}"
                                        type="text" name="name" value="" class="form-control py-2">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" style="color:#0081B5 !important;">Address</label>
                                    <textarea style="border-radius: 10px !important;" type="text" rows="1" name="address" value=""
                                        class="form-control py-2">{{ $userInfo->address }} </textarea>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label class="form-label" style="color:#0081B5 !important;">Phone</label>
                                    <input style="border-radius: 10px !important;" value="{{ $userInfo->phone }}"
                                        type="text" name="phone" value="" class="form-control py-2">
                                </div>
                                <div class="mb-3 ">
                                    <label class="form-label" style="color:#0081B5 !important;">Email</label>
                                    <input style="border-radius: 10px !important;" type="text"
                                        value="{{ $userInfo->email }}" name="email" value=""
                                        class="form-control py-2" readonly>
                                </div>
                            </div>
                            <div class="mb-2">
                                <button type="submit" class="btn pro_button">Update</button>
                                <button type="button" class="btn pro_button" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal" data-bs-whatever="">Change Password</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        {{-- Password change modal  --}}
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog  modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel" style="color:#0081B5;">Change Password</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('passwordChange') }}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="oldPasswordInput" class="form-label">Old Password</label>
                                    <input name="old_password" type="password"
                                        class="form-control @error('old_password') is-invalid @enderror"
                                        id="oldPasswordInput" placeholder="Old Password">
                                    @error('old_password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="newPasswordInput" class="form-label">New Password</label>
                                    <input name="new_password" type="password"
                                        class="form-control @error('new_password') is-invalid @enderror"
                                        id="newPasswordInput" placeholder="New Password">
                                    @error('new_password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-1">
                                    <label for="confirmNewPasswordInput" class="form-label ">Confirm New Password</label>
                                    <input name="new_password_confirmation" type="password" class="form-control"
                                        id="confirmNewPasswordInput" placeholder="Confirm New Password">
                                </div>
                            </div>
                            <div class="mt-2">
                                <button class="btn pro_button">Update password</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <script>
            const inputFile = document.querySelector("#picture__input");
            const pictureImage = document.querySelector(".picture__image");
            const pictureImageTxt = "";
            pictureImage.innerHTML = pictureImageTxt;

            inputFile.addEventListener("change", function(e) {
                const inputTarget = e.target;
                const file = inputTarget.files[0];

                if (file) {
                    const reader = new FileReader();

                    reader.addEventListener("load", function(e) {
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
