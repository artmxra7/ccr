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
                                    <img src={{ asset('thumbnail_images/'.$result->avatar) }} alt="">
                                </div>
                            </div>
                            <div class="m-card-profile__details">
                                <span class="m-card-profile__name">{{$result->name}}</span>
                                <a href="" class="m-card-profile__email m-link">{{$result->email}}</a>
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


                            </ul>
                        </div>

                    </div>

                @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                </div>
                @endif

                    <div class="tab-content">
                        <div class="tab-pane show active" id="m_user_profile_tab_1">

                            {!! Form::model($result, ['method' => 'PATCH',
                            'files' => true,'route' => ['admin.my-profile.update', $result->id]]) !!}
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
                                            {!! Form::text('name', null, array('placeholder' =>$result->name,'class' => 'form-control m-input')) !!}

                                        </div>
                                    </div>
                                    <div class="form-group m-form__group row">
                                        <label for="example-text-input" class="col-2 col-form-label">Occupation</label>
                                        <div class="col-7">
                                            {!! Form::text('occupation', null, array('placeholder' => $result->occupation,'class' => 'form-control m-input')) !!}
                                        </div>
                                    </div>
                                    <div class="form-group m-form__group row">
                                        <label for="example-text-input" class="col-2 col-form-label">Company
                                            Name</label>
                                        <div class="col-7">
                                            {!! Form::text('company', null, array('placeholder' => $result->company,'class' => 'form-control m-input')) !!}

                                        </div>
                                    </div>
                                    <div class="form-group m-form__group row">
                                        <label for="example-text-input" class="col-2 col-form-label">Phone No.</label>
                                        <div class="col-7">
                                            {!! Form::text('phone', null, array('placeholder' => $result->phone,'class' => 'form-control m-input')) !!}
                                        </div>
                                    </div>
                                    <div class="form-group m-form__group row">
                                        <label for="example-text-input" class="col-2 col-form-label">Update Avatar</label>
                                        <div class="col-7">
                                            {!! Form::file('avatar', null, array('placeholder' => $result->phone,'class' => 'form-control m-input')) !!}
                                        </div>
                                    </div>

                                <div class="m-portlet__foot">
                                    <div class="m-form__actions">
                                        <div class="row">
                                            <div class="col-2">
                                            </div>
                                            <div class="col-7">
                                                <button type="submit" class="btn btn-accent m-btn m-btn--air m-btn--custom">Save changes</button>&nbsp;&nbsp;
                                                <button type="reset" class="btn btn-secondary m-btn m-btn--air m-btn--custom">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                </div>

                            </form>
                            {!! Form::close() !!}
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
