@extends('dashboard.layouts.app')

@section('content')
    <div class="content">
        <div class="content_box" >
            <div class="status">
                <div class="status_main">
                    <p>المشتريات</p>
                </div>
                <div class="status_secondary">
                    <p class="green">المشتريات</p>
                    <i class="fa-solid fa-chevron-down"></i>
                    <p>إضافة مشروع</p>
                </div>
            </div>
            <form id="PurchaseForm">
                @csrf
                <div class="cont">
                <div class="level" >
                    <p>الرجاء إكمال الخطوات التالية</p>
                    <div class="diagram">
                        <div class="point completed">
                            <div class="number" >١</div>
                            <div class="icon"><i class="fa-solid fa-check not-active "></i></div>
                            <div class="name" >معلومات الشراء</div>
                        </div>
                        <span class="line line_active"></span>
                        <div class="point active ">
                            <div class="number" >٢</div>
                            <div class="icon"><i class="fa-solid fa-check not-active "></i></div>
                            <div class="name" >معلومات مالية</div>
                        </div>
                        <span class="line"></span>
                        <div class="point">
                            <div class="number" >٣</div>
                            <div class="icon"><i class="fa-solid fa-check not-active "></i></div>
                            <div class="name" >المستندات</div>
                        </div>
                    </div>
                </div>

                <div class="input_box">
                    <p>الدخل السنوي بالريال السعودي</p>
                    <div  class="input"  >
                        <input name="income" value="{{ isset($finance) ? $finance->income :''  }}" type="text" placeholder="20,000 ر.س">
                    </div>
                    <div class="error error_income" >
                    </div>
                </div>

                <div class="input_box">
                    <p>عدد الموظفين</p>
                    <div  class="input"  >
                        <input name="employees" value="{{ isset($finance) ? $finance->employees :''  }}" type="text" placeholder="17">
                    </div>
                    <div class="error error_employees" >
                    </div>
                </div>

                <div class="input_box">
                    <div class="head">
                        <p>الأصول الحالية</p>
                        <img src="{{ asset('assets/img/info-2.png') }}" alt="">
                    </div>
                    <div  class="input"  >
                        <input name="current_assets" value="{{ isset($finance) ? $finance->current_assets :''  }}" type="text" placeholder="17,000">
                    </div>
                    <div class="error error_current_assets" >
                    </div>
                </div>

                <div class="input_box">
                    <div class="head">
                        <p>المطالبات الحالية</p>
                        <img src="{{ asset('assets/img/info-2.png') }}" alt="">
                    </div>
                    <div  class="input"  >
                        <input name="current_claims" value="{{ isset($finance) ? $finance->current_claims :''  }}" type="text" placeholder="17,000">
                    </div>
                    <div class="error error_current_claims" >
                    </div>
                </div>

                <div class="input_box">
                    <p> الموقع الإلكتروني <span class="placehoder">(اختياري)</span></p>
                    <div  class="input"  >
                        <input name="website" value="{{ isset($finance) ? $finance->website :''  }}" type="text" placeholder="www.example.com">
                    </div>
                    <div class="error error_website" >
                    </div>
                </div>


                <div class="input_box checkbox_box">
                    <label for="terms" class="terms position-relative">
                        <input type="checkbox" id="terms" name="terms" {{ isset($finance) ? 'checked' :''  }}>
                        <span class="terms_check"><i class="fa-solid fa-check"></i></span>
                        <p class="d-inline">أوافق على إصدار سند لأمر كضمان شخصي للتمويل</p>
                    </label>
                    <div class="error error_terms" >
                    </div>
                </div>

                <div class=" radio_box">
                    <div>
                        <div class="text">
                            <p>هل تود رهن الأصل؟</p>
                        </div>
                        <div class="radio_c">
                            <div class="">
                                <labe class="label">
                                    <input type="radio" name="mortgage_original"
                                           value="1" {{ isset($finance->mortgage_original) ? ($finance->mortgage_original == 1 ? 'checked' : '' )   :''  }}  >
                                    <p class="">نعم</p>
                                </labe>
                            </div>
                            <div class="">
                                <labe class="label">
                                    <input type="radio" name="mortgage_original"
                                           value="0" {{ isset($finance->mortgage_original) ? ($finance->mortgage_original ==0 ? 'checked' : '' )   :''  }} >
                                    <p class="">لا</p>
                                </labe>
                            </div>
                        </div>

                    </div>
                    <div class="error error_mortgage_original" >
                    </div>
                    <div>
                        <div class="text">
                            <p>هل يوجد ضمانات أخرى؟</p>
                        </div>
                        <div class="radio_c">
                            <div class="">
                                <labe class="label">
                                    <input type="radio" name="other_guarantees"
                                           value="1" {{ isset($finance->other_guarantees) ? ($finance->other_guarantees == 1 ? 'checked' : '' )   :''  }}  >
                                    <p class="">نعم</p>
                                </labe>
                            </div>
                            <div class="">
                                <labe class="label">
                                    <input type="radio" name="other_guarantees"
                                           value="0" {{ isset($finance->other_guarantees) ? ($finance->other_guarantees == 0 ? 'checked' : '' )   :''  }}  >
                                    <p class="">لا</p>
                                </labe>
                            </div>
                        </div>

                    </div>
                    <div class="error error_other_guarantees" >
                    </div>
                </div>


                <div class="pages">
                    <div class="past">
                        <div class="">
                            <i class="fa-solid fa-chevron-down "></i>
                        </div>
                        <a href="{{ route("dashboard.projects.purchase.edit",['project'=>$project]) }}">السابق</a>
                    </div>

                    <div class="" id="submit">
                        <p class="">التالي</p>
                        <div class="">
                            <i class="fa-solid fa-chevron-down "></i>
                        </div>
                    </div>

                </div>




            </div>
            </form>
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
                                $('.error_'+err).append('<small class="input_error">'+message+'</small>')
                            })
                        }
                    }
                }
            });

        });
    </script>
@endsection
