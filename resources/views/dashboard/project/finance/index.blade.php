@extends('dashboard.layouts.app')

@section('content')
    <div class="" >
        <div class="d-flex justify-content-center">
            <div class="col-lg-10 col-12 pt-5">
                <h1 class="text-green font-size-28-px">المشتريات</h1>
                <p class="text-black-70"><span class="text-green">المشتريات ></span> إضافة مشروع</p>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <div class="col-12 col-sm-10 col-md-8 col-lg-6   pt-5">
                <div class="text-center">
                    <p>الرجاء إكمال الخطوات التالية</p>
                </div>

                <div class="d-flex justify-content-between stat position-relative">
                    <div>
                        <p class="text-center text-green ">١</p>
                        <div class="status d-flex justify-content-center align-items-center">
                            <i class="fa-solid fa-check completed "></i>
                        </div>
                        <p class="text-center mt-2 text-green font-size-14-px">معلومات الشراء</p>
                    </div>
                    <span class="line  line-right completed"></span>
                    <div class="">
                        <p class="text-center text-green">٢</p>
                        <div class="status d-flex  justify-content-center  align-items-center">
                            <i class="fa-solid fa-check active "></i>
                        </div>
                        <div>
                            <p class="text-center text-green  pt-3   font-size-14-px">معلومات مالية</p>
                        </div>
                    </div>
                    <span class="line line-left "></span>
                    <div>
                        <p class="text-center">٣</p>
                        <div class="status d-flex  justify-content-center  align-items-center">
                            <i class="fa-solid fa-check not-active "></i>
                        </div>
                        <p class="text-center pt-2   font-size-14-px">المستندات</p>
                    </div>
                </div>

                <div class="pe-3 ps-3 ">


                    <form id="PurchaseForm">
                        @csrf
                        <div class="pt-5">
                            <div>
                                <p>الدخل السنوي بالريال السعودي</p>
                            </div>
                            <div>
                                <input name="income" value="{{ isset($finance) ? $finance->income :''  }}" class="form-input" type="text" placeholder="الدخل السنوي بالريال السعودي">
                            </div>
                            <div class="error error_income" >
                            </div>
                        </div>
                        <div class="pt-4">
                            <div>
                                <p>عدد الموظفين</p>
                            </div>
                            <div>
                                <input name="employees" value="{{ isset($finance) ? $finance->employees :''  }}"  class="form-input" type="text" placeholder="عدد الموظفين">
                            </div>
                            <div class="error error_employees" >
                            </div>
                        </div>
                        <div class="pt-4">
                            <div>
                                <p class="d-inline-flex mb-3">الأصول الحالية</p>
                                <img class="img-fluid  img-24-24" src="{{ asset('./assets/img/info-2.png') }}" alt="">
                            </div>
                            <div>
                                <input name="current_assets" value="{{ isset($finance) ? $finance->current_assets :''  }}"  class="form-input" type="text" placeholder="الأصول الحالية">
                            </div>
                            <div class="error error_current_assets" >
                            </div>
                        </div>
                        <div class="pt-4">
                            <div>
                                <p class="d-inline-flex mb-3">المطالبات الحالية</p>
                                <img class="img-fluid  img-24-24" src="{{ asset('./assets/img/info-2.png') }}" alt="">
                            </div>
                            <div>
                                <input name="current_claims" value="{{ isset($finance) ? $finance->current_claims :''  }}" class="form-input" type="text" placeholder="المطالبات الحالية">
                            </div>
                            <div class="error error_current_claims" >
                            </div>
                        </div>
                        <div class="pt-4">
                            <div>
                                <p>الموقع الإلكتروني<span class="text-white-97 me-1">(اختياري)</span></p>
                            </div>
                            <div>
                                <input name="website" value="{{ isset($finance) ? $finance->website :''  }}"  class="form-input" type="text" placeholder="www.example.com">
                            </div>
                            <div class="error error_website" >
                            </div>
                        </div>
                        <div class="pt-4">
                            <div class="pe-3">
                                <label for="terms" class="terms position-relative">
                                    <input type="checkbox"  id="terms" name="terms" {{ isset($finance) ? 'checked' :''  }} class="ms-2 img-18-18 border-success" >
                                    <span class="terms_check"><i class="fa-solid fa-check"></i></span>
                                    <p class="d-inline">أوافق على إصدار سند لأمر كضمان شخصي للتمويل</p>
                                </label>
                            </div>
                            <div class="error error_terms" >
                            </div>
                        </div>
                        <div>
                            <div class="pt-4 d-flex">
                                <div>
                                    <p class=" ms-5" >هل تود رهن الأصل؟</p>
                                    <p class=" ms-5" >هل يوجد ضمانات أخرى؟</p>
                                </div>
                                <div>
                                    <div class="mb-3 d-flex justify-content-end">
                                        <div class="d-flex align-items-center">
                                            <labe class="ms-3 d-flex align-items-center">
                                                <input type="radio" name="mortgage_original"
                                                       value="1" {{ isset($finance->mortgage_original) ? ($finance->mortgage_original == 1 ? 'checked' : '' )   :''  }}  >
                                                <p class="m-0 me-2">نعم</p>
                                            </labe>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <labe class="ms-3 d-flex align-items-center">
                                                <input type="radio" name="mortgage_original"
                                                       value="0" {{ isset($finance->mortgage_original) ? ($finance->mortgage_original ==0 ? 'checked' : '' )   :''  }} >
                                                <p class="m-0 me-2">لا</p>
                                            </labe>
                                        </div>
                                    </div>
                                    <div class=" d-flex justify-content-end">
                                        <div class="d-flex align-items-center">
                                            <labe class="ms-3 d-flex align-items-center">
                                                <input type="radio" name="other_guarantees"
                                                       value="1" {{ isset($finance->other_guarantees) ? ($finance->other_guarantees == 1 ? 'checked' : '' )   :''  }}  >
                                                <p class="m-0 me-2">نعم</p>
                                            </labe>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <labe class="ms-3 d-flex align-items-center">
                                                <input  type="radio" name="other_guarantees"
                                                        value="0" {{ isset($finance->other_guarantees) ? ($finance->other_guarantees == 0 ? 'checked' : '' )   :''  }}  >
                                                <p class="m-0 me-2">لا</p>
                                            </labe>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="error error_mortgage_original" >
                            </div>
                            <div class="error error_other_guarantees" >
                            </div>
                        </div>




                        <div class="d-flex justify-content-center mt-5" >
                            <a href="{{ route("dashboard.projects.purchase.edit",['project'=>$project]) }}" class="text-decoration-none p-2 col-4 d-flex justify-content-center align-items-center" >
                                <div class=" ms-3">
                                    <i class="fa-solid fa-chevron-down text-black d-flex justify-content-center "
                                       style="transform: rotate(-90deg);"  ></i>
                                </div>
                                <p class=" m-0 text-black">السابق</p>
                            </a>
                            <div class="bg-green p-2 col-4 d-flex justify-content-center align-items-center" id="submit">
                                <p class=" m-0 ms-3 text-white">التالي</p>
                                <div class="">
                                    <i class="fa-solid fa-chevron-down text-white d-flex justify-content-center "  ></i>
                                </div>
                            </div>
                        </div>

                    </form>



                </div>



            </div>
        </div>












    </div>
@endsection

@section('script')
    <script >



        $(document).on('click', '#submit', function (e) {
            var formData = new FormData($('#PurchaseForm')[0]);
            var method = '{!! isset($operation)   ? 'post' : 'put'  !!}';
            if (method == 'put'){
                formData.append('_method', 'PUT');
            }
            $(".error").empty();
            $.ajax({
                type: 'post',
                enctype: 'multipart/form-data',
                url: "{{ route('dashboard.projects.finance.store',['project'=>$project]) }}",
                data: formData ,
                processData: false,
                contentType: false,
                cache: false,
                success: function (data) {
                    console.log(data)
                    window.location.href
                        = " {{route('dashboard.projects.document.'.($project->document ? 'edit' : 'create') ,['project'=>$project])}} ";
                }, error: function (reject) {
                    console.log(reject)
                    let errors = reject.responseJSON.errors;
                    for(let err in errors){
                        if (errors.hasOwnProperty(err)) {
                            (errors[err]).forEach(message=>{
                                $('.error_'+err).append('<small class=" d-block text-danger">'+message+'</small>')
                            })
                        }
                    }
                }
            });

        });
    </script>
@endsection
