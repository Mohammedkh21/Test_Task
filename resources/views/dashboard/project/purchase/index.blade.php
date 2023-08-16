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
            <form id="PurchaseForm" enctype="multipart/form-data">
                @csrf
                <div class="cont">
                <div class="level" >
                    <p>الرجاء إكمال الخطوات التالية</p>
                    <div class="diagram">
                        <div class="point active">
                            <div class="number" >١</div>
                            <div class="icon"><i class="fa-solid fa-check not-active "></i></div>
                            <div class="name" >معلومات الشراء</div>
                        </div>
                        <span class="line "></span>
                        <div class="point  ">
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


                <div class="title">
                    <p>معلومات الشراء</p>
                    <span></span>
                </div>
                <div class="input_box">
                    <p>نوع المشتريات</p>
                    <div  class="input"  >
                        <input name="type"  value="{{ isset($purchase) ? $purchase->type : '' }}"  type="text" placeholder="نوع المشتريات">
                    </div>
                    <div class="error error_type" >
                    </div>
                </div>


                <div class="input_box">
                    <p>عرض السعر</p>
                    <div  class="input singal_file" >
                        <div class="placehoder uploaded_file">
                            اختر الملف

                        </div>
                        <div class="add_file">
                            <label for="price_file">
                                <img class="img-fluid " src="{{ asset('assets/img/material-symbols_upload-rounded.png') }}" alt="">
                                <p >تحميل الملف</p>
                            </label>
                            <input name="price" id="price_file" class="upload_single_file" type="file">
                        </div>
                    </div>
                    <div class="error error_price" >
                    </div>
                    <div class="info">
                        <img src="{{ asset('assets/img/info-2.png') }}" alt="">
                        <p>يجب أن يكون ملفك بصيغة pdf. ولا يزيد حجمه عن 10 ميغابايت</p>
                    </div>
                </div>



                <div class="input_box">
                    <p>مبلغ المشتريات بالريال السعودي</p>
                    <div  class="input"  >
                        <input  name="amount" value="{{  isset($purchase) ? $purchase->amount  : '' }}" type="text" placeholder="مثال: 350,000">
                    </div>
                    <div class="error error_amount" >
                    </div>
                    <div class="info">
                        <p>يجب أن يكون ملفك بصيغة pdf. ولا يزيد حجمه عن 10 ميغابايت</p>
                    </div>
                </div>


                <div class="input_box">
                    <p>فترة السداد بالأشهر</p>
                    <div class="select_input">
                        <select  name="payment_period">
                            <option>اختر فترة السداد</option>
                            @for($i=1;$i<=12;$i++)
                                <option
                                    @if(( isset($purchase) ? $purchase->payment_period : 0) == $i) selected @endif
                                    value="{{$i}}">{{$i}}</option>
                            @endfor
                        </select>
                        <div class="position-absolute select_arrow ">
                            <i class="fa-solid fa-chevron-down  "></i>
                        </div>

                    </div>
                    <div class="error error_payment_period" >
                    </div>

                    <div class="calc_fee" >
                        <div class="title">
                            <p>حاسبة القسط الشهري التقريبية</p>
                        </div>
                        <div class="row2">
                            <div class="type">
                                <p>مبلغ المشتريات</p>
                                <p>المرابحة</p>
                                <p>المبلغ الكلي</p>
                            </div>
                            <div class="type_price">
                                <p>0.00 <span>ر.س</span></p>
                                <span>+</span>
                                <p>0.00 <span>ر.س</span></p>
                                <span>=</span>
                                <p>0.00 <span>ر.س</span></p>
                            </div>
                        </div>

                        <div class="row2">
                            <div class="type">
                                <p>القسط الشهري</p>
                                <a href="#">تطبيق الشروط والأحكام</a>
                            </div>
                            <div class="type_price">
                                <p>0.00 <span>ر.س</span></p>
                            </div>
                        </div>

                        <div class="row2">
                            <div class="type">
                                <p>الرسوم الإدارية</p>
                                <a href="#">تطبيق الشروط والأحكام</a>
                            </div>
                            <div class="type_price">
                                <p>0.00 <span>ر.س</span></p>
                            </div>
                        </div>

                    </div>

                </div>


                <div class="title">
                    <p>معلومات المورد</p>
                    <span></span>
                </div>

                <div class="input_box">
                    <p>اختر من الموردين</p>
                    <div class="select_input">
                        <select name="supplier_id" class="supplier_select ">
                            <option>اختر من الموردين</option>
                            @foreach($suppliers as $susupplier)
                                <option
                                    @if(( isset($purchase) ? $purchase->supplier_id : 0) == $susupplier->id) selected @endif
                                value="{{ $susupplier->id }}">
                                    {{ $susupplier->name }}
                                </option>
                            @endforeach
                        </select>
                        <div class="position-absolute select_arrow ">
                            <i class="fa-solid fa-chevron-down  "></i>
                        </div>

                    </div>
                    <div class="error error_supplier_id" >
                    </div>
                    <div class="suppler_box" >
                        <div class="title">
                            <p>بيانات المورد </p>
                        </div>
                        <div class="row2">
                            <div class="type">
                                <p>اسم المنشأة الموردة</p>
                                <p>اسم المسؤول</p>
                                <p>القطاع</p>
                            </div>
                            <div class="type_name">
                                <p class="supplier_name">خديجة محمد </p>
                                <p class="supplier_facility">خديجة محمد </p>
                                <p class="supplier_sector">اسم القطاع </p>
                            </div>
                        </div>

                        <div class="line" ></div>

                        <div class="title">
                            <p>بيانات التواصل </p>
                        </div>

                        <div class="row2">
                            <div class="call_info">
                                <div class="">
                                    <img src="{{ asset('assets/img/ic_sharp-phone-enabled.png') }}" alt="">
                                    <p class="supplier_contact_info_phone">+966 7655 6666</p>
                                </div>
                                <div class="">
                                    <img src="{{ asset('assets/img/dashicons_email-alt.png') }}" alt="">
                                    <p class="supplier_contact_info_email">khadija-ahmed@gmail.com</p>
                                </div>
                            </div>
                        </div>

                        <div class="line" ></div>

                        <div class="title">
                            <p>المرفقات </p>
                        </div>
                        <div class="row2">
                            <div class="doc_info">
                                <div class="">
                                    <img src="{{ asset('assets/img/fluent_attach-24-regular.png') }}" alt="">
                                    <a href="#" class="">شهادة الحساب البنكي للمورد.pdf</a>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="pages">
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
        const suppliers = {!! json_encode( $suppliers ) !!};
        $('.suppler_box').hide();

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

                $('.suppler_box').show();
            }else{
                $('.suppler_box').hide();
            }
        })


        const getShortName = ($name)=>{
            return $name.substr(0, 5)+'...'+$name.substr(-8);
        }

        $('.upload_single_file').change(function(){
            var file =  this.files[0];
            var parent = $(this).parents('.singal_file').first().children('.uploaded_file');
            name = getShortName(file.name);
            size = (file.size / 1000000).toFixed(2) +' MB';
            var singal = `
                  <div class="input-file-log  ">
                    <div class="">
                      <div>
                        <p class="font-size-10-px">${name}</p>
                        <p class="font-size-10-px">${size}</p>
                      </div>
                    </div>
                    <div class="img_box">
                      <img src="{{ asset('assets/img/pdf.png') }}" alt="">
                    </div>
                    <div class="close_file">
                      <i class="fa-solid fa-xmark remove_singel_file"></i>
                    </div>
                  </div>
                  `;
            parent.html(singal)
            parent.css('background-color','#F4FBFA')
            $(this).parents('.singal_file').find('label').hide()
        })
        $(document).on('click','.remove_singel_file',function (){
            console.log(0)
            var parent = $(this).parents('.singal_file').first().children('.uploaded_file');
            parent.text('اختر الملف')
            parent.find('input').val(null);
            parent.css('background-color','transparent')
            console.log(parent.parent('div').find('label').show())
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
                                $('.error_'+err).append('<small class="input_error">'+message+'</small>')
                            })
                        }
                    }
                }
            });

        });
    </script>
@endsection
