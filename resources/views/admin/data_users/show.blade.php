@extends('layouts.admin.app')

@section('title', 'Edit Users')

@section('style')
@endsection()

@section('sidebar')
@parent

@include('layouts.admin.sidebar')
@endsection

@section('content')


<div class="m-grid__item m-grid__item--fluid m-wrapper">

    <div class="m-content">
        <div class="row">
            <div class="col-xl-3 col-lg-4">
                <div class="m-portlet m-portlet--full-height  ">
                    <div class="m-portlet__body">
                        <div class="m-card-profile">
                            <div class="m-card-profile__title m--hide">
                                Your Profile
                            </div>
                            <div class="m-card-profile__pic">
                                <div class="m-card-profile__pic-wrapper">
                                    <img src="../assets/app/media/img/users/user4.jpg" alt="">
                                </div>
                            </div>
                            <div class="m-card-profile__details">
                                <span class="m-card-profile__name">{{$user->name}}</span>
                                <a href="" class="m-card-profile__email m-link">{{$user->email}}</a>
                            </div>
                        </div>

                        <div class="m-portlet__body-separator"></div>

                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-lg-8">
                <div class="m-portlet m-portlet--full-height m-portlet--tabs  ">
                    <div class="m-portlet__head">

                        
                        <div class="m-portlet__head-tools">
                            <ul class="nav nav-tabs m-tabs m-tabs-line   m-tabs-line--left m-tabs-line--primary"
                                role="tablist">
                                <li class="nav-item m-tabs__item">
                                    <a class="nav-link m-tabs__link show active" data-toggle="tab"
                                        href="#m_user_profile_tab_1" role="tab" aria-selected="true">
                                        <i class="flaticon-share m--hide"></i>
                                        Update Profile
                                    </a>
                                </li>
                                <li class="nav-item m-tabs__item">
                                    <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_user_profile_tab_2"
                                        role="tab" aria-selected="false">
                                        Laporan
                                    </a>
                                </li>

                            </ul>
                        </div>

                        <div class="m--pull-right-mod">
                            <a class="btn btn-primary" href="{{ route('admin.data-users.index') }}"> Back</a>
                        </div>

                    </div>
                    <div class="tab-content">
                        <div class="tab-pane show active" id="m_user_profile_tab_1">
                            <form class="m-form m-form--fit m-form--label-align-right">
                                <div class="m-portlet__body">
                                    <div class="form-group m-form__group m--margin-top-10 m--hide">
                                        <div class="alert m-alert m-alert--default" role="alert">
                                            The example form below demonstrates common HTML form elements that receive
                                            updated styles from Bootstrap with additional classes.
                                        </div>
                                    </div>
                                    <div class="form-group m-form__group row">
                                        <div class="col-10 ml-auto">
                                            <h3 class="m-form__section">1. Personal Details</h3>
                                        </div>
                                    </div>
                                    <div class="form-group m-form__group row">
                                        <label for="example-text-input" class="col-2 col-form-label">Full Name</label>
                                        <div class="col-7">
                                            <input class="form-control m-input" type="text" value="{{$user->name}}"  readonly disabled="disabled">
                                        </div>
                                    </div>
                                    <div class="form-group m-form__group row">
                                        <label for="example-text-input" class="col-2 col-form-label">Occupation</label>
                                        <div class="col-7">
                                            <input class="form-control m-input" type="text" value="{{$user->Occupation}}"  readonly disabled="disabled">
                                        </div>
                                    </div>
                                    <div class="form-group m-form__group row">
                                        <label for="example-text-input" class="col-2 col-form-label">Company
                                            Name</label>
                                        <div class="col-7">
                                            <input class="form-control m-input" type="text" value="{{$user->Company}}" readonly disabled="disabled">

                                        </div>
                                    </div>
                                    <div class="form-group m-form__group row">
                                        <label for="example-text-input" class="col-2 col-form-label">Phone No.</label>
                                        <div class="col-7">
                                            <input class="form-control m-input" type="text" value="{{$user->phone}}" readonly disabled="disabled">
                                        </div>
                                    </div>
                                    <div
                                        class="m-form__seperator m-form__seperator--dashed m-form__seperator--space-2x">
                                    </div>
                                    <div class="form-group m-form__group row">
                                        <div class="col-10 ml-auto">
                                            <h3 class="m-form__section">2. Address</h3>
                                        </div>
                                    </div>
                                    <div class="form-group m-form__group row">
                                        <label for="example-text-input" class="col-2 col-form-label">Alamat</label>
                                        <div class="col-7">
                                            <input class="form-control m-input" type="text"
                                                value="{{$user->address}}" readonly disabled="disabled">
                                        </div>
                                    </div>
                                    <div class="form-group m-form__group row">
                                        <label for="example-text-input" class="col-2 col-form-label">Kota</label>
                                        <div class="col-7">
                                            <input class="form-control m-input" type="text" value="{{$user->address}}" readonly disabled="disabled">
                                        </div>
                                    </div>
                                    <div class="form-group m-form__group row">
                                        <label for="example-text-input" class="col-2 col-form-label">Negara</label>
                                        <div class="col-7">
                                            <input class="form-control m-input" type="text" value="{{$user->state}}" readonly disabled="disabled">
                                        </div>
                                    </div>
                                    <div class="form-group m-form__group row">
                                        <label for="example-text-input" class="col-2 col-form-label">Postcode</label>
                                        <div class="col-7">
                                            <input class="form-control m-input" type="text" value="{{$user->post_code}}" readonly disabled="disabled">
                                        </div>
                                    </div>
                                    <div
                                        class="m-form__seperator m-form__seperator--dashed m-form__seperator--space-2x">
                                    </div>
                                    <div class="form-group m-form__group row">
                                        <div class="col-10 ml-auto">
                                            <h3 class="m-form__section">3. Social Links</h3>
                                        </div>
                                    </div>
                                    <div class="form-group m-form__group row">
                                        <label for="example-text-input" class="col-2 col-form-label">Linkedin</label>
                                        <div class="col-7">
                                            <input class="form-control m-input" type="text"
                                                value="{{$user->linkeding}}" readonly disabled="disabled">
                                        </div>
                                    </div>
                                    <div class="form-group m-form__group row">
                                        <label for="example-text-input" class="col-2 col-form-label">Facebook</label>
                                        <div class="col-7">
                                            <input class="form-control m-input" type="text"
                                            value="{{$user->facebook}}" readonly disabled="disabled">
                                        </div>
                                    </div>
                                    <div class="form-group m-form__group row">
                                        <label for="example-text-input" class="col-2 col-form-label">Twitter</label>
                                        <div class="col-7">
                                            <input class="form-control m-input" type="text"
                                            value="{{$user->twitter}}" readonly disabled="disabled">
                                        </div>
                                    </div>
                                    <div class="form-group m-form__group row">
                                        <label for="example-text-input" class="col-2 col-form-label">Instagram</label>
                                        <div class="col-7">
                                            <input class="form-control m-input" type="text"
                                            value="{{$user->instagram}}" readonly disabled="disabled">
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                        <div class="tab-pane" id="m_user_profile_tab_2">
                        </div>
                        <div class="tab-pane" id="m_user_profile_tab_3">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection

@section('script')

@endsection
