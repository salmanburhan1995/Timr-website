@extends('cms.layouts.layout')
@section('pageTitle')
    Home Page
@endsection
@section('content')
    <div class="row g-7">
        <div class="col-lg-12 col-xl-12">
            <div class="card card-flush" id="about-us">
                <div class="card-header pt-7">
                    <div class="card-title">
                        <h2>Let Us Help You</h2>
                    </div>
                </div>
                <div class="card-body pt-5">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                    <div class="clone-div" id="clone-div" style="display:none;">
                        <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
                            <!--begin::Col-->
                            <div class="col">
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span class="required">Feature Heading</span>
                                        <span class="ms-1" data-bs-toggle="tooltip" title="fullname">
                                            <i class="ki-duotone ki-information fs-7">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" name="feature_heading[]" value=""/>
                                    @error('feature_heading.*')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col">
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span class="required">Feature Icon</span>
                                        <span class="ms-1" data-bs-toggle="tooltip" title="feature icon">
                                            <i class="ki-duotone ki-information fs-7">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="file" class="form-control form-control-solid" name="feature_icon[]" value=""/>
                                        @error('feature_icon.*')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="fs-6 fw-semibold form-label mt-3">
                                <span class="required">Feature Paragraph</span>
                                <span class="ms-1" data-bs-toggle="tooltip" title="Enter feature paragraph">
                                    <i class="ki-duotone ki-information fs-7">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                </span>
                            </label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" id="feature_paragraph" class="feature_paragraph form-control form-control-solid" name="feature_paragraph[]" value=""/>
                            @error('feature_paragraph[]')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <!--end::Input-->
                        </div>
                        <div class="fv-row mb-7 text-center">
                            <!--begin::Button-->
                            <button type="button" class="btn btn-danger" id="delete-feature-fields" onclick="deleteFeaturesFields(this);">
                                <span class="indicator-label">Delete</span>
                            </button>
                            <!--end::Button-->

                        </div>
                        <div class="separator mb-6"></div>
                    </div>
                    <form id="home-aboutus-section" class="form" action="{{route('cms.homepage-letushelpyou-section.store')}}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="fs-6 fw-semibold form-label mt-3">
                                <span>Main-heading</span>
                                <span class="ms-1" data-bs-toggle="tooltip" title="Enter the let-us-help-you section main heading">
                                    <i class="ki-outline ki-information fs-7"></i>
                                </span>
                            </label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" class="form-control form-control-solid" name="let-us-help-you_heading" value="" />
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                         <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="fs-6 fw-semibold form-label mt-3">
                                <span class="required">Paragraph</span>
                                <span class="ms-1" data-bs-toggle="tooltip" title="Enter the let-us-help-you section paragraph">
                                    <i class="ki-outline ki-information fs-7"></i>
                                </span>
                            </label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <textarea class="form-control form-control-solid" name="let-us-help-you_para"></textarea>
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->

                        <!--begin::Row-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <label class="block fs-6 fw-semibold form-label mt-3">
                                <span class="required">Let us help you features</span>
                                <span class="ms-1" data-bs-toggle="tooltip" title="Enter the let-us-help-you section paragraph">
                                    <i class="ki-outline ki-information fs-7"></i>
                                </span>
                            </label>
                        </div>
                        <!--end::Input group-->
                        <!--end::Row-->
                        <!--begin::Row-->
                        <div class="fv-row mb-7 text-center">

                            <div id="features-div">

                            </div>

                            <!--begin::Button-->
                            <button type="button" class="btn btn-primary" id="add-features-fields">
                                <span class="indicator-label">ADD</span>
                            </button>
                            <!--end::Button-->
                        </div>
                        <!--end::Row-->

                        <!--begin::Separator-->
                        <div class="separator mb-6"></div>
                        <!--end::Separator-->
                        <!--begin::Action buttons-->
                        <div class="d-flex justify-content-end">
                            <!--begin::Button-->
                            <button type="reset" data-kt-contacts-type="cancel" class="btn btn-light me-3">Cancel</button>
                            <!--end::Button-->
                            <!--begin::Button-->
                            <button type="submit" data-kt-contacts-type="submit" class="btn btn-primary">
                                <span class="indicator-label">Save</span>
                                <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                            <!--end::Button-->
                        </div>
                        <!--end::Action buttons-->
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
<script>
    const addfeaturesButton = document.getElementById('add-features-fields');
    addfeaturesButton.addEventListener('click',appendFeaturesFields);
    // Append Features Div
    function appendFeaturesFields()
    {
        console.log('working');
        const getFeaturesDiv = document.getElementById('features-div');
        const divInnerHtml = document.getElementById('clone-div');
        const cloneDiv = divInnerHtml.cloneNode(true);
        cloneDiv.removeAttribute('style');
        getFeaturesDiv.appendChild(cloneDiv);
    }
    function deleteFeaturesFields(_this)
    {
        const parentElement = _this.closest('div.clone-div');
        parentElement.remove();
    }
</script>
@endpush
