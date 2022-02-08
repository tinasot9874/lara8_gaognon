@extends('admin._layout')
@section('page-css')
    <!--begin::Page Vendor Stylesheets(used by this page)-->
    <link href="{{asset('assets/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />
    <!--end::Page Vendor Stylesheets-->
@endsection
@section('content')
    <!--begin::Content-->
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Toolbar-->
        <div class="toolbar" id="kt_toolbar">
            <!--begin::Container-->
            <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                <!--begin::Page title-->
                <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                    <!--begin::Title-->
                    <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">General Settings</h1>
                    <!--end::Title-->
                </div>
                <!--end::Page title-->
                <!--begin::Actions-->
                <div class="d-flex align-items-center py-1">
                    <!--begin::Wrapper-->
                    <div class="me-3">
                        <!--begin::Menu-->
                        <a href="#" class="btn btn-sm btn-flex btn-light btn-active-primary fw-bolder" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
                            <span class="svg-icon svg-icon-5 svg-icon-gray-500 me-1">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<path d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z" fill="black" />
											</svg>
										</span>
                            <!--end::Svg Icon-->Filter</a>
                        <!--begin::Menu 1-->
                        <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_61b9bf7065a63">
                            <!--begin::Header-->
                            <div class="px-7 py-5">
                                <div class="fs-5 text-dark fw-bolder">Filter Options</div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Menu separator-->
                            <div class="separator border-gray-200"></div>
                            <!--end::Menu separator-->
                            <!--begin::Form-->
                            <div class="px-7 py-5">
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-bold">Status:</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <div>
                                        <select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_61b9bf7065a63" data-allow-clear="true">
                                            <option></option>
                                            <option value="1">Approved</option>
                                            <option value="2">Pending</option>
                                            <option value="2">In Process</option>
                                            <option value="2">Rejected</option>
                                        </select>
                                    </div>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-bold">Member Type:</label>
                                    <!--end::Label-->
                                    <!--begin::Options-->
                                    <div class="d-flex">
                                        <!--begin::Options-->
                                        <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                            <span class="form-check-label">Author</span>
                                        </label>
                                        <!--end::Options-->
                                        <!--begin::Options-->
                                        <label class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="2" checked="checked" />
                                            <span class="form-check-label">Customer</span>
                                        </label>
                                        <!--end::Options-->
                                    </div>
                                    <!--end::Options-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-bold">Notifications:</label>
                                    <!--end::Label-->
                                    <!--begin::Switch-->
                                    <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
                                        <label class="form-check-label">Enabled</label>
                                    </div>
                                    <!--end::Switch-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Actions-->
                                <div class="d-flex justify-content-end">
                                    <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                                    <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                                </div>
                                <!--end::Actions-->
                            </div>
                            <!--end::Form-->
                        </div>
                        <!--end::Menu 1-->
                        <!--end::Menu-->
                    </div>
                    <!--end::Wrapper-->
                    <!--begin::Button-->
                    <a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app" id="kt_toolbar_primary_button">Create</a>
                    <!--end::Button-->
                </div>
                <!--end::Actions-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Toolbar-->
        <!--begin::Post-->
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container-->
            <div id="kt_content_container" class="container-xxl">
                <!--begin::Form-->
                <form id="kt_ecommerce_add_product_form" class="form d-flex flex-column flex-lg-row gap-7 gap-lg-10" data-kt-redirect="../../demo1/dist/apps/ecommerce/catalog/products.html">
                    <!--begin::Main column-->
                    <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                            <!--begin::Container-->
                            <div id="kt_content_container">
                                <!--begin::Basic info-->
                                <div class="card mb-5 mb-xl-10">
                                    <!--begin::Card header-->
                                    <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
                                        <!--begin::Card title-->
                                        <div class="card-title m-0">
                                            <h3 class="fw-bolder m-0">General Settings</h3>
                                        </div>
                                        <!--end::Card title-->
                                    </div>
                                    <!--begin::Card header-->
                                    <!--begin::Content-->
                                    <div id="kt_account_settings_profile_details" class="collapse show">
                                        <!--begin::Form-->
                                        <form id="kt_account_profile_details_form" class="form">
                                            <!--begin::Card body-->
                                            <div class="card-body border-top p-9">
                                                <!--begin::Input group-->
                                                <div class="row mb-6">
                                                    <!--begin::Label-->
                                                    <label class="col-lg-4 col-form-label fw-bold fs-6">Avatar</label>
                                                    <!--end::Label-->
                                                    <!--begin::Col-->
                                                    <div class="col-lg-8">
                                                        <!--begin::Image input-->
                                                        <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url(assets/media/avatars/blank.png)">
                                                            <!--begin::Preview existing avatar-->
                                                            <div class="image-input-wrapper w-125px h-125px" style="background-image: url(assets/media/avatars/150-26.jpg)"></div>
                                                            <!--end::Preview existing avatar-->
                                                            <!--begin::Label-->
                                                            <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                                                <i class="bi bi-pencil-fill fs-7"></i>
                                                                <!--begin::Inputs-->
                                                                <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                                                                <input type="hidden" name="avatar_remove" />
                                                                <!--end::Inputs-->
                                                            </label>
                                                            <!--end::Label-->
                                                            <!--begin::Cancel-->
                                                            <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
																<i class="bi bi-x fs-2"></i>
															</span>
                                                            <!--end::Cancel-->
                                                            <!--begin::Remove-->
                                                            <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
																<i class="bi bi-x fs-2"></i>
															</span>
                                                            <!--end::Remove-->
                                                        </div>
                                                        <!--end::Image input-->
                                                        <!--begin::Hint-->
                                                        <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                                                        <!--end::Hint-->
                                                    </div>
                                                    <!--end::Col-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="row mb-6">
                                                    <!--begin::Label-->
                                                    <label class="col-lg-4 col-form-label required fw-bold fs-6">Full Name</label>
                                                    <!--end::Label-->
                                                    <!--begin::Col-->
                                                    <div class="col-lg-8">
                                                        <!--begin::Row-->
                                                        <div class="row">
                                                            <!--begin::Col-->
                                                            <div class="col-lg-6 fv-row">
                                                                <input type="text" name="fname" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="First name" value="Max" />
                                                            </div>
                                                            <!--end::Col-->
                                                            <!--begin::Col-->
                                                            <div class="col-lg-6 fv-row">
                                                                <input type="text" name="lname" class="form-control form-control-lg form-control-solid" placeholder="Last name" value="Smith" />
                                                            </div>
                                                            <!--end::Col-->
                                                        </div>
                                                        <!--end::Row-->
                                                    </div>
                                                    <!--end::Col-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="row mb-6">
                                                    <!--begin::Label-->
                                                    <label class="col-lg-4 col-form-label required fw-bold fs-6">Company</label>
                                                    <!--end::Label-->
                                                    <!--begin::Col-->
                                                    <div class="col-lg-8 fv-row">
                                                        <input type="text" name="company" class="form-control form-control-lg form-control-solid" placeholder="Company name" value="Keenthemes" />
                                                    </div>
                                                    <!--end::Col-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="row mb-6">
                                                    <!--begin::Label-->
                                                    <label class="col-lg-4 col-form-label fw-bold fs-6">
                                                        <span class="required">Contact Phone</span>
                                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Phone number must be active"></i>
                                                    </label>
                                                    <!--end::Label-->
                                                    <!--begin::Col-->
                                                    <div class="col-lg-8 fv-row">
                                                        <input type="tel" name="phone" class="form-control form-control-lg form-control-solid" placeholder="Phone number" value="044 3276 454 935" />
                                                    </div>
                                                    <!--end::Col-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="row mb-6">
                                                    <!--begin::Label-->
                                                    <label class="col-lg-4 col-form-label fw-bold fs-6">Company Site</label>
                                                    <!--end::Label-->
                                                    <!--begin::Col-->
                                                    <div class="col-lg-8 fv-row">
                                                        <input type="text" name="website" class="form-control form-control-lg form-control-solid" placeholder="Company website" value="keenthemes.com" />
                                                    </div>
                                                    <!--end::Col-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="row mb-6">
                                                    <!--begin::Label-->
                                                    <label class="col-lg-4 col-form-label fw-bold fs-6">
                                                        <span class="required">Country</span>
                                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Country of origination"></i>
                                                    </label>
                                                    <!--end::Label-->
                                                    <!--begin::Col-->
                                                    <div class="col-lg-8 fv-row">
                                                        <select name="country" aria-label="Select a Country" data-control="select2" data-placeholder="Select a country..." class="form-select form-select-solid form-select-lg fw-bold">
                                                            <option value="">Select a Country...</option>
                                                            <option data-kt-flag="flags/afghanistan.svg" value="AF">Afghanistan</option>
                                                            <option data-kt-flag="flags/aland-islands.svg" value="AX">Aland Islands</option>
                                                            <option data-kt-flag="flags/albania.svg" value="AL">Albania</option>
                                                            <option data-kt-flag="flags/algeria.svg" value="DZ">Algeria</option>
                                                            <option data-kt-flag="flags/american-samoa.svg" value="AS">American Samoa</option>
                                                            <option data-kt-flag="flags/andorra.svg" value="AD">Andorra</option>
                                                            <option data-kt-flag="flags/angola.svg" value="AO">Angola</option>
                                                            <option data-kt-flag="flags/anguilla.svg" value="AI">Anguilla</option>
                                                            <option data-kt-flag="flags/antigua-and-barbuda.svg" value="AG">Antigua and Barbuda</option>
                                                            <option data-kt-flag="flags/argentina.svg" value="AR">Argentina</option>
                                                            <option data-kt-flag="flags/armenia.svg" value="AM">Armenia</option>
                                                            <option data-kt-flag="flags/aruba.svg" value="AW">Aruba</option>
                                                            <option data-kt-flag="flags/australia.svg" value="AU">Australia</option>
                                                            <option data-kt-flag="flags/austria.svg" value="AT">Austria</option>
                                                            <option data-kt-flag="flags/azerbaijan.svg" value="AZ">Azerbaijan</option>
                                                            <option data-kt-flag="flags/bahamas.svg" value="BS">Bahamas</option>
                                                            <option data-kt-flag="flags/bahrain.svg" value="BH">Bahrain</option>
                                                            <option data-kt-flag="flags/bangladesh.svg" value="BD">Bangladesh</option>
                                                            <option data-kt-flag="flags/barbados.svg" value="BB">Barbados</option>
                                                            <option data-kt-flag="flags/belarus.svg" value="BY">Belarus</option>
                                                            <option data-kt-flag="flags/belgium.svg" value="BE">Belgium</option>
                                                            <option data-kt-flag="flags/belize.svg" value="BZ">Belize</option>
                                                            <option data-kt-flag="flags/benin.svg" value="BJ">Benin</option>
                                                            <option data-kt-flag="flags/bermuda.svg" value="BM">Bermuda</option>
                                                            <option data-kt-flag="flags/bhutan.svg" value="BT">Bhutan</option>
                                                            <option data-kt-flag="flags/bolivia.svg" value="BO">Bolivia, Plurinational State of</option>
                                                            <option data-kt-flag="flags/bonaire.svg" value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                                            <option data-kt-flag="flags/bosnia-and-herzegovina.svg" value="BA">Bosnia and Herzegovina</option>
                                                            <option data-kt-flag="flags/botswana.svg" value="BW">Botswana</option>
                                                            <option data-kt-flag="flags/brazil.svg" value="BR">Brazil</option>
                                                            <option data-kt-flag="flags/british-indian-ocean-territory.svg" value="IO">British Indian Ocean Territory</option>
                                                            <option data-kt-flag="flags/brunei.svg" value="BN">Brunei Darussalam</option>
                                                            <option data-kt-flag="flags/bulgaria.svg" value="BG">Bulgaria</option>
                                                            <option data-kt-flag="flags/burkina-faso.svg" value="BF">Burkina Faso</option>
                                                            <option data-kt-flag="flags/burundi.svg" value="BI">Burundi</option>
                                                            <option data-kt-flag="flags/cambodia.svg" value="KH">Cambodia</option>
                                                            <option data-kt-flag="flags/cameroon.svg" value="CM">Cameroon</option>
                                                            <option data-kt-flag="flags/canada.svg" value="CA">Canada</option>
                                                            <option data-kt-flag="flags/cape-verde.svg" value="CV">Cape Verde</option>
                                                            <option data-kt-flag="flags/cayman-islands.svg" value="KY">Cayman Islands</option>
                                                            <option data-kt-flag="flags/central-african-republic.svg" value="CF">Central African Republic</option>
                                                            <option data-kt-flag="flags/chad.svg" value="TD">Chad</option>
                                                            <option data-kt-flag="flags/chile.svg" value="CL">Chile</option>
                                                            <option data-kt-flag="flags/china.svg" value="CN">China</option>
                                                            <option data-kt-flag="flags/christmas-island.svg" value="CX">Christmas Island</option>
                                                            <option data-kt-flag="flags/cocos-island.svg" value="CC">Cocos (Keeling) Islands</option>
                                                            <option data-kt-flag="flags/colombia.svg" value="CO">Colombia</option>
                                                            <option data-kt-flag="flags/comoros.svg" value="KM">Comoros</option>
                                                            <option data-kt-flag="flags/cook-islands.svg" value="CK">Cook Islands</option>
                                                            <option data-kt-flag="flags/costa-rica.svg" value="CR">Costa Rica</option>
                                                            <option data-kt-flag="flags/ivory-coast.svg" value="CI">Côte d'Ivoire</option>
                                                            <option data-kt-flag="flags/croatia.svg" value="HR">Croatia</option>
                                                            <option data-kt-flag="flags/cuba.svg" value="CU">Cuba</option>
                                                            <option data-kt-flag="flags/curacao.svg" value="CW">Curaçao</option>
                                                            <option data-kt-flag="flags/czech-republic.svg" value="CZ">Czech Republic</option>
                                                            <option data-kt-flag="flags/denmark.svg" value="DK">Denmark</option>
                                                            <option data-kt-flag="flags/djibouti.svg" value="DJ">Djibouti</option>
                                                            <option data-kt-flag="flags/dominica.svg" value="DM">Dominica</option>
                                                            <option data-kt-flag="flags/dominican-republic.svg" value="DO">Dominican Republic</option>
                                                            <option data-kt-flag="flags/ecuador.svg" value="EC">Ecuador</option>
                                                            <option data-kt-flag="flags/egypt.svg" value="EG">Egypt</option>
                                                            <option data-kt-flag="flags/el-salvador.svg" value="SV">El Salvador</option>
                                                            <option data-kt-flag="flags/equatorial-guinea.svg" value="GQ">Equatorial Guinea</option>
                                                            <option data-kt-flag="flags/eritrea.svg" value="ER">Eritrea</option>
                                                            <option data-kt-flag="flags/estonia.svg" value="EE">Estonia</option>
                                                            <option data-kt-flag="flags/ethiopia.svg" value="ET">Ethiopia</option>
                                                            <option data-kt-flag="flags/falkland-islands.svg" value="FK">Falkland Islands (Malvinas)</option>
                                                            <option data-kt-flag="flags/fiji.svg" value="FJ">Fiji</option>
                                                            <option data-kt-flag="flags/finland.svg" value="FI">Finland</option>
                                                            <option data-kt-flag="flags/france.svg" value="FR">France</option>
                                                            <option data-kt-flag="flags/french-polynesia.svg" value="PF">French Polynesia</option>
                                                            <option data-kt-flag="flags/gabon.svg" value="GA">Gabon</option>
                                                            <option data-kt-flag="flags/gambia.svg" value="GM">Gambia</option>
                                                            <option data-kt-flag="flags/georgia.svg" value="GE">Georgia</option>
                                                            <option data-kt-flag="flags/germany.svg" value="DE">Germany</option>
                                                            <option data-kt-flag="flags/ghana.svg" value="GH">Ghana</option>
                                                            <option data-kt-flag="flags/gibraltar.svg" value="GI">Gibraltar</option>
                                                            <option data-kt-flag="flags/greece.svg" value="GR">Greece</option>
                                                            <option data-kt-flag="flags/greenland.svg" value="GL">Greenland</option>
                                                            <option data-kt-flag="flags/grenada.svg" value="GD">Grenada</option>
                                                            <option data-kt-flag="flags/guam.svg" value="GU">Guam</option>
                                                            <option data-kt-flag="flags/guatemala.svg" value="GT">Guatemala</option>
                                                            <option data-kt-flag="flags/guernsey.svg" value="GG">Guernsey</option>
                                                            <option data-kt-flag="flags/guinea.svg" value="GN">Guinea</option>
                                                            <option data-kt-flag="flags/guinea-bissau.svg" value="GW">Guinea-Bissau</option>
                                                            <option data-kt-flag="flags/haiti.svg" value="HT">Haiti</option>
                                                            <option data-kt-flag="flags/vatican-city.svg" value="VA">Holy See (Vatican City State)</option>
                                                            <option data-kt-flag="flags/honduras.svg" value="HN">Honduras</option>
                                                            <option data-kt-flag="flags/hong-kong.svg" value="HK">Hong Kong</option>
                                                            <option data-kt-flag="flags/hungary.svg" value="HU">Hungary</option>
                                                            <option data-kt-flag="flags/iceland.svg" value="IS">Iceland</option>
                                                            <option data-kt-flag="flags/india.svg" value="IN">India</option>
                                                            <option data-kt-flag="flags/indonesia.svg" value="ID">Indonesia</option>
                                                            <option data-kt-flag="flags/iran.svg" value="IR">Iran, Islamic Republic of</option>
                                                            <option data-kt-flag="flags/iraq.svg" value="IQ">Iraq</option>
                                                            <option data-kt-flag="flags/ireland.svg" value="IE">Ireland</option>
                                                            <option data-kt-flag="flags/isle-of-man.svg" value="IM">Isle of Man</option>
                                                            <option data-kt-flag="flags/israel.svg" value="IL">Israel</option>
                                                            <option data-kt-flag="flags/italy.svg" value="IT">Italy</option>
                                                            <option data-kt-flag="flags/jamaica.svg" value="JM">Jamaica</option>
                                                            <option data-kt-flag="flags/japan.svg" value="JP">Japan</option>
                                                            <option data-kt-flag="flags/jersey.svg" value="JE">Jersey</option>
                                                            <option data-kt-flag="flags/jordan.svg" value="JO">Jordan</option>
                                                            <option data-kt-flag="flags/kazakhstan.svg" value="KZ">Kazakhstan</option>
                                                            <option data-kt-flag="flags/kenya.svg" value="KE">Kenya</option>
                                                            <option data-kt-flag="flags/kiribati.svg" value="KI">Kiribati</option>
                                                            <option data-kt-flag="flags/north-korea.svg" value="KP">Korea, Democratic People's Republic of</option>
                                                            <option data-kt-flag="flags/kuwait.svg" value="KW">Kuwait</option>
                                                            <option data-kt-flag="flags/kyrgyzstan.svg" value="KG">Kyrgyzstan</option>
                                                            <option data-kt-flag="flags/laos.svg" value="LA">Lao People's Democratic Republic</option>
                                                            <option data-kt-flag="flags/latvia.svg" value="LV">Latvia</option>
                                                            <option data-kt-flag="flags/lebanon.svg" value="LB">Lebanon</option>
                                                            <option data-kt-flag="flags/lesotho.svg" value="LS">Lesotho</option>
                                                            <option data-kt-flag="flags/liberia.svg" value="LR">Liberia</option>
                                                            <option data-kt-flag="flags/libya.svg" value="LY">Libya</option>
                                                            <option data-kt-flag="flags/liechtenstein.svg" value="LI">Liechtenstein</option>
                                                            <option data-kt-flag="flags/lithuania.svg" value="LT">Lithuania</option>
                                                            <option data-kt-flag="flags/luxembourg.svg" value="LU">Luxembourg</option>
                                                            <option data-kt-flag="flags/macao.svg" value="MO">Macao</option>
                                                            <option data-kt-flag="flags/madagascar.svg" value="MG">Madagascar</option>
                                                            <option data-kt-flag="flags/malawi.svg" value="MW">Malawi</option>
                                                            <option data-kt-flag="flags/malaysia.svg" value="MY">Malaysia</option>
                                                            <option data-kt-flag="flags/maldives.svg" value="MV">Maldives</option>
                                                            <option data-kt-flag="flags/mali.svg" value="ML">Mali</option>
                                                            <option data-kt-flag="flags/malta.svg" value="MT">Malta</option>
                                                            <option data-kt-flag="flags/marshall-island.svg" value="MH">Marshall Islands</option>
                                                            <option data-kt-flag="flags/martinique.svg" value="MQ">Martinique</option>
                                                            <option data-kt-flag="flags/mauritania.svg" value="MR">Mauritania</option>
                                                            <option data-kt-flag="flags/mauritius.svg" value="MU">Mauritius</option>
                                                            <option data-kt-flag="flags/mexico.svg" value="MX">Mexico</option>
                                                            <option data-kt-flag="flags/micronesia.svg" value="FM">Micronesia, Federated States of</option>
                                                            <option data-kt-flag="flags/moldova.svg" value="MD">Moldova, Republic of</option>
                                                            <option data-kt-flag="flags/monaco.svg" value="MC">Monaco</option>
                                                            <option data-kt-flag="flags/mongolia.svg" value="MN">Mongolia</option>
                                                            <option data-kt-flag="flags/montenegro.svg" value="ME">Montenegro</option>
                                                            <option data-kt-flag="flags/montserrat.svg" value="MS">Montserrat</option>
                                                            <option data-kt-flag="flags/morocco.svg" value="MA">Morocco</option>
                                                            <option data-kt-flag="flags/mozambique.svg" value="MZ">Mozambique</option>
                                                            <option data-kt-flag="flags/myanmar.svg" value="MM">Myanmar</option>
                                                            <option data-kt-flag="flags/namibia.svg" value="NA">Namibia</option>
                                                            <option data-kt-flag="flags/nauru.svg" value="NR">Nauru</option>
                                                            <option data-kt-flag="flags/nepal.svg" value="NP">Nepal</option>
                                                            <option data-kt-flag="flags/netherlands.svg" value="NL">Netherlands</option>
                                                            <option data-kt-flag="flags/new-zealand.svg" value="NZ">New Zealand</option>
                                                            <option data-kt-flag="flags/nicaragua.svg" value="NI">Nicaragua</option>
                                                            <option data-kt-flag="flags/niger.svg" value="NE">Niger</option>
                                                            <option data-kt-flag="flags/nigeria.svg" value="NG">Nigeria</option>
                                                            <option data-kt-flag="flags/niue.svg" value="NU">Niue</option>
                                                            <option data-kt-flag="flags/norfolk-island.svg" value="NF">Norfolk Island</option>
                                                            <option data-kt-flag="flags/northern-mariana-islands.svg" value="MP">Northern Mariana Islands</option>
                                                            <option data-kt-flag="flags/norway.svg" value="NO">Norway</option>
                                                            <option data-kt-flag="flags/oman.svg" value="OM">Oman</option>
                                                            <option data-kt-flag="flags/pakistan.svg" value="PK">Pakistan</option>
                                                            <option data-kt-flag="flags/palau.svg" value="PW">Palau</option>
                                                            <option data-kt-flag="flags/palestine.svg" value="PS">Palestinian Territory, Occupied</option>
                                                            <option data-kt-flag="flags/panama.svg" value="PA">Panama</option>
                                                            <option data-kt-flag="flags/papua-new-guinea.svg" value="PG">Papua New Guinea</option>
                                                            <option data-kt-flag="flags/paraguay.svg" value="PY">Paraguay</option>
                                                            <option data-kt-flag="flags/peru.svg" value="PE">Peru</option>
                                                            <option data-kt-flag="flags/philippines.svg" value="PH">Philippines</option>
                                                            <option data-kt-flag="flags/poland.svg" value="PL">Poland</option>
                                                            <option data-kt-flag="flags/portugal.svg" value="PT">Portugal</option>
                                                            <option data-kt-flag="flags/puerto-rico.svg" value="PR">Puerto Rico</option>
                                                            <option data-kt-flag="flags/qatar.svg" value="QA">Qatar</option>
                                                            <option data-kt-flag="flags/romania.svg" value="RO">Romania</option>
                                                            <option data-kt-flag="flags/russia.svg" value="RU">Russian Federation</option>
                                                            <option data-kt-flag="flags/rwanda.svg" value="RW">Rwanda</option>
                                                            <option data-kt-flag="flags/st-barts.svg" value="BL">Saint Barthélemy</option>
                                                            <option data-kt-flag="flags/saint-kitts-and-nevis.svg" value="KN">Saint Kitts and Nevis</option>
                                                            <option data-kt-flag="flags/st-lucia.svg" value="LC">Saint Lucia</option>
                                                            <option data-kt-flag="flags/sint-maarten.svg" value="MF">Saint Martin (French part)</option>
                                                            <option data-kt-flag="flags/st-vincent-and-the-grenadines.svg" value="VC">Saint Vincent and the Grenadines</option>
                                                            <option data-kt-flag="flags/samoa.svg" value="WS">Samoa</option>
                                                            <option data-kt-flag="flags/san-marino.svg" value="SM">San Marino</option>
                                                            <option data-kt-flag="flags/sao-tome-and-prince.svg" value="ST">Sao Tome and Principe</option>
                                                            <option data-kt-flag="flags/saudi-arabia.svg" value="SA">Saudi Arabia</option>
                                                            <option data-kt-flag="flags/senegal.svg" value="SN">Senegal</option>
                                                            <option data-kt-flag="flags/serbia.svg" value="RS">Serbia</option>
                                                            <option data-kt-flag="flags/seychelles.svg" value="SC">Seychelles</option>
                                                            <option data-kt-flag="flags/sierra-leone.svg" value="SL">Sierra Leone</option>
                                                            <option data-kt-flag="flags/singapore.svg" value="SG">Singapore</option>
                                                            <option data-kt-flag="flags/sint-maarten.svg" value="SX">Sint Maarten (Dutch part)</option>
                                                            <option data-kt-flag="flags/slovakia.svg" value="SK">Slovakia</option>
                                                            <option data-kt-flag="flags/slovenia.svg" value="SI">Slovenia</option>
                                                            <option data-kt-flag="flags/solomon-islands.svg" value="SB">Solomon Islands</option>
                                                            <option data-kt-flag="flags/somalia.svg" value="SO">Somalia</option>
                                                            <option data-kt-flag="flags/south-africa.svg" value="ZA">South Africa</option>
                                                            <option data-kt-flag="flags/south-korea.svg" value="KR">South Korea</option>
                                                            <option data-kt-flag="flags/south-sudan.svg" value="SS">South Sudan</option>
                                                            <option data-kt-flag="flags/spain.svg" value="ES">Spain</option>
                                                            <option data-kt-flag="flags/sri-lanka.svg" value="LK">Sri Lanka</option>
                                                            <option data-kt-flag="flags/sudan.svg" value="SD">Sudan</option>
                                                            <option data-kt-flag="flags/suriname.svg" value="SR">Suriname</option>
                                                            <option data-kt-flag="flags/swaziland.svg" value="SZ">Swaziland</option>
                                                            <option data-kt-flag="flags/sweden.svg" value="SE">Sweden</option>
                                                            <option data-kt-flag="flags/switzerland.svg" value="CH">Switzerland</option>
                                                            <option data-kt-flag="flags/syria.svg" value="SY">Syrian Arab Republic</option>
                                                            <option data-kt-flag="flags/taiwan.svg" value="TW">Taiwan, Province of China</option>
                                                            <option data-kt-flag="flags/tajikistan.svg" value="TJ">Tajikistan</option>
                                                            <option data-kt-flag="flags/tanzania.svg" value="TZ">Tanzania, United Republic of</option>
                                                            <option data-kt-flag="flags/thailand.svg" value="TH">Thailand</option>
                                                            <option data-kt-flag="flags/togo.svg" value="TG">Togo</option>
                                                            <option data-kt-flag="flags/tokelau.svg" value="TK">Tokelau</option>
                                                            <option data-kt-flag="flags/tonga.svg" value="TO">Tonga</option>
                                                            <option data-kt-flag="flags/trinidad-and-tobago.svg" value="TT">Trinidad and Tobago</option>
                                                            <option data-kt-flag="flags/tunisia.svg" value="TN">Tunisia</option>
                                                            <option data-kt-flag="flags/turkey.svg" value="TR">Turkey</option>
                                                            <option data-kt-flag="flags/turkmenistan.svg" value="TM">Turkmenistan</option>
                                                            <option data-kt-flag="flags/turks-and-caicos.svg" value="TC">Turks and Caicos Islands</option>
                                                            <option data-kt-flag="flags/tuvalu.svg" value="TV">Tuvalu</option>
                                                            <option data-kt-flag="flags/uganda.svg" value="UG">Uganda</option>
                                                            <option data-kt-flag="flags/ukraine.svg" value="UA">Ukraine</option>
                                                            <option data-kt-flag="flags/united-arab-emirates.svg" value="AE">United Arab Emirates</option>
                                                            <option data-kt-flag="flags/united-kingdom.svg" value="GB">United Kingdom</option>
                                                            <option data-kt-flag="flags/united-states.svg" value="US">United States</option>
                                                            <option data-kt-flag="flags/uruguay.svg" value="UY">Uruguay</option>
                                                            <option data-kt-flag="flags/uzbekistan.svg" value="UZ">Uzbekistan</option>
                                                            <option data-kt-flag="flags/vanuatu.svg" value="VU">Vanuatu</option>
                                                            <option data-kt-flag="flags/venezuela.svg" value="VE">Venezuela, Bolivarian Republic of</option>
                                                            <option data-kt-flag="flags/vietnam.svg" value="VN">Vietnam</option>
                                                            <option data-kt-flag="flags/virgin-islands.svg" value="VI">Virgin Islands</option>
                                                            <option data-kt-flag="flags/yemen.svg" value="YE">Yemen</option>
                                                            <option data-kt-flag="flags/zambia.svg" value="ZM">Zambia</option>
                                                            <option data-kt-flag="flags/zimbabwe.svg" value="ZW">Zimbabwe</option>
                                                        </select>
                                                    </div>
                                                    <!--end::Col-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="row mb-6">
                                                    <!--begin::Label-->
                                                    <label class="col-lg-4 col-form-label required fw-bold fs-6">Language</label>
                                                    <!--end::Label-->
                                                    <!--begin::Col-->
                                                    <div class="col-lg-8 fv-row">
                                                        <!--begin::Input-->
                                                        <select name="language" aria-label="Select a Language" data-control="select2" data-placeholder="Select a language..." class="form-select form-select-solid form-select-lg">
                                                            <option value="">Select a Language...</option>
                                                            <option data-kt-flag="flags/indonesia.svg" value="id">Bahasa Indonesia - Indonesian</option>
                                                            <option data-kt-flag="flags/malaysia.svg" value="msa">Bahasa Melayu - Malay</option>
                                                            <option data-kt-flag="flags/canada.svg" value="ca">Català - Catalan</option>
                                                            <option data-kt-flag="flags/czech-republic.svg" value="cs">Čeština - Czech</option>
                                                            <option data-kt-flag="flags/netherlands.svg" value="da">Dansk - Danish</option>
                                                            <option data-kt-flag="flags/germany.svg" value="de">Deutsch - German</option>
                                                            <option data-kt-flag="flags/united-kingdom.svg" value="en">English</option>
                                                            <option data-kt-flag="flags/united-kingdom.svg" value="en-gb">English UK - British English</option>
                                                            <option data-kt-flag="flags/spain.svg" value="es">Español - Spanish</option>
                                                            <option data-kt-flag="flags/philippines.svg" value="fil">Filipino</option>
                                                            <option data-kt-flag="flags/france.svg" value="fr">Français - French</option>
                                                            <option data-kt-flag="flags/gabon.svg" value="ga">Gaeilge - Irish (beta)</option>
                                                            <option data-kt-flag="flags/greenland.svg" value="gl">Galego - Galician (beta)</option>
                                                            <option data-kt-flag="flags/croatia.svg" value="hr">Hrvatski - Croatian</option>
                                                            <option data-kt-flag="flags/italy.svg" value="it">Italiano - Italian</option>
                                                            <option data-kt-flag="flags/hungary.svg" value="hu">Magyar - Hungarian</option>
                                                            <option data-kt-flag="flags/netherlands.svg" value="nl">Nederlands - Dutch</option>
                                                            <option data-kt-flag="flags/norway.svg" value="no">Norsk - Norwegian</option>
                                                            <option data-kt-flag="flags/poland.svg" value="pl">Polski - Polish</option>
                                                            <option data-kt-flag="flags/portugal.svg" value="pt">Português - Portuguese</option>
                                                            <option data-kt-flag="flags/romania.svg" value="ro">Română - Romanian</option>
                                                            <option data-kt-flag="flags/slovakia.svg" value="sk">Slovenčina - Slovak</option>
                                                            <option data-kt-flag="flags/finland.svg" value="fi">Suomi - Finnish</option>
                                                            <option data-kt-flag="flags/el-salvador.svg" value="sv">Svenska - Swedish</option>
                                                            <option data-kt-flag="flags/virgin-islands.svg" value="vi">Tiếng Việt - Vietnamese</option>
                                                            <option data-kt-flag="flags/turkey.svg" value="tr">Türkçe - Turkish</option>
                                                            <option data-kt-flag="flags/greece.svg" value="el">Ελληνικά - Greek</option>
                                                            <option data-kt-flag="flags/bulgaria.svg" value="bg">Български език - Bulgarian</option>
                                                            <option data-kt-flag="flags/russia.svg" value="ru">Русский - Russian</option>
                                                            <option data-kt-flag="flags/suriname.svg" value="sr">Српски - Serbian</option>
                                                            <option data-kt-flag="flags/ukraine.svg" value="uk">Українська мова - Ukrainian</option>
                                                            <option data-kt-flag="flags/israel.svg" value="he">עִבְרִית - Hebrew</option>
                                                            <option data-kt-flag="flags/pakistan.svg" value="ur">اردو - Urdu (beta)</option>
                                                            <option data-kt-flag="flags/argentina.svg" value="ar">العربية - Arabic</option>
                                                            <option data-kt-flag="flags/argentina.svg" value="fa">فارسی - Persian</option>
                                                            <option data-kt-flag="flags/mauritania.svg" value="mr">मराठी - Marathi</option>
                                                            <option data-kt-flag="flags/india.svg" value="hi">हिन्दी - Hindi</option>
                                                            <option data-kt-flag="flags/bangladesh.svg" value="bn">বাংলা - Bangla</option>
                                                            <option data-kt-flag="flags/guam.svg" value="gu">ગુજરાતી - Gujarati</option>
                                                            <option data-kt-flag="flags/india.svg" value="ta">தமிழ் - Tamil</option>
                                                            <option data-kt-flag="flags/saint-kitts-and-nevis.svg" value="kn">ಕನ್ನಡ - Kannada</option>
                                                            <option data-kt-flag="flags/thailand.svg" value="th">ภาษาไทย - Thai</option>
                                                            <option data-kt-flag="flags/south-korea.svg" value="ko">한국어 - Korean</option>
                                                            <option data-kt-flag="flags/japan.svg" value="ja">日本語 - Japanese</option>
                                                            <option data-kt-flag="flags/china.svg" value="zh-cn">简体中文 - Simplified Chinese</option>
                                                            <option data-kt-flag="flags/taiwan.svg" value="zh-tw">繁體中文 - Traditional Chinese</option>
                                                        </select>
                                                        <!--end::Input-->
                                                        <!--begin::Hint-->
                                                        <div class="form-text">Please select a preferred language, including date, time, and number formatting.</div>
                                                        <!--end::Hint-->
                                                    </div>
                                                    <!--end::Col-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="row mb-6">
                                                    <!--begin::Label-->
                                                    <label class="col-lg-4 col-form-label required fw-bold fs-6">Time Zone</label>
                                                    <!--end::Label-->
                                                    <!--begin::Col-->
                                                    <div class="col-lg-8 fv-row">
                                                        <select name="timezone" aria-label="Select a Timezone" data-control="select2" data-placeholder="Select a timezone.." class="form-select form-select-solid form-select-lg">
                                                            <option value="">Select a Timezone..</option>
                                                            <option data-bs-offset="-39600" value="International Date Line West">(GMT-11:00) International Date Line West</option>
                                                            <option data-bs-offset="-39600" value="Midway Island">(GMT-11:00) Midway Island</option>
                                                            <option data-bs-offset="-39600" value="Samoa">(GMT-11:00) Samoa</option>
                                                            <option data-bs-offset="-36000" value="Hawaii">(GMT-10:00) Hawaii</option>
                                                            <option data-bs-offset="-28800" value="Alaska">(GMT-08:00) Alaska</option>
                                                            <option data-bs-offset="-25200" value="Pacific Time (US &amp; Canada)">(GMT-07:00) Pacific Time (US &amp; Canada)</option>
                                                            <option data-bs-offset="-25200" value="Tijuana">(GMT-07:00) Tijuana</option>
                                                            <option data-bs-offset="-25200" value="Arizona">(GMT-07:00) Arizona</option>
                                                            <option data-bs-offset="-21600" value="Mountain Time (US &amp; Canada)">(GMT-06:00) Mountain Time (US &amp; Canada)</option>
                                                            <option data-bs-offset="-21600" value="Chihuahua">(GMT-06:00) Chihuahua</option>
                                                            <option data-bs-offset="-21600" value="Mazatlan">(GMT-06:00) Mazatlan</option>
                                                            <option data-bs-offset="-21600" value="Saskatchewan">(GMT-06:00) Saskatchewan</option>
                                                            <option data-bs-offset="-21600" value="Central America">(GMT-06:00) Central America</option>
                                                            <option data-bs-offset="-18000" value="Central Time (US &amp; Canada)">(GMT-05:00) Central Time (US &amp; Canada)</option>
                                                            <option data-bs-offset="-18000" value="Guadalajara">(GMT-05:00) Guadalajara</option>
                                                            <option data-bs-offset="-18000" value="Mexico City">(GMT-05:00) Mexico City</option>
                                                            <option data-bs-offset="-18000" value="Monterrey">(GMT-05:00) Monterrey</option>
                                                            <option data-bs-offset="-18000" value="Bogota">(GMT-05:00) Bogota</option>
                                                            <option data-bs-offset="-18000" value="Lima">(GMT-05:00) Lima</option>
                                                            <option data-bs-offset="-18000" value="Quito">(GMT-05:00) Quito</option>
                                                            <option data-bs-offset="-14400" value="Eastern Time (US &amp; Canada)">(GMT-04:00) Eastern Time (US &amp; Canada)</option>
                                                            <option data-bs-offset="-14400" value="Indiana (East)">(GMT-04:00) Indiana (East)</option>
                                                            <option data-bs-offset="-14400" value="Caracas">(GMT-04:00) Caracas</option>
                                                            <option data-bs-offset="-14400" value="La Paz">(GMT-04:00) La Paz</option>
                                                            <option data-bs-offset="-14400" value="Georgetown">(GMT-04:00) Georgetown</option>
                                                            <option data-bs-offset="-10800" value="Atlantic Time (Canada)">(GMT-03:00) Atlantic Time (Canada)</option>
                                                            <option data-bs-offset="-10800" value="Santiago">(GMT-03:00) Santiago</option>
                                                            <option data-bs-offset="-10800" value="Brasilia">(GMT-03:00) Brasilia</option>
                                                            <option data-bs-offset="-10800" value="Buenos Aires">(GMT-03:00) Buenos Aires</option>
                                                            <option data-bs-offset="-9000" value="Newfoundland">(GMT-02:30) Newfoundland</option>
                                                            <option data-bs-offset="-7200" value="Greenland">(GMT-02:00) Greenland</option>
                                                            <option data-bs-offset="-7200" value="Mid-Atlantic">(GMT-02:00) Mid-Atlantic</option>
                                                            <option data-bs-offset="-3600" value="Cape Verde Is.">(GMT-01:00) Cape Verde Is.</option>
                                                            <option data-bs-offset="0" value="Azores">(GMT) Azores</option>
                                                            <option data-bs-offset="0" value="Monrovia">(GMT) Monrovia</option>
                                                            <option data-bs-offset="0" value="UTC">(GMT) UTC</option>
                                                            <option data-bs-offset="3600" value="Dublin">(GMT+01:00) Dublin</option>
                                                            <option data-bs-offset="3600" value="Edinburgh">(GMT+01:00) Edinburgh</option>
                                                            <option data-bs-offset="3600" value="Lisbon">(GMT+01:00) Lisbon</option>
                                                            <option data-bs-offset="3600" value="London">(GMT+01:00) London</option>
                                                            <option data-bs-offset="3600" value="Casablanca">(GMT+01:00) Casablanca</option>
                                                            <option data-bs-offset="3600" value="West Central Africa">(GMT+01:00) West Central Africa</option>
                                                            <option data-bs-offset="7200" value="Belgrade">(GMT+02:00) Belgrade</option>
                                                            <option data-bs-offset="7200" value="Bratislava">(GMT+02:00) Bratislava</option>
                                                            <option data-bs-offset="7200" value="Budapest">(GMT+02:00) Budapest</option>
                                                            <option data-bs-offset="7200" value="Ljubljana">(GMT+02:00) Ljubljana</option>
                                                            <option data-bs-offset="7200" value="Prague">(GMT+02:00) Prague</option>
                                                            <option data-bs-offset="7200" value="Sarajevo">(GMT+02:00) Sarajevo</option>
                                                            <option data-bs-offset="7200" value="Skopje">(GMT+02:00) Skopje</option>
                                                            <option data-bs-offset="7200" value="Warsaw">(GMT+02:00) Warsaw</option>
                                                            <option data-bs-offset="7200" value="Zagreb">(GMT+02:00) Zagreb</option>
                                                            <option data-bs-offset="7200" value="Brussels">(GMT+02:00) Brussels</option>
                                                            <option data-bs-offset="7200" value="Copenhagen">(GMT+02:00) Copenhagen</option>
                                                            <option data-bs-offset="7200" value="Madrid">(GMT+02:00) Madrid</option>
                                                            <option data-bs-offset="7200" value="Paris">(GMT+02:00) Paris</option>
                                                            <option data-bs-offset="7200" value="Amsterdam">(GMT+02:00) Amsterdam</option>
                                                            <option data-bs-offset="7200" value="Berlin">(GMT+02:00) Berlin</option>
                                                            <option data-bs-offset="7200" value="Bern">(GMT+02:00) Bern</option>
                                                            <option data-bs-offset="7200" value="Rome">(GMT+02:00) Rome</option>
                                                            <option data-bs-offset="7200" value="Stockholm">(GMT+02:00) Stockholm</option>
                                                            <option data-bs-offset="7200" value="Vienna">(GMT+02:00) Vienna</option>
                                                            <option data-bs-offset="7200" value="Cairo">(GMT+02:00) Cairo</option>
                                                            <option data-bs-offset="7200" value="Harare">(GMT+02:00) Harare</option>
                                                            <option data-bs-offset="7200" value="Pretoria">(GMT+02:00) Pretoria</option>
                                                            <option data-bs-offset="10800" value="Bucharest">(GMT+03:00) Bucharest</option>
                                                            <option data-bs-offset="10800" value="Helsinki">(GMT+03:00) Helsinki</option>
                                                            <option data-bs-offset="10800" value="Kiev">(GMT+03:00) Kiev</option>
                                                            <option data-bs-offset="10800" value="Kyiv">(GMT+03:00) Kyiv</option>
                                                            <option data-bs-offset="10800" value="Riga">(GMT+03:00) Riga</option>
                                                            <option data-bs-offset="10800" value="Sofia">(GMT+03:00) Sofia</option>
                                                            <option data-bs-offset="10800" value="Tallinn">(GMT+03:00) Tallinn</option>
                                                            <option data-bs-offset="10800" value="Vilnius">(GMT+03:00) Vilnius</option>
                                                            <option data-bs-offset="10800" value="Athens">(GMT+03:00) Athens</option>
                                                            <option data-bs-offset="10800" value="Istanbul">(GMT+03:00) Istanbul</option>
                                                            <option data-bs-offset="10800" value="Minsk">(GMT+03:00) Minsk</option>
                                                            <option data-bs-offset="10800" value="Jerusalem">(GMT+03:00) Jerusalem</option>
                                                            <option data-bs-offset="10800" value="Moscow">(GMT+03:00) Moscow</option>
                                                            <option data-bs-offset="10800" value="St. Petersburg">(GMT+03:00) St. Petersburg</option>
                                                            <option data-bs-offset="10800" value="Volgograd">(GMT+03:00) Volgograd</option>
                                                            <option data-bs-offset="10800" value="Kuwait">(GMT+03:00) Kuwait</option>
                                                            <option data-bs-offset="10800" value="Riyadh">(GMT+03:00) Riyadh</option>
                                                            <option data-bs-offset="10800" value="Nairobi">(GMT+03:00) Nairobi</option>
                                                            <option data-bs-offset="10800" value="Baghdad">(GMT+03:00) Baghdad</option>
                                                            <option data-bs-offset="14400" value="Abu Dhabi">(GMT+04:00) Abu Dhabi</option>
                                                            <option data-bs-offset="14400" value="Muscat">(GMT+04:00) Muscat</option>
                                                            <option data-bs-offset="14400" value="Baku">(GMT+04:00) Baku</option>
                                                            <option data-bs-offset="14400" value="Tbilisi">(GMT+04:00) Tbilisi</option>
                                                            <option data-bs-offset="14400" value="Yerevan">(GMT+04:00) Yerevan</option>
                                                            <option data-bs-offset="16200" value="Tehran">(GMT+04:30) Tehran</option>
                                                            <option data-bs-offset="16200" value="Kabul">(GMT+04:30) Kabul</option>
                                                            <option data-bs-offset="18000" value="Ekaterinburg">(GMT+05:00) Ekaterinburg</option>
                                                            <option data-bs-offset="18000" value="Islamabad">(GMT+05:00) Islamabad</option>
                                                            <option data-bs-offset="18000" value="Karachi">(GMT+05:00) Karachi</option>
                                                            <option data-bs-offset="18000" value="Tashkent">(GMT+05:00) Tashkent</option>
                                                            <option data-bs-offset="19800" value="Chennai">(GMT+05:30) Chennai</option>
                                                            <option data-bs-offset="19800" value="Kolkata">(GMT+05:30) Kolkata</option>
                                                            <option data-bs-offset="19800" value="Mumbai">(GMT+05:30) Mumbai</option>
                                                            <option data-bs-offset="19800" value="New Delhi">(GMT+05:30) New Delhi</option>
                                                            <option data-bs-offset="19800" value="Sri Jayawardenepura">(GMT+05:30) Sri Jayawardenepura</option>
                                                            <option data-bs-offset="20700" value="Kathmandu">(GMT+05:45) Kathmandu</option>
                                                            <option data-bs-offset="21600" value="Astana">(GMT+06:00) Astana</option>
                                                            <option data-bs-offset="21600" value="Dhaka">(GMT+06:00) Dhaka</option>
                                                            <option data-bs-offset="21600" value="Almaty">(GMT+06:00) Almaty</option>
                                                            <option data-bs-offset="21600" value="Urumqi">(GMT+06:00) Urumqi</option>
                                                            <option data-bs-offset="23400" value="Rangoon">(GMT+06:30) Rangoon</option>
                                                            <option data-bs-offset="25200" value="Novosibirsk">(GMT+07:00) Novosibirsk</option>
                                                            <option data-bs-offset="25200" value="Bangkok">(GMT+07:00) Bangkok</option>
                                                            <option data-bs-offset="25200" value="Hanoi">(GMT+07:00) Hanoi</option>
                                                            <option data-bs-offset="25200" value="Jakarta">(GMT+07:00) Jakarta</option>
                                                            <option data-bs-offset="25200" value="Krasnoyarsk">(GMT+07:00) Krasnoyarsk</option>
                                                            <option data-bs-offset="28800" value="Beijing">(GMT+08:00) Beijing</option>
                                                            <option data-bs-offset="28800" value="Chongqing">(GMT+08:00) Chongqing</option>
                                                            <option data-bs-offset="28800" value="Hong Kong">(GMT+08:00) Hong Kong</option>
                                                            <option data-bs-offset="28800" value="Kuala Lumpur">(GMT+08:00) Kuala Lumpur</option>
                                                            <option data-bs-offset="28800" value="Singapore">(GMT+08:00) Singapore</option>
                                                            <option data-bs-offset="28800" value="Taipei">(GMT+08:00) Taipei</option>
                                                            <option data-bs-offset="28800" value="Perth">(GMT+08:00) Perth</option>
                                                            <option data-bs-offset="28800" value="Irkutsk">(GMT+08:00) Irkutsk</option>
                                                            <option data-bs-offset="28800" value="Ulaan Bataar">(GMT+08:00) Ulaan Bataar</option>
                                                            <option data-bs-offset="32400" value="Seoul">(GMT+09:00) Seoul</option>
                                                            <option data-bs-offset="32400" value="Osaka">(GMT+09:00) Osaka</option>
                                                            <option data-bs-offset="32400" value="Sapporo">(GMT+09:00) Sapporo</option>
                                                            <option data-bs-offset="32400" value="Tokyo">(GMT+09:00) Tokyo</option>
                                                            <option data-bs-offset="32400" value="Yakutsk">(GMT+09:00) Yakutsk</option>
                                                            <option data-bs-offset="34200" value="Darwin">(GMT+09:30) Darwin</option>
                                                            <option data-bs-offset="34200" value="Adelaide">(GMT+09:30) Adelaide</option>
                                                            <option data-bs-offset="36000" value="Canberra">(GMT+10:00) Canberra</option>
                                                            <option data-bs-offset="36000" value="Melbourne">(GMT+10:00) Melbourne</option>
                                                            <option data-bs-offset="36000" value="Sydney">(GMT+10:00) Sydney</option>
                                                            <option data-bs-offset="36000" value="Brisbane">(GMT+10:00) Brisbane</option>
                                                            <option data-bs-offset="36000" value="Hobart">(GMT+10:00) Hobart</option>
                                                            <option data-bs-offset="36000" value="Vladivostok">(GMT+10:00) Vladivostok</option>
                                                            <option data-bs-offset="36000" value="Guam">(GMT+10:00) Guam</option>
                                                            <option data-bs-offset="36000" value="Port Moresby">(GMT+10:00) Port Moresby</option>
                                                            <option data-bs-offset="36000" value="Solomon Is.">(GMT+10:00) Solomon Is.</option>
                                                            <option data-bs-offset="39600" value="Magadan">(GMT+11:00) Magadan</option>
                                                            <option data-bs-offset="39600" value="New Caledonia">(GMT+11:00) New Caledonia</option>
                                                            <option data-bs-offset="43200" value="Fiji">(GMT+12:00) Fiji</option>
                                                            <option data-bs-offset="43200" value="Kamchatka">(GMT+12:00) Kamchatka</option>
                                                            <option data-bs-offset="43200" value="Marshall Is.">(GMT+12:00) Marshall Is.</option>
                                                            <option data-bs-offset="43200" value="Auckland">(GMT+12:00) Auckland</option>
                                                            <option data-bs-offset="43200" value="Wellington">(GMT+12:00) Wellington</option>
                                                            <option data-bs-offset="46800" value="Nuku'alofa">(GMT+13:00) Nuku'alofa</option>
                                                        </select>
                                                    </div>
                                                    <!--end::Col-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="row mb-6">
                                                    <!--begin::Label-->
                                                    <label class="col-lg-4 col-form-label fw-bold fs-6">Currency</label>
                                                    <!--end::Label-->
                                                    <!--begin::Col-->
                                                    <div class="col-lg-8 fv-row">
                                                        <select name="currnecy" aria-label="Select a Timezone" data-control="select2" data-placeholder="Select a currency.." class="form-select form-select-solid form-select-lg">
                                                            <option value="">Select a currency..</option>
                                                            <option data-kt-flag="flags/united-states.svg" value="USD">
                                                                <b>USD</b>&#160;-&#160;USA dollar</option>
                                                            <option data-kt-flag="flags/united-kingdom.svg" value="GBP">
                                                                <b>GBP</b>&#160;-&#160;British pound</option>
                                                            <option data-kt-flag="flags/australia.svg" value="AUD">
                                                                <b>AUD</b>&#160;-&#160;Australian dollar</option>
                                                            <option data-kt-flag="flags/japan.svg" value="JPY">
                                                                <b>JPY</b>&#160;-&#160;Japanese yen</option>
                                                            <option data-kt-flag="flags/sweden.svg" value="SEK">
                                                                <b>SEK</b>&#160;-&#160;Swedish krona</option>
                                                            <option data-kt-flag="flags/canada.svg" value="CAD">
                                                                <b>CAD</b>&#160;-&#160;Canadian dollar</option>
                                                            <option data-kt-flag="flags/switzerland.svg" value="CHF">
                                                                <b>CHF</b>&#160;-&#160;Swiss franc</option>
                                                        </select>
                                                    </div>
                                                    <!--end::Col-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="row mb-6">
                                                    <!--begin::Label-->
                                                    <label class="col-lg-4 col-form-label required fw-bold fs-6">Communication</label>
                                                    <!--end::Label-->
                                                    <!--begin::Col-->
                                                    <div class="col-lg-8 fv-row">
                                                        <!--begin::Options-->
                                                        <div class="d-flex align-items-center mt-3">
                                                            <!--begin::Option-->
                                                            <label class="form-check form-check-inline form-check-solid me-5">
                                                                <input class="form-check-input" name="communication[]" type="checkbox" value="1" />
                                                                <span class="fw-bold ps-2 fs-6">Email</span>
                                                            </label>
                                                            <!--end::Option-->
                                                            <!--begin::Option-->
                                                            <label class="form-check form-check-inline form-check-solid">
                                                                <input class="form-check-input" name="communication[]" type="checkbox" value="2" />
                                                                <span class="fw-bold ps-2 fs-6">Phone</span>
                                                            </label>
                                                            <!--end::Option-->
                                                        </div>
                                                        <!--end::Options-->
                                                    </div>
                                                    <!--end::Col-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="row mb-0">
                                                    <!--begin::Label-->
                                                    <label class="col-lg-4 col-form-label fw-bold fs-6">Allow Marketing</label>
                                                    <!--begin::Label-->
                                                    <!--begin::Label-->
                                                    <div class="col-lg-8 d-flex align-items-center">
                                                        <div class="form-check form-check-solid form-switch fv-row">
                                                            <input class="form-check-input w-45px h-30px" type="checkbox" id="allowmarketing" checked="checked" />
                                                            <label class="form-check-label" for="allowmarketing"></label>
                                                        </div>
                                                    </div>
                                                    <!--begin::Label-->
                                                </div>
                                                <!--end::Input group-->
                                            </div>
                                            <!--end::Card body-->
                                            <!--begin::Actions-->
                                            <div class="card-footer d-flex justify-content-end py-6 px-9">
                                                <button type="reset" class="btn btn-light btn-active-light-primary me-2">Discard</button>
                                                <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Save Changes</button>
                                            </div>
                                            <!--end::Actions-->
                                        </form>
                                        <!--end::Form-->
                                    </div>
                                    <!--end::Content-->
                                </div>
                                <!--end::Basic info-->
                                <!--begin::Sign-in Method-->
                                <div class="card mb-5 mb-xl-10">
                                    <!--begin::Card header-->
                                    <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_signin_method">
                                        <div class="card-title m-0">
                                            <h3 class="fw-bolder m-0">Sign-in Method</h3>
                                        </div>
                                    </div>
                                    <!--end::Card header-->
                                    <!--begin::Content-->
                                    <div id="kt_account_settings_signin_method" class="collapse show">
                                        <!--begin::Card body-->
                                        <div class="card-body border-top p-9">
                                            <!--begin::Email Address-->
                                            <div class="d-flex flex-wrap align-items-center">
                                                <!--begin::Label-->
                                                <div id="kt_signin_email">
                                                    <div class="fs-6 fw-bolder mb-1">Email Address</div>
                                                    <div class="fw-bold text-gray-600">support@keenthemes.com</div>
                                                </div>
                                                <!--end::Label-->
                                                <!--begin::Edit-->
                                                <div id="kt_signin_email_edit" class="flex-row-fluid d-none">
                                                    <!--begin::Form-->
                                                    <form id="kt_signin_change_email" class="form" novalidate="novalidate">
                                                        <div class="row mb-6">
                                                            <div class="col-lg-6 mb-4 mb-lg-0">
                                                                <div class="fv-row mb-0">
                                                                    <label for="emailaddress" class="form-label fs-6 fw-bolder mb-3">Enter New Email Address</label>
                                                                    <input type="email" class="form-control form-control-lg form-control-solid" id="emailaddress" placeholder="Email Address" name="emailaddress" value="support@keenthemes.com" />
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="fv-row mb-0">
                                                                    <label for="confirmemailpassword" class="form-label fs-6 fw-bolder mb-3">Confirm Password</label>
                                                                    <input type="password" class="form-control form-control-lg form-control-solid" name="confirmemailpassword" id="confirmemailpassword" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex">
                                                            <button id="kt_signin_submit" type="button" class="btn btn-primary me-2 px-6">Update Email</button>
                                                            <button id="kt_signin_cancel" type="button" class="btn btn-color-gray-400 btn-active-light-primary px-6">Cancel</button>
                                                        </div>
                                                    </form>
                                                    <!--end::Form-->
                                                </div>
                                                <!--end::Edit-->
                                                <!--begin::Action-->
                                                <div id="kt_signin_email_button" class="ms-auto">
                                                    <button class="btn btn-light btn-active-light-primary">Change Email</button>
                                                </div>
                                                <!--end::Action-->
                                            </div>
                                            <!--end::Email Address-->
                                            <!--begin::Separator-->
                                            <div class="separator separator-dashed my-6"></div>
                                            <!--end::Separator-->
                                            <!--begin::Password-->
                                            <div class="d-flex flex-wrap align-items-center mb-10">
                                                <!--begin::Label-->
                                                <div id="kt_signin_password">
                                                    <div class="fs-6 fw-bolder mb-1">Password</div>
                                                    <div class="fw-bold text-gray-600">************</div>
                                                </div>
                                                <!--end::Label-->
                                                <!--begin::Edit-->
                                                <div id="kt_signin_password_edit" class="flex-row-fluid d-none">
                                                    <!--begin::Form-->
                                                    <form id="kt_signin_change_password" class="form" novalidate="novalidate">
                                                        <div class="row mb-1">
                                                            <div class="col-lg-4">
                                                                <div class="fv-row mb-0">
                                                                    <label for="currentpassword" class="form-label fs-6 fw-bolder mb-3">Current Password</label>
                                                                    <input type="password" class="form-control form-control-lg form-control-solid" name="currentpassword" id="currentpassword" />
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="fv-row mb-0">
                                                                    <label for="newpassword" class="form-label fs-6 fw-bolder mb-3">New Password</label>
                                                                    <input type="password" class="form-control form-control-lg form-control-solid" name="newpassword" id="newpassword" />
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="fv-row mb-0">
                                                                    <label for="confirmpassword" class="form-label fs-6 fw-bolder mb-3">Confirm New Password</label>
                                                                    <input type="password" class="form-control form-control-lg form-control-solid" name="confirmpassword" id="confirmpassword" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-text mb-5">Password must be at least 8 character and contain symbols</div>
                                                        <div class="d-flex">
                                                            <button id="kt_password_submit" type="button" class="btn btn-primary me-2 px-6">Update Password</button>
                                                            <button id="kt_password_cancel" type="button" class="btn btn-color-gray-400 btn-active-light-primary px-6">Cancel</button>
                                                        </div>
                                                    </form>
                                                    <!--end::Form-->
                                                </div>
                                                <!--end::Edit-->
                                                <!--begin::Action-->
                                                <div id="kt_signin_password_button" class="ms-auto">
                                                    <button class="btn btn-light btn-active-light-primary">Reset Password</button>
                                                </div>
                                                <!--end::Action-->
                                            </div>
                                            <!--end::Password-->
                                            <!--begin::Notice-->
                                            <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed p-6">
                                                <!--begin::Icon-->
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen048.svg-->
                                                <span class="svg-icon svg-icon-2tx svg-icon-primary me-4">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<path opacity="0.3" d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z" fill="black" />
														<path d="M10.5606 11.3042L9.57283 10.3018C9.28174 10.0065 8.80522 10.0065 8.51412 10.3018C8.22897 10.5912 8.22897 11.0559 8.51412 11.3452L10.4182 13.2773C10.8099 13.6747 11.451 13.6747 11.8427 13.2773L15.4859 9.58051C15.771 9.29117 15.771 8.82648 15.4859 8.53714C15.1948 8.24176 14.7183 8.24176 14.4272 8.53714L11.7002 11.3042C11.3869 11.6221 10.874 11.6221 10.5606 11.3042Z" fill="black" />
													</svg>
												</span>
                                                <!--end::Svg Icon-->
                                                <!--end::Icon-->
                                                <!--begin::Wrapper-->
                                                <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                                                    <!--begin::Content-->
                                                    <div class="mb-3 mb-md-0 fw-bold">
                                                        <h4 class="text-gray-900 fw-bolder">Secure Your Account</h4>
                                                        <div class="fs-6 text-gray-700 pe-7">Two-factor authentication adds an extra layer of security to your account. To log in, in addition you'll need to provide a 6 digit code</div>
                                                    </div>
                                                    <!--end::Content-->
                                                    <!--begin::Action-->
                                                    <a href="#" class="btn btn-primary px-6 align-self-center text-nowrap" data-bs-toggle="modal" data-bs-target="#kt_modal_two_factor_authentication">Enable</a>
                                                    <!--end::Action-->
                                                </div>
                                                <!--end::Wrapper-->
                                            </div>
                                            <!--end::Notice-->
                                        </div>
                                        <!--end::Card body-->
                                    </div>
                                    <!--end::Content-->
                                </div>
                                <!--end::Sign-in Method-->
                                <!--begin::Connected Accounts-->
                                <div class="card mb-5 mb-xl-10">
                                    <!--begin::Card header-->
                                    <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_connected_accounts" aria-expanded="true" aria-controls="kt_account_connected_accounts">
                                        <div class="card-title m-0">
                                            <h3 class="fw-bolder m-0">Connected Accounts</h3>
                                        </div>
                                    </div>
                                    <!--end::Card header-->
                                    <!--begin::Content-->
                                    <div id="kt_account_settings_connected_accounts" class="collapse show">
                                        <!--begin::Card body-->
                                        <div class="card-body border-top p-9">
                                            <!--begin::Notice-->
                                            <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed mb-9 p-6">
                                                <!--begin::Icon-->
                                                <!--begin::Svg Icon | path: icons/duotune/art/art006.svg-->
                                                <span class="svg-icon svg-icon-2tx svg-icon-primary me-4">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<path opacity="0.3" d="M22 19V17C22 16.4 21.6 16 21 16H8V3C8 2.4 7.6 2 7 2H5C4.4 2 4 2.4 4 3V19C4 19.6 4.4 20 5 20H21C21.6 20 22 19.6 22 19Z" fill="black" />
														<path d="M20 5V21C20 21.6 19.6 22 19 22H17C16.4 22 16 21.6 16 21V8H8V4H19C19.6 4 20 4.4 20 5ZM3 8H4V4H3C2.4 4 2 4.4 2 5V7C2 7.6 2.4 8 3 8Z" fill="black" />
													</svg>
												</span>
                                                <!--end::Svg Icon-->
                                                <!--end::Icon-->
                                                <!--begin::Wrapper-->
                                                <div class="d-flex flex-stack flex-grow-1">
                                                    <!--begin::Content-->
                                                    <div class="fw-bold">
                                                        <div class="fs-6 text-gray-700">Two-factor authentication adds an extra layer of security to your account. To log in, in you'll need to provide a 4 digit amazing code.
                                                            <a href="#" class="fw-bolder">Learn More</a></div>
                                                    </div>
                                                    <!--end::Content-->
                                                </div>
                                                <!--end::Wrapper-->
                                            </div>
                                            <!--end::Notice-->
                                            <!--begin::Items-->
                                            <div class="py-2">
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack">
                                                    <div class="d-flex">
                                                        <img src="assets/media/svg/brand-logos/google-icon.svg" class="w-30px me-6" alt="" />
                                                        <div class="d-flex flex-column">
                                                            <a href="#" class="fs-5 text-dark text-hover-primary fw-bolder">Google</a>
                                                            <div class="fs-6 fw-bold text-gray-400">Plan properly your workflow</div>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex justify-content-end">
                                                        <div class="form-check form-check-solid form-switch">
                                                            <input class="form-check-input w-45px h-30px" type="checkbox" id="googleswitch" checked="checked" />
                                                            <label class="form-check-label" for="googleswitch"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Item-->
                                                <div class="separator separator-dashed my-5"></div>
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack">
                                                    <div class="d-flex">
                                                        <img src="assets/media/svg/brand-logos/github.svg" class="w-30px me-6" alt="" />
                                                        <div class="d-flex flex-column">
                                                            <a href="#" class="fs-5 text-dark text-hover-primary fw-bolder">Github</a>
                                                            <div class="fs-6 fw-bold text-gray-400">Keep eye on on your Repositories</div>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex justify-content-end">
                                                        <div class="form-check form-check-solid form-switch">
                                                            <input class="form-check-input w-45px h-30px" type="checkbox" id="githubswitch" checked="checked" />
                                                            <label class="form-check-label" for="githubswitch"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Item-->
                                                <div class="separator separator-dashed my-5"></div>
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack">
                                                    <div class="d-flex">
                                                        <img src="assets/media/svg/brand-logos/slack-icon.svg" class="w-30px me-6" alt="" />
                                                        <div class="d-flex flex-column">
                                                            <a href="#" class="fs-5 text-dark text-hover-primary fw-bolder">Slack</a>
                                                            <div class="fs-6 fw-bold text-gray-400">Integrate Projects Discussions</div>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex justify-content-end">
                                                        <div class="form-check form-check-solid form-switch">
                                                            <input class="form-check-input w-45px h-30px" type="checkbox" id="slackswitch" />
                                                            <label class="form-check-label" for="slackswitch"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Item-->
                                            </div>
                                            <!--end::Items-->
                                        </div>
                                        <!--end::Card body-->
                                        <!--begin::Card footer-->
                                        <div class="card-footer d-flex justify-content-end py-6 px-9">
                                            <button class="btn btn-light btn-active-light-primary me-2">Discard</button>
                                            <button class="btn btn-primary">Save Changes</button>
                                        </div>
                                        <!--end::Card footer-->
                                    </div>
                                    <!--end::Content-->
                                </div>
                                <!--end::Connected Accounts-->
                                <!--begin::Notifications-->
                                <div class="card mb-5 mb-xl-10">
                                    <!--begin::Card header-->
                                    <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_email_preferences" aria-expanded="true" aria-controls="kt_account_email_preferences">
                                        <div class="card-title m-0">
                                            <h3 class="fw-bolder m-0">Email Preferences</h3>
                                        </div>
                                    </div>
                                    <!--begin::Card header-->
                                    <!--begin::Content-->
                                    <div id="kt_account_settings_email_preferences" class="collapse show">
                                        <!--begin::Form-->
                                        <form class="form">
                                            <!--begin::Card body-->
                                            <div class="card-body border-top px-9 py-9">
                                                <!--begin::Option-->
                                                <label class="form-check form-check-custom form-check-solid align-items-start">
                                                    <!--begin::Input-->
                                                    <input class="form-check-input me-3" type="checkbox" name="email-preferences[]" value="1" />
                                                    <!--end::Input-->
                                                    <!--begin::Label-->
                                                    <span class="form-check-label d-flex flex-column align-items-start">
														<span class="fw-bolder fs-5 mb-0">Successful Payments</span>
														<span class="text-muted fs-6">Receive a notification for every successful payment.</span>
													</span>
                                                    <!--end::Label-->
                                                </label>
                                                <!--end::Option-->
                                                <!--begin::Option-->
                                                <div class="separator separator-dashed my-6"></div>
                                                <!--end::Option-->
                                                <!--begin::Option-->
                                                <label class="form-check form-check-custom form-check-solid align-items-start">
                                                    <!--begin::Input-->
                                                    <input class="form-check-input me-3" type="checkbox" name="email-preferences[]" checked="checked" value="1" />
                                                    <!--end::Input-->
                                                    <!--begin::Label-->
                                                    <span class="form-check-label d-flex flex-column align-items-start">
														<span class="fw-bolder fs-5 mb-0">Payouts</span>
														<span class="text-muted fs-6">Receive a notification for every initiated payout.</span>
													</span>
                                                    <!--end::Label-->
                                                </label>
                                                <!--end::Option-->
                                                <!--begin::Option-->
                                                <div class="separator separator-dashed my-6"></div>
                                                <!--end::Option-->
                                                <!--begin::Option-->
                                                <label class="form-check form-check-custom form-check-solid align-items-start">
                                                    <!--begin::Input-->
                                                    <input class="form-check-input me-3" type="checkbox" name="email-preferences[]" value="1" />
                                                    <!--end::Input-->
                                                    <!--begin::Label-->
                                                    <span class="form-check-label d-flex flex-column align-items-start">
														<span class="fw-bolder fs-5 mb-0">Fee Collection</span>
														<span class="text-muted fs-6">Receive a notification each time you collect a fee from sales</span>
													</span>
                                                    <!--end::Label-->
                                                </label>
                                                <!--end::Option-->
                                                <!--begin::Option-->
                                                <div class="separator separator-dashed my-6"></div>
                                                <!--end::Option-->
                                                <!--begin::Option-->
                                                <label class="form-check form-check-custom form-check-solid align-items-start">
                                                    <!--begin::Input-->
                                                    <input class="form-check-input me-3" type="checkbox" name="email-preferences[]" checked="checked" value="1" />
                                                    <!--end::Input-->
                                                    <!--begin::Label-->
                                                    <span class="form-check-label d-flex flex-column align-items-start">
														<span class="fw-bolder fs-5 mb-0">Customer Payment Dispute</span>
														<span class="text-muted fs-6">Receive a notification if a payment is disputed by a customer and for dispute purposes.</span>
													</span>
                                                    <!--end::Label-->
                                                </label>
                                                <!--end::Option-->
                                                <!--begin::Option-->
                                                <div class="separator separator-dashed my-6"></div>
                                                <!--end::Option-->
                                                <!--begin::Option-->
                                                <label class="form-check form-check-custom form-check-solid align-items-start">
                                                    <!--begin::Input-->
                                                    <input class="form-check-input me-3" type="checkbox" name="email-preferences[]" value="1" />
                                                    <!--end::Input-->
                                                    <!--begin::Label-->
                                                    <span class="form-check-label d-flex flex-column align-items-start">
														<span class="fw-bolder fs-5 mb-0">Refund Alerts</span>
														<span class="text-muted fs-6">Receive a notification if a payment is stated as risk by the Finance Department.</span>
													</span>
                                                    <!--end::Label-->
                                                </label>
                                                <!--end::Option-->
                                                <!--begin::Option-->
                                                <div class="separator separator-dashed my-6"></div>
                                                <!--end::Option-->
                                                <!--begin::Option-->
                                                <label class="form-check form-check-custom form-check-solid align-items-start">
                                                    <!--begin::Input-->
                                                    <input class="form-check-input me-3" type="checkbox" name="email-preferences[]" checked="checked" value="1" />
                                                    <!--end::Input-->
                                                    <!--begin::Label-->
                                                    <span class="form-check-label d-flex flex-column align-items-start">
														<span class="fw-bolder fs-5 mb-0">Invoice Payments</span>
														<span class="text-muted fs-6">Receive a notification if a customer sends an incorrect amount to pay their invoice.</span>
													</span>
                                                    <!--end::Label-->
                                                </label>
                                                <!--end::Option-->
                                                <!--begin::Option-->
                                                <div class="separator separator-dashed my-6"></div>
                                                <!--end::Option-->
                                                <!--begin::Option-->
                                                <label class="form-check form-check-custom form-check-solid align-items-start">
                                                    <!--begin::Input-->
                                                    <input class="form-check-input me-3" type="checkbox" name="email-preferences[]" value="1" />
                                                    <!--end::Input-->
                                                    <!--begin::Label-->
                                                    <span class="form-check-label d-flex flex-column align-items-start">
														<span class="fw-bolder fs-5 mb-0">Webhook API Endpoints</span>
														<span class="text-muted fs-6">Receive notifications for consistently failing webhook API endpoints.</span>
													</span>
                                                    <!--end::Label-->
                                                </label>
                                                <!--end::Option-->
                                            </div>
                                            <!--end::Card body-->
                                            <!--begin::Card footer-->
                                            <div class="card-footer d-flex justify-content-end py-6 px-9">
                                                <button class="btn btn-light btn-active-light-primary me-2">Discard</button>
                                                <button class="btn btn-primary px-6">Save Changes</button>
                                            </div>
                                            <!--end::Card footer-->
                                        </form>
                                        <!--end::Form-->
                                    </div>
                                    <!--end::Content-->
                                </div>
                                <!--end::Notifications-->
                                <!--begin::Notifications-->
                                <div class="card mb-5 mb-xl-10">
                                    <!--begin::Card header-->
                                    <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_notifications" aria-expanded="true" aria-controls="kt_account_notifications">
                                        <div class="card-title m-0">
                                            <h3 class="fw-bolder m-0">Notifications</h3>
                                        </div>
                                    </div>
                                    <!--begin::Card header-->
                                    <!--begin::Content-->
                                    <div id="kt_account_settings_notifications" class="collapse show">
                                        <!--begin::Form-->
                                        <form class="form">
                                            <!--begin::Card body-->
                                            <div class="card-body border-top px-9 pt-3 pb-4">
                                                <!--begin::Table-->
                                                <div class="table-responsive">
                                                    <table class="table table-row-dashed border-gray-300 align-middle gy-6">
                                                        <tbody class="fs-6 fw-bold">
                                                        <!--begin::Table row-->
                                                        <tr>
                                                            <td class="min-w-250px fs-4 fw-bolder">Notifications</td>
                                                            <td class="w-125px">
                                                                <div class="form-check form-check-solid">
                                                                    <input class="form-check-input" type="checkbox" value="" id="kt_settings_notification_email" checked="checked" data-kt-check="true" data-kt-check-target="[data-kt-settings-notification=email]" />
                                                                    <label class="form-check-label ps-2" for="kt_settings_notification_email">Email</label>
                                                                </div>
                                                            </td>
                                                            <td class="w-125px">
                                                                <div class="form-check form-check-solid">
                                                                    <input class="form-check-input" type="checkbox" value="" id="kt_settings_notification_phone" checked="checked" data-kt-check="true" data-kt-check-target="[data-kt-settings-notification=phone]" />
                                                                    <label class="form-check-label ps-2" for="kt_settings_notification_phone">Phone</label>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <!--begin::Table row-->
                                                        <!--begin::Table row-->
                                                        <tr>
                                                            <td>Billing Updates</td>
                                                            <td>
                                                                <div class="form-check form-check-solid">
                                                                    <input class="form-check-input" type="checkbox" value="1" id="billing1" checked="checked" data-kt-settings-notification="email" />
                                                                    <label class="form-check-label ps-2" for="billing1"></label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="form-check form-check-solid">
                                                                    <input class="form-check-input" type="checkbox" value="" id="billing2" checked="checked" data-kt-settings-notification="phone" />
                                                                    <label class="form-check-label ps-2" for="billing2"></label>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <!--begin::Table row-->
                                                        <!--begin::Table row-->
                                                        <tr>
                                                            <td>New Team Members</td>
                                                            <td>
                                                                <div class="form-check form-check-solid">
                                                                    <input class="form-check-input" type="checkbox" value="" id="team1" checked="checked" data-kt-settings-notification="email" />
                                                                    <label class="form-check-label ps-2" for="team1"></label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="form-check form-check-solid">
                                                                    <input class="form-check-input" type="checkbox" value="" id="team2" data-kt-settings-notification="phone" />
                                                                    <label class="form-check-label ps-2" for="team2"></label>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <!--begin::Table row-->
                                                        <!--begin::Table row-->
                                                        <tr>
                                                            <td>Completed Projects</td>
                                                            <td>
                                                                <div class="form-check form-check-solid">
                                                                    <input class="form-check-input" type="checkbox" value="" id="project1" data-kt-settings-notification="email" />
                                                                    <label class="form-check-label ps-2" for="project1"></label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="form-check form-check-solid">
                                                                    <input class="form-check-input" type="checkbox" value="" id="project2" checked="checked" data-kt-settings-notification="phone" />
                                                                    <label class="form-check-label ps-2" for="project2"></label>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <!--begin::Table row-->
                                                        <!--begin::Table row-->
                                                        <tr>
                                                            <td class="border-bottom-0">Newsletters</td>
                                                            <td class="border-bottom-0">
                                                                <div class="form-check form-check-solid">
                                                                    <input class="form-check-input" type="checkbox" value="" id="newsletter1" data-kt-settings-notification="email" />
                                                                    <label class="form-check-label ps-2" for="newsletter1"></label>
                                                                </div>
                                                            </td>
                                                            <td class="border-bottom-0">
                                                                <div class="form-check form-check-solid">
                                                                    <input class="form-check-input" type="checkbox" value="" id="newsletter2" data-kt-settings-notification="phone" />
                                                                    <label class="form-check-label ps-2" for="newsletter2"></label>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <!--begin::Table row-->
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!--end::Table-->
                                            </div>
                                            <!--end::Card body-->
                                            <!--begin::Card footer-->
                                            <div class="card-footer d-flex justify-content-end py-6 px-9">
                                                <button class="btn btn-light btn-active-light-primary me-2">Discard</button>
                                                <button class="btn btn-primary px-6">Save Changes</button>
                                            </div>
                                            <!--end::Card footer-->
                                        </form>
                                        <!--end::Form-->
                                    </div>
                                    <!--end::Content-->
                                </div>
                                <!--end::Notifications-->
                                <!--begin::Deactivate Account-->
                                <div class="card">
                                    <!--begin::Card header-->
                                    <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_deactivate" aria-expanded="true" aria-controls="kt_account_deactivate">
                                        <div class="card-title m-0">
                                            <h3 class="fw-bolder m-0">Deactivate Account</h3>
                                        </div>
                                    </div>
                                    <!--end::Card header-->
                                    <!--begin::Content-->
                                    <div id="kt_account_settings_deactivate" class="collapse show">
                                        <!--begin::Form-->
                                        <form id="kt_account_deactivate_form" class="form">
                                            <!--begin::Card body-->
                                            <div class="card-body border-top p-9">
                                                <!--begin::Notice-->
                                                <div class="notice d-flex bg-light-warning rounded border-warning border border-dashed mb-9 p-6">
                                                    <!--begin::Icon-->
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
                                                    <span class="svg-icon svg-icon-2tx svg-icon-warning me-4">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
															<rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)" fill="black" />
															<rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)" fill="black" />
														</svg>
													</span>
                                                    <!--end::Svg Icon-->
                                                    <!--end::Icon-->
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex flex-stack flex-grow-1">
                                                        <!--begin::Content-->
                                                        <div class="fw-bold">
                                                            <h4 class="text-gray-900 fw-bolder">You Are Deactivating Your Account</h4>
                                                            <div class="fs-6 text-gray-700">For extra security, this requires you to confirm your email or phone number when you reset yousignr password.
                                                                <br />
                                                                <a class="fw-bolder" href="#">Learn more</a></div>
                                                        </div>
                                                        <!--end::Content-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                </div>
                                                <!--end::Notice-->
                                                <!--begin::Form input row-->
                                                <div class="form-check form-check-solid fv-row">
                                                    <input name="deactivate" class="form-check-input" type="checkbox" value="" id="deactivate" />
                                                    <label class="form-check-label fw-bold ps-2 fs-6" for="deactivate">I confirm my account deactivation</label>
                                                </div>
                                                <!--end::Form input row-->
                                            </div>
                                            <!--end::Card body-->
                                            <!--begin::Card footer-->
                                            <div class="card-footer d-flex justify-content-end py-6 px-9">
                                                <button id="kt_account_deactivate_account_submit" type="submit" class="btn btn-danger fw-bold">Deactivate Account</button>
                                            </div>
                                            <!--end::Card footer-->
                                        </form>
                                        <!--end::Form-->
                                    </div>
                                    <!--end::Content-->
                                </div>
                                <!--end::Deactivate Account-->
                                <!--begin::Modals-->
                                <!--begin::Modal - Two-factor authentication-->
                                <div class="modal fade" id="kt_modal_two_factor_authentication" tabindex="-1" aria-hidden="true">
                                    <!--begin::Modal header-->
                                    <div class="modal-dialog modal-dialog-centered mw-650px">
                                        <!--begin::Modal content-->
                                        <div class="modal-content">
                                            <!--begin::Modal header-->
                                            <div class="modal-header flex-stack">
                                                <!--begin::Title-->
                                                <h2>Choose An Authentication Method</h2>
                                                <!--end::Title-->
                                                <!--begin::Close-->
                                                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                                    <span class="svg-icon svg-icon-1">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
															<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
														</svg>
													</span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <!--end::Close-->
                                            </div>
                                            <!--begin::Modal header-->
                                            <!--begin::Modal body-->
                                            <div class="modal-body scroll-y pt-10 pb-15 px-lg-17">
                                                <!--begin::Options-->
                                                <div data-kt-element="options">
                                                    <!--begin::Notice-->
                                                    <p class="text-muted fs-5 fw-bold mb-10">In addition to your username and password, you’ll have to enter a code (delivered via app or SMS) to log into your account.</p>
                                                    <!--end::Notice-->
                                                    <!--begin::Wrapper-->
                                                    <div class="pb-10">
                                                        <!--begin::Option-->
                                                        <input type="radio" class="btn-check" name="auth_option" value="apps" checked="checked" id="kt_modal_two_factor_authentication_option_1" />
                                                        <label class="btn btn-outline btn-outline-dashed btn-outline-default p-7 d-flex align-items-center mb-5" for="kt_modal_two_factor_authentication_option_1">
                                                            <!--begin::Svg Icon | path: icons/duotune/coding/cod001.svg-->
                                                            <span class="svg-icon svg-icon-4x me-4">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path opacity="0.3" d="M22.1 11.5V12.6C22.1 13.2 21.7 13.6 21.2 13.7L19.9 13.9C19.7 14.7 19.4 15.5 18.9 16.2L19.7 17.2999C20 17.6999 20 18.3999 19.6 18.7999L18.8 19.6C18.4 20 17.8 20 17.3 19.7L16.2 18.9C15.5 19.3 14.7 19.7 13.9 19.9L13.7 21.2C13.6 21.7 13.1 22.1 12.6 22.1H11.5C10.9 22.1 10.5 21.7 10.4 21.2L10.2 19.9C9.4 19.7 8.6 19.4 7.9 18.9L6.8 19.7C6.4 20 5.7 20 5.3 19.6L4.5 18.7999C4.1 18.3999 4.1 17.7999 4.4 17.2999L5.2 16.2C4.8 15.5 4.4 14.7 4.2 13.9L2.9 13.7C2.4 13.6 2 13.1 2 12.6V11.5C2 10.9 2.4 10.5 2.9 10.4L4.2 10.2C4.4 9.39995 4.7 8.60002 5.2 7.90002L4.4 6.79993C4.1 6.39993 4.1 5.69993 4.5 5.29993L5.3 4.5C5.7 4.1 6.3 4.10002 6.8 4.40002L7.9 5.19995C8.6 4.79995 9.4 4.39995 10.2 4.19995L10.4 2.90002C10.5 2.40002 11 2 11.5 2H12.6C13.2 2 13.6 2.40002 13.7 2.90002L13.9 4.19995C14.7 4.39995 15.5 4.69995 16.2 5.19995L17.3 4.40002C17.7 4.10002 18.4 4.1 18.8 4.5L19.6 5.29993C20 5.69993 20 6.29993 19.7 6.79993L18.9 7.90002C19.3 8.60002 19.7 9.39995 19.9 10.2L21.2 10.4C21.7 10.5 22.1 11 22.1 11.5ZM12.1 8.59998C10.2 8.59998 8.6 10.2 8.6 12.1C8.6 14 10.2 15.6 12.1 15.6C14 15.6 15.6 14 15.6 12.1C15.6 10.2 14 8.59998 12.1 8.59998Z" fill="black" />
																	<path d="M17.1 12.1C17.1 14.9 14.9 17.1 12.1 17.1C9.30001 17.1 7.10001 14.9 7.10001 12.1C7.10001 9.29998 9.30001 7.09998 12.1 7.09998C14.9 7.09998 17.1 9.29998 17.1 12.1ZM12.1 10.1C11 10.1 10.1 11 10.1 12.1C10.1 13.2 11 14.1 12.1 14.1C13.2 14.1 14.1 13.2 14.1 12.1C14.1 11 13.2 10.1 12.1 10.1Z" fill="black" />
																</svg>
															</span>
                                                            <!--end::Svg Icon-->
                                                            <span class="d-block fw-bold text-start">
																<span class="text-dark fw-bolder d-block fs-3">Authenticator Apps</span>
																<span class="text-muted fw-bold fs-6">Get codes from an app like Google Authenticator, Microsoft Authenticator, Authy or 1Password.</span>
															</span>
                                                        </label>
                                                        <!--end::Option-->
                                                        <!--begin::Option-->
                                                        <input type="radio" class="btn-check" name="auth_option" value="sms" id="kt_modal_two_factor_authentication_option_2" />
                                                        <label class="btn btn-outline btn-outline-dashed btn-outline-default p-7 d-flex align-items-center" for="kt_modal_two_factor_authentication_option_2">
                                                            <!--begin::Svg Icon | path: icons/duotune/communication/com003.svg-->
                                                            <span class="svg-icon svg-icon-4x me-4">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path opacity="0.3" d="M2 4V16C2 16.6 2.4 17 3 17H13L16.6 20.6C17.1 21.1 18 20.8 18 20V17H21C21.6 17 22 16.6 22 16V4C22 3.4 21.6 3 21 3H3C2.4 3 2 3.4 2 4Z" fill="black" />
																	<path d="M18 9H6C5.4 9 5 8.6 5 8C5 7.4 5.4 7 6 7H18C18.6 7 19 7.4 19 8C19 8.6 18.6 9 18 9ZM16 12C16 11.4 15.6 11 15 11H6C5.4 11 5 11.4 5 12C5 12.6 5.4 13 6 13H15C15.6 13 16 12.6 16 12Z" fill="black" />
																</svg>
															</span>
                                                            <!--end::Svg Icon-->
                                                            <span class="d-block fw-bold text-start">
																<span class="text-dark fw-bolder d-block fs-3">SMS</span>
																<span class="text-muted fw-bold fs-6">We will send a code via SMS if you need to use your backup login method.</span>
															</span>
                                                        </label>
                                                        <!--end::Option-->
                                                    </div>
                                                    <!--end::Options-->
                                                    <!--begin::Action-->
                                                    <button class="btn btn-primary w-100" data-kt-element="options-select">Continue</button>
                                                    <!--end::Action-->
                                                </div>
                                                <!--end::Options-->
                                                <!--begin::Apps-->
                                                <div class="d-none" data-kt-element="apps">
                                                    <!--begin::Heading-->
                                                    <h3 class="text-dark fw-bolder mb-7">Authenticator Apps</h3>
                                                    <!--end::Heading-->
                                                    <!--begin::Description-->
                                                    <div class="text-gray-500 fw-bold fs-6 mb-10">Using an authenticator app like
                                                        <a href="https://support.google.com/accounts/answer/1066447?hl=en" target="_blank">Google Authenticator</a>,
                                                        <a href="https://www.microsoft.com/en-us/account/authenticator" target="_blank">Microsoft Authenticator</a>,
                                                        <a href="https://authy.com/download/" target="_blank">Authy</a>, or
                                                        <a href="https://support.1password.com/one-time-passwords/" target="_blank">1Password</a>, scan the QR code. It will generate a 6 digit code for you to enter below.
                                                        <!--begin::QR code image-->
                                                        <div class="pt-5 text-center">
                                                            <img src="assets/media/misc/qr.png" alt="" class="mw-150px" />
                                                        </div>
                                                        <!--end::QR code image--></div>
                                                    <!--end::Description-->
                                                    <!--begin::Notice-->
                                                    <div class="notice d-flex bg-light-warning rounded border-warning border border-dashed mb-10 p-6">
                                                        <!--begin::Icon-->
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
                                                        <span class="svg-icon svg-icon-2tx svg-icon-warning me-4">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
																<rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)" fill="black" />
																<rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)" fill="black" />
															</svg>
														</span>
                                                        <!--end::Svg Icon-->
                                                        <!--end::Icon-->
                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex flex-stack flex-grow-1">
                                                            <!--begin::Content-->
                                                            <div class="fw-bold">
                                                                <div class="fs-6 text-gray-700">If you having trouble using the QR code, select manual entry on your app, and enter your username and the code:
                                                                    <div class="fw-bolder text-dark pt-2">KBSS3QDAAFUMCBY63YCKI5WSSVACUMPN</div></div>
                                                            </div>
                                                            <!--end::Content-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </div>
                                                    <!--end::Notice-->
                                                    <!--begin::Form-->
                                                    <form data-kt-element="apps-form" class="form" action="#">
                                                        <!--begin::Input group-->
                                                        <div class="mb-10 fv-row">
                                                            <input type="text" class="form-control form-control-lg form-control-solid" placeholder="Enter authentication code" name="code" />
                                                        </div>
                                                        <!--end::Input group-->
                                                        <!--begin::Actions-->
                                                        <div class="d-flex flex-center">
                                                            <button type="reset" data-kt-element="apps-cancel" class="btn btn-light me-3">Cancel</button>
                                                            <button type="submit" data-kt-element="apps-submit" class="btn btn-primary">
                                                                <span class="indicator-label">Submit</span>
                                                                <span class="indicator-progress">Please wait...
																<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                            </button>
                                                        </div>
                                                        <!--end::Actions-->
                                                    </form>
                                                    <!--end::Form-->
                                                </div>
                                                <!--end::Options-->
                                                <!--begin::SMS-->
                                                <div class="d-none" data-kt-element="sms">
                                                    <!--begin::Heading-->
                                                    <h3 class="text-dark fw-bolder fs-3 mb-5">SMS: Verify Your Mobile Number</h3>
                                                    <!--end::Heading-->
                                                    <!--begin::Notice-->
                                                    <div class="text-muted fw-bold mb-10">Enter your mobile phone number with country code and we will send you a verification code upon request.</div>
                                                    <!--end::Notice-->
                                                    <!--begin::Form-->
                                                    <form data-kt-element="sms-form" class="form" action="#">
                                                        <!--begin::Input group-->
                                                        <div class="mb-10 fv-row">
                                                            <input type="text" class="form-control form-control-lg form-control-solid" placeholder="Mobile number with country code..." name="mobile" />
                                                        </div>
                                                        <!--end::Input group-->
                                                        <!--begin::Actions-->
                                                        <div class="d-flex flex-center">
                                                            <button type="reset" data-kt-element="sms-cancel" class="btn btn-light me-3">Cancel</button>
                                                            <button type="submit" data-kt-element="sms-submit" class="btn btn-primary">
                                                                <span class="indicator-label">Submit</span>
                                                                <span class="indicator-progress">Please wait...
																<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                            </button>
                                                        </div>
                                                        <!--end::Actions-->
                                                    </form>
                                                    <!--end::Form-->
                                                </div>
                                                <!--end::SMS-->
                                            </div>
                                            <!--begin::Modal body-->
                                        </div>
                                        <!--end::Modal content-->
                                    </div>
                                    <!--end::Modal header-->
                                </div>
                                <!--end::Modal - Two-factor authentication-->
                                <!--end::Modals-->
                            </div>
                            <!--end::Container-->
                    </div>
                    <!--end::Main column-->
                </form>
                <!--end::Form-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Post-->
    </div>
    <!--end::Content-->
@endsection
@section('page-js')
    <!--begin::Page Vendors Javascript(used by this page)-->
    <script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <script src="{{ asset('assets/plugins/custom/formrepeater/formrepeater.bundle.js')}}"></script>
    <!--end::Page Vendors Javascript-->
@endsection
