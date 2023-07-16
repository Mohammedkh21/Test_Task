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
                            <i class="fa-solid fa-check completed "></i>
                        </div>
                        <div>
                            <p class="text-center text-green  pt-2   font-size-14-px">معلومات مالية</p>
                        </div>
                    </div>
                    <span class="line line-left completed "></span>
                    <div>
                        <p class="text-center text-green ">٣</p>
                        <div class="status d-flex  justify-content-center  align-items-center">
                            <i class="fa-solid fa-check active "></i>
                        </div>
                        <p class="text-center pt-2   font-size-14-px">المستندات</p>
                    </div>
                </div>

                <div class="pe-3 ps-3 ">


                    <form action="">
                        <div class="d-flex  justify-content-between pt-5 ">
                            <div class="note  mt-3">
                                <img class="img-fluid img-24-24"  src="{{ asset('./assets/img/info-2.png') }} " alt="">
                                <p class="m-0 d-inline">يجب أن يكون ملفك بصيغة pdf. ولا يزيد حجمه عن 10 ميغابايت</p>
                            </div>
                        </div>

                        <div class="pt-4 to-mult-file">
                            <div>
                                <p>كشف حساب مصرفي لمدة 6 أشهر (يمكنك إرفاق أكثر من ملف)</p>
                            </div>
                            <div class="form-input d-flex justify-content-end ">
                                <label for="bank_statements">
                                    <img class="img-fluid img-upload-file" src=" {{ asset('./assets/img/material-symbols_upload-rounded.png') }}" alt="">
                                    <p class="d-inline text-white m-0 me-1 ">تحميل الملف</p>
                                </label>
                                <input class="d-none mult_file" id="bank_statements" name="bank_statements" type="file">
                            </div>
                            <div class="error error_bank_statements" >
                            </div>
                            <div class="note   mt-3">
                                <div class="all_files bank_statements_files ">





                                </div>
                            </div>
                        </div>


                        <div class="pt-4">
                            <div>
                                <p>شهادة الحساب البنكي للمنشأة</p>
                            </div>
                            <div class="form-input d-flex justify-content-start " style="background-color: #F1F1F1;">
                                <div class="d-flex  h-100 w-75  align-items-center">
                                    <div class="input-file-log  d-flex justify-content-end ps-2 pe-2 " style="background-color: #F1F1F1;">
                                        <div class="d-flex align-items-center text-start">
                                            <div>
                                                <p class="font-size-10-px file_name">file name.pdf</p>
                                                <p class="font-size-10-px file_size">2.45 MB</p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center  pe-1">
                                            <img class="img-32-32" src="{{ asset('./assets/img/pdf.png') }}" alt="">
                                        </div>
                                        <div>
                                            <i class="fa-solid fa-xmark  opacity-0"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="note d-flex  mt-3">
                                <div class="ms-2">
                                    <img class="img-fluid img-24-24" src=" {{ asset('./assets/img/info-2.png') }}" alt="">
                                </div>
                                <p class="m-0 d-inline" style="line-height: 1.875rem;">في حال رغبتك بتعديل معلومات الحساب البنكي يرجى التواصل مع المسؤولين
                                    <a class="text-blue" href="#"> تواصل معنا</a>
                                </p>
                            </div>
                        </div>


                        <div class="pt-4">
                            <div>
                                <p>شهادة ضريبة القيمة المضافة (آخر إقرار ضريبي)</p>
                            </div>
                            <div class="form-input d-flex justify-content-end ">
                                <div class="file-log  h-100 w-75  align-items-center">
                                    <div class="input-file-log  d-flex justify-content-end ps-2 pe-2 ">
                                        <div class="d-flex align-items-center text-start">
                                            <div>
                                                <p class="font-size-10-px file_name">file name.pdf</p>
                                                <p class="font-size-10-px file_size">2.45 MB</p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center  pe-1">
                                            <img class="img-32-32" src="{{ asset('./assets/img/pdf.png') }}" alt="">
                                        </div>
                                        <div>
                                            <i class="fa-solid fa-xmark  remove-singel_file"></i>
                                        </div>
                                    </div>
                                </div>
                                <label for="last_tax">
                                    <img class="img-fluid img-upload-file" src=" {{ asset('./assets/img/material-symbols_upload-rounded.png') }} " alt="">
                                    <p class="d-inline text-white m-0 me-1 ">تحميل الملف</p>
                                </label>
                                <input class="singel_file  d-none  " id="last_tax" name="last_tax" type="file">
                            </div>
                            <div class="error error_last_tax" >
                            </div>
                        </div>



                        <div class="pt-4  to-mult-file">
                            <div>
                                <p>القوائم المالية  (يمكنك إرفاق أكثر من ملف) <span class="text-white-97">(اختياري)</span></p>
                            </div>
                            <div class="form-input d-flex justify-content-end ">
                                <label for="financial_statements">
                                    <img class="img-fluid img-upload-file" src=" {{ asset('./assets/img/material-symbols_upload-rounded.png') }}" alt="">
                                    <p class="d-inline text-white m-0 me-1 ">تحميل الملف</p>
                                </label>
                                <input class="d-none mult_file" id="financial_statements" name="financial_statements" type="file">
                            </div>
                            <div class="error error_financial_statements" >
                            </div>
                            <div class="note   mt-3">
                                <div class="all_files financial_statements_files ">



                                </div>
                            </div>
                        </div>


                        <div class="pt-4  to-mult-file">
                            <div>
                                <p>الوثائق الداعمة (يمكنك إرفاق أكثر من ملف)<span class="text-white-97">(اختياري)</span></p>
                            </div>
                            <div class="form-input d-flex justify-content-end ">
                                <label for="supporting_documents">
                                    <img class="img-fluid img-upload-file" src=" {{ asset('./assets/img/material-symbols_upload-rounded.png') }}" alt="">
                                    <p class="d-inline text-white m-0 me-1 ">تحميل الملف</p>
                                </label>
                                <input class="d-none mult_file" id="supporting_documents" name="supporting_documents" type="file">
                            </div>
                            <div class="error error_supporting_documents" >
                            </div>
                            <div class="note   mt-3">
                                <div class="all_files supporting_documents_files">



                                </div>
                            </div>
                        </div>


                        <div class="pt-5">
                            <div class="pe-3">
                                <label for="terms" class="terms position-relative d-flex">
                                    <div class="position-relative">
                                        <input type="checkbox" id="terms"  name="terms" class="ms-2 img-18-18 border-success">
                                        <span class="terms_check "><i class="fa-solid fa-check"></i></span>
                                    </div>
                                    <p class="d-inline">
                                        أقر بعدم وجود تضارب مصالح بين المنشأة والمورد
                                        <a class="d-block text-green text-decoration-none" href="#">سياسة الاستخدام والخصوصية</a>
                                    </p>
                                </label>
                            </div>
                            <div class="error error_terms" >
                            </div>
                        </div>


                        <div class="d-flex justify-content-center mt-5" >
                            <a href="{{  route("dashboard.projects.finance.edit",['project'=>$project])  }}" class="text-decoration-none p-2 col-4 d-flex justify-content-center align-items-center" >
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
        let files = {
            bank_statements : [],
            financial_statements : [],
            supporting_documents : [],
        }
        let last_tax = '';

        const addFile = (type,file,el)=>{
            var all_files = $(el).closest('.to-mult-file').first().find('.all_files');
            if(type == 'bank_statements'){
                files.bank_statements[file.name] = file;
            }else if(type == 'financial_statements'){
                files.financial_statements[file.name] = file;
            }else if(type == 'supporting_documents'){
                files.supporting_documents[file.name] = file;
            }
            var mult = `
            <div type="${type}" file_name="${file.name}" class="mult-file-log mb-2 d-flex   w-100 align-items-center position-relative" >
                <div class="w-100 d-flex justify-content-between ps-4 pe-2 ">
                    <div class="d-flex justify-content-end log">
                        <div class="d-flex align-items-center text-start">
                            <div>
                                <p class="font-size-10-px file_name">${file.name.substr(0, 5)+'...'+file.name.substr(-8)}</p>
                                <p class="font-size-10-px file_size">${(file.size / 1000000).toFixed(2) +' MB'}</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center  pe-1">
                            <img class="img-32-32" src="{{ asset('./assets/img/pdf.png') }}" alt="">
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <i  class="fa-solid fa-xmark img-24-24 font-size-28-px  remove_mult_file"></i>
                    </div>
                </div>
            </div>
            <div class="error" >
            </div>
            `;
            all_files.append(mult)
        }


        $('.mult_file').change(function(el){
            var file = this.files[0];
            var name = $(this).attr('name');
            if (name == 'bank_statements' && ! Boolean(files.bank_statements[file.name])  ){
                addFile('bank_statements',file,this)
            }else if(name == 'financial_statements' && ! Boolean(files.financial_statements[file.name]) ){
                addFile('financial_statements',file,this)
            }else if(name == 'supporting_documents' && ! Boolean(files.supporting_documents[file.name]) ){
                addFile('supporting_documents',file,this)
            }

        });

        $(document).on('click','.remove_mult_file',function (){
            console.log('delete')
            var file_log = $(this).closest('.mult-file-log');
            if(file_log.attr('type') == 'bank_statements'){
                delete files.bank_statements[file_log.attr('file_name')];
            }else if(file_log.attr('type') == 'financial_statements'){
                delete files.financial_statements[file_log.attr('file_name')];
            }
            else if(file_log.attr('type') == 'supporting_documents'){
                delete files.supporting_documents[file_log.attr('file_name')];
            }
            file_log.remove();
        })








        $('.file-log').css("display", "none");
        $('.singel_file').change(function () {
            var file =  this.files[0];
            var parent = $(this).parent('div').first();
            parent.find('.file_name').text(file.name.substr(0, 5)+'...'+file.name.substr(-8))
            parent.find('.file_size').text((file.size / 1000000).toFixed(2) +' MB' )
            parent.find('.file-log').css("display", "flex");
            parent.find('label').hide();
            parent.removeClass('justify-content-end')
                .addClass('justify-content-start')
                .css('background-color','#FFFFFF');

            last_tax = file;
        });
        $('.remove-singel_file').click(function (){
            var file_log = $(this).closest('.file-log');

            file_log.hide();
            file_log.parent()
                .addClass('justify-content-end')
                .removeClass('justify-content-start')
                .css('background-color','#F1F1F1')
                .find('label')
                .show();
            last_tax = null;
            file_log.find('input').val(null);
        });




        $(document).on('click', '#submit', function (e) {
            var formData = new FormData();
            $(".error").empty();
            var method = '{!! isset($operation)   ? 'post' : 'put'  !!}';
            if (method == 'put'){
                formData.append('_method', 'PUT');
            }
            var index = 0;
            for(let file in files){
                for(let pdf in files[file]){
                    formData.append(file+"["+index+"]",files[file][pdf])
                    index++;
                }
                index =0;
            }
            formData.append('last_tax',last_tax)
            $('#terms').is(":checked") ? formData.append('terms',$('#terms').val()) : '';
            $.ajax({
                type : 'post'  ,
                enctype: 'multipart/form-data',
                url:   "{{ route('dashboard.projects.document.store',['project'=>$project]) }}",
                data: formData ,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                processData: false,
                contentType: false,
                cache: false,
                success: function (data) {
                    window.location.href = " {{route('dashboard.project' )}} ";
                }, error: function (reject) {
                    console.log(reject)
                    let errors = reject.responseJSON.errors;
                    for(let err in errors){
                        console.log(err)
                        if (errors.hasOwnProperty(err)) {
                            if(err.split('.')[1] != null){
                                (errors[err]).forEach(message=>{
                                    $('.'+err.split('.')[0]+'_files').find('.error').eq(err.split('.')[1])
                                        .append('<small class="text-danger">'+message+'</small>')
                                })
                            }else{
                                (errors[err]).forEach(message=>{
                                    $('.error_'+err).append('<small class=" d-block text-danger">'+message+'</small>')
                                })
                            }
                        }
                    }
                }
            });

        });
    </script>
@endsection
