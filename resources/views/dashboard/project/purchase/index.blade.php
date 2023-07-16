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
                            <i class="fa-solid fa-check active  "></i>
                        </div>
                        <p class="text-center mt-3 text-green font-size-14-px">معلومات الشراء</p>
                    </div>
                    <span class="line  line-right "></span>
                    <div class="">
                        <p class="text-center">٢</p>
                        <div class="status d-flex  justify-content-center  align-items-center">
                            <i class="fa-solid fa-check not-active  "></i>
                        </div>
                        <div>
                            <p class="text-center  pt-3   font-size-14-px">معلومات مالية</p>
                        </div>
                    </div>
                    <span class="line line-left"></span>
                    <div>
                        <p class="text-center">٣</p>
                        <div class="status d-flex  justify-content-center  align-items-center">
                            <i class="fa-solid fa-check not-active "></i>
                        </div>
                        <p class="text-center pt-3   font-size-14-px">المستندات</p>
                    </div>
                </div>

                <div class="pe-3 ps-3 ">
                    <div class="d-flex  justify-content-between pt-5 ">
                        <div class="ms-3">
                            <p class="text-green font-size-18-px m-0 d-flex align-items-center">معلومات الشراء</p>
                        </div>
                        <span class="title-line flex-grow-1"></span>
                    </div>

                    <form id="PurchaseForm" enctype="multipart/form-data">
                        @csrf
                        <div class="pt-4">
                            <div>
                                <p>نوع المشتريات</p>
                            </div>
                            <div>
                                <input name="type" value="{{ isset($purchase) ? $purchase->type : '' }}" class="form-input" type="text" placeholder="نوع المشتريات">
                            </div>
                            <div class="error error_type" >
                            </div>
                        </div>
                        <div class="pt-4">
                            <div>
                                <p>عرض السعر</p>
                            </div>
                            <div class="form-input d-flex justify-content-end">
                                <div  class=" file-log h-100 w-75  ">
                                    <div class="input-file-log  d-flex justify-content-end ps-2 ">
                                        <div class="d-flex align-items-center text-start">
                                            <div>
                                                <p class="font-size-10-px input-file-log-name">file name.pdf</p>
                                                <p class="font-size-10-px input-file-log-size">2.45 MB</p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center pe-1">
                                            <img src="{{ asset('./assets/img/pdf.png') }}" alt="">
                                        </div>
                                        <div>
                                            <i class="fa-solid fa-xmark remove-file"></i>
                                        </div>
                                    </div>
                                </div>
                                <label class="upload_file" for="file">
                                    <img class="img-fluid " src="{{ asset('./assets/img/material-symbols_upload-rounded.png') }}"  alt="">
                                    <p class="d-inline text-white m-0 me-1">تحميل الملف</p>
                                </label>
                                <input name="price" accept=".pdf" id="file" class="d-none price price-file"  type="file">
                            </div>
                            <div class="error error_price" >
                            </div>
                            <div class="note  mt-3">
                                <img class="img-fluid  img-24-24" src="{{ asset('./assets/img/info-2.png') }}" alt="">
                                <p class="m-0 d-inline">يجب أن يكون ملفك بصيغة pdf. ولا يزيد حجمه عن 10 ميغابايت</p>
                            </div>
                        </div>
                        <div class="pt-4">
                            <div>
                                <p>مبلغ المشتريات بالريال السعودي</p>
                            </div>
                            <div>
                                <input name="amount" value="{{  isset($purchase) ? $purchase->amount  : '' }}" class="form-input" type="text" placeholder="مثال: 350,000">
                            </div>
                            <div class="error error_amount" >
                            </div>
                            <div class="note  mt-3">
                                <p class="m-0 d-inline font-size-14-px">مبلغ المشتريات للمنشأة من 100 ألف ريال سعودي إلى 500 ألف ريال سعودي</p>
                            </div>
                        </div>
                        <div class="pt-4">
                            <div>
                                <p>فترة السداد بالأشهر</p>
                            </div>
                            <div class="position-relative">
                                <select name="payment_period" class="form-input "  >
                                    <option >اختر فترة السداد</option>
                                    @for($i=1;$i<=12;$i++)
                                        <option
                                            @if(( isset($purchase) ? $purchase->payment_period : 0) == $i) selected @endif
                                        value="{{$i}}">{{$i}}</option>
                                    @endfor

                                </select>
                                <div class="error error_payment_period" >
                                </div>
                                <div class="position-absolute select-arrow ">
                                    <i class="fa-solid fa-chevron-down text-black-70 "  ></i>
                                </div>
                            </div>
                        </div>

                        <div class="card-info mt-5 p-4">
                            <div>
                                <p class="text-green">حاسبة القسط الشهري التقريبية</p>
                            </div>
                            <div class="col-8 d-flex justify-content-between p-0">
                                <p class="text-white-97">مبلغ المشتريات</p>
                                <p class="text-white-97">المرابحة</p>
                                <p class="text-white-97">المبلغ الكلي</p>
                            </div>
                            <div class="col-8 d-flex justify-content-between p-0">
                                <p class="text-green">0.00 <span class="font-size-12-px">ر.س</span></p>
                                <p class="text-green"><span class="text-white-97 ms-3">+</span>0.00 <span>ر.س</span></p>
                                <p class="text-green"><span class="text-white-97 ms-3">=</span>0.00 <span>ر.س</span></p>
                            </div>

                            <div class="mt-3">
                                <p class="d-inline text-white-97 font-size-14-px ms-3">القسط الشهري</p>
                                <a class="font-size-12-px text-blue" href="#">تطبيق الشروط والأحكام</a>
                            </div>
                            <div class="mt-2">
                                <p class="text-green font-size-18-px ">0.00 <span class="font-size-12-px">ر.س</span></p>
                            </div>
                            <div class="mt-3">
                                <p class="d-inline text-white-97 font-size-14-px ms-3">الرسوم الإدارية</p>
                                <a class="font-size-12-px text-blue" href="#">تطبيق الشروط والأحكام</a>
                            </div>
                            <div class="mt-2">
                                <p class="text-green font-size-18-px m-0">0.00 <span class="font-size-12-px">ر.س</span></p>
                            </div>
                        </div>
                        <div class="d-flex  justify-content-between pt-5 ">
                            <div class="ms-3">
                                <p class="text-green font-size-18-px m-0 d-flex align-items-center">معلومات المورد</p>
                            </div>
                            <span class="title-line flex-grow-1"></span>
                        </div>
                        <div class="pt-5">
                            <div>
                                <p>اختر من الموردين</p>
                            </div>
                            <div class="position-relative">
                                <select name="supplier_id" class="form-input supplier_select "  >
                                    <option >اختر من الموردين</option>
                                    @foreach($suppliers as $susupplier)
                                        <option
                                            @if(( isset($purchase) ? $purchase->supplier_id : 0) == $susupplier->id) selected @endif
                                        value="{{ $susupplier->id }}">
                                            {{ $susupplier->name }}
                                        </option>
                                    @endforeach
                                </select>
                                <div class="position-absolute select-arrow ">
                                    <i class="fa-solid fa-chevron-down text-black-70 "  ></i>
                                </div>
                            </div>
                            <div class="error error_supplier_id" >
                            </div>
                        </div>
                        <div class="card-info mt-3 p-4 supplier-card">
                            <div>
                                <p class="text-supplier-blue">بيانات المورد </p>
                            </div>
                            <div class="col-10 d-flex justify-content-between p-0">
                                <p class="text-white-97">اسم المنشأة الموردة</p>
                                <p class="text-white-97">اسم المسؤول</p>
                                <p class="text-white-97">القطاع</p>
                            </div>
                            <div class="col-10 d-flex justify-content-between p-0 line pb-3">
                                <p class="text-green supplier_facility">خديجة محمد</p>
                                <p class="text-green supplier_name ">خديجة محمد</p>
                                <p class="text-green supplier_sector">اسم القطاع</p>
                            </div>
                            <div class="mt-3">
                                <p class="text-supplier-blue">بيانات التواصل</p>
                            </div>
                            <div class="mt-3 col-10 d-flex justify-content-between p-0 line pb-4">
                                <div class="">
                                    <img class="img-24-24" src="{{ asset('./assets/img/ic_sharp-phone-enabled.png') }}" alt="">
                                    <p class="d-inline text-green font-size-14-px counct supplier_contact_info_phone">+966 7655 6666</p>
                                </div>
                                <div class="">
                                    <img  class="img-24-24"  src="{{ asset('./assets/img/dashicons_email-alt.png') }}" alt="">
                                    <p class="d-inline text-green font-size-14-px counct supplier_contact_info_email">khadija-ahmed@gmail.com</p>
                                </div>
                            </div>
                            <div class="mt-3">
                                <p class="text-supplier-blue">المرفقات</p>
                            </div>
                            <div class="">
                                <img class="img-fluid ms-2 img-24-24"  src="{{ asset('./assets/img/fluent_attach-24-regular.png') }}" alt="">
                                <a class=" text-blue font-size-14-px">شهادة الحساب البنكي للمورد.pdf</a>
                            </div>

                        </div>

                        <div class="d-flex justify-content-center mt-5" >
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
        const suppliers = {!! json_encode( $suppliers ) !!};
        $('.supplier-card').hide();



        $('.supplier_select').change(function () {
            var supplier_id =  $(this).val();
            function findSupplier(id) {
                return (supplier) => supplier.id == id;
            }
            var supplier_info = suppliers.find(findSupplier(supplier_id));
            if(supplier_info){
                $('.supplier_name').text(supplier_info.name);
                $('.supplier_facility').text(supplier_info.facility);
                $('.supplier_sector').text(supplier_info.sector);
                var contact_info = JSON.parse(supplier_info.contact_info)
                $('.supplier_contact_info_phone').text(contact_info.phone);
                $('.supplier_contact_info_email').text(contact_info.email);

                $('.supplier-card').show();
            }else{
                $('.supplier-card').hide();
            }
        })

        $('.file-log').css("display", "none");
        $('.price').change(function () {
            var file =  this.files[0];
            $('.input-file-log-name').text(file.name.substr(0, 5)+'...'+file.name.substr(-8))
            $('.input-file-log-size').text((file.size / 1000000).toFixed(2) +' MB' )
            $('.file-log').show();
            $('.upload_file').hide();
            $('.file-log').parents('div').first()
                .removeClass('justify-content-end')
                .addClass('justify-content-start')
                .css('background-color','#FFFFFF');
        })
        $('.remove-file').click(function (){
            $('.upload_file').show();
            $('.file-log').hide();
            $('.file-log').parents('div').first()
                .addClass('justify-content-end')
                .removeClass('justify-content-start')
                .css('background-color','#F1F1F1');

            $(".price-file").val(null);
        });

        $(document).on('click', '#submit', function (e) {
            var formData = new FormData($('#PurchaseForm')[0]);
            $(".error").empty();
            var method = '{!! isset($operation)   ? 'post' : 'put'  !!}';
            if (method == 'put'){
                formData.append('_method', 'PUT');
            }

            $.ajax({
                type : 'post'  ,
                enctype: 'multipart/form-data',
                url: "{{ route('dashboard.projects.purchase.store',['project'=>$project]) }}",
                data: formData ,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                processData: false,
                contentType: false,
                cache: false,
                success: function (data) {
                    window.location.href
                        = " {{route('dashboard.projects.finance.'.($project->finance ? 'edit' : 'create') ,['project'=>$project])}} ";
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
