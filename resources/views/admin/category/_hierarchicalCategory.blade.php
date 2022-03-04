@foreach($childs as $child)
    <tr>
        <!--begin::Checkbox-->
        <td>
            <div class="form-check form-check-sm form-check-custom form-check-solid">
                <input class="form-check-input" type="checkbox" value="1" />
            </div>
        </td>
        <!--end::Checkbox-->
        <!--begin::Category=-->
        <td>
            <div class="d-flex">
                <!--begin::Thumbnail-->
                <a href="{{ route('admin.categories.edit', $child->slug) }}"
                   class="symbol symbol-50px">
                                                    <span class="symbol-label"
                                                          style="background-image:url({{ asset($child->image) }});"></span>
                </a>
                <!--end::Thumbnail-->
                <div class="ms-5">
                    <!--begin::Title-->
                    <a href="{{ route('admin.categories.edit', $child->slug) }}"
                       class="text-gray-800 text-hover-primary fs-5 fw-bolder mb-1"
                       data-kt-ecommerce-category-filter="category_name"> {!! $char !!} {{ $child->name }}
                        <small style="padding: 2px"
                               class="badge-light-success"><a href="{{route('admin.products.index', $child->slug)}}">{{ count($child->products) }} products</a>
                        </small>
                    </a>
                    <!--end::Title-->
                    <!--begin::Description-->
                    <div class="text-muted fs-7 fw-bolder">{{ $child->desc }}</div>
                    <!--end::Description-->
                </div>
            </div>
        </td>
        <!--end::Category=-->
        <!--begin::Type=-->
        <td>
            <!--begin::Badges-->
            <label class="form-check form-switch form-check-custom form-check-solid">
                <input class="form-check-input" type="checkbox" value="" checked="checked">
                <span class="form-check-label text-muted">Display</span>
            </label>
            <!--end::Badges-->
        </td>
        <!--end::Type=-->
        <!--begin::Action=-->
        <td class="text-end">
            <a href="#" class="btn btn-sm btn-light btn-active-light-primary"
               data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                <span class="svg-icon svg-icon-5 m-0">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                <!--end::Svg Icon-->
            </a>
            <!--begin::Menu-->
            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4"
                 data-kt-menu="true">
                <!--begin::Menu item-->
                <div class="menu-item px-3">
                    <a href="../../demo1/dist/apps/ecommerce/catalog/add-category.html"
                       class="menu-link px-3">Edit</a>
                </div>
                <!--end::Menu item-->
                <!--begin::Menu item-->
                <div class="menu-item px-3">
                    <a href="#" class="menu-link px-3"
                       data-kt-ecommerce-category-filter="delete_row">Delete</a>
                </div>
                <!--end::Menu item-->
            </div>
            <!--end::Menu-->
        </td>
        <!--end::Action=-->
    </tr>
    @if(count($child->childs))
        @include('admin.category._hierarchicalCategory',['childs' => $child->childs, 'char' => $char.'&#8213'])
    @endif
@endforeach
